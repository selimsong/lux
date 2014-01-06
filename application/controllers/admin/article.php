<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article extends CI_Controller {
	var $tablefunc = 'article';
	var $fields = array('number');
	var $funcarr = array('add','order');
	var $categoryarr,$recommendarr,$editlang,$langurl;
	function __construct(){
		parent::__construct();
		$this->Lang_model->loadLang('admin');
		$this->load->helper('array');
		$this->load->helper('date');
		$this->load->model('Purview_model');
		$this->load->model('Tags_model');
		$this->Data_model->setTable($this->tablefunc);
		$this->editlang=$this->Lang_model->getEditLang();
		$this->langurl = $this->Lang_model->loadLangUrl($this->editlang);
	}
	
	public function index(){
		$this->Purview_model->checkPurview($this->tablefunc);
		$post = $this->input->post(NULL,TRUE);
		$getwhere = array();
		$data = $this->Data_model->getData($getwhere,'',0,100,'province');
		$res = array(
				'tpl'=>'list',
				'tablefunc'=>$this->tablefunc,
				'categoryarr'=>$this->categoryarr,
				'recommendarr'=>$this->recommendarr,
				'liststr'=>$this->_setlist($data,true),
				'funcstr'=>$this->Purview_model->getFunc($this->tablefunc,$this->funcarr),
		);
		$this->load->view($this->tablefunc,$res);
	}
	
	public function add(){
		$this->Purview_model->checkPurviewAjax($this->tablefunc,'add');
		$post = $this->input->post(NULL,TRUE);
		if($post['action']==site_aurl($this->tablefunc)){
			$data = elements($this->fields,$post);
			$time = time();
			$data['createtime'] = $time;
			$data['updatetime'] = $time;
			$data['puttime'] = human_to_unix($post['puttime']);
			$data['uid'] = $this->session->userdata('uid');
			$data['lang'] = $this->editlang;
			$data['tags'] = $this->Tags_model->loadTagIds($post['tags'],$this->editlang);
			$data['recommends'] = isset($post['recommends'])&&$post['recommends']?implode(',',$post['recommends']):'';
			$id=$this->Data_model->addData($data);
			$this->Cache_model->deleteSome($this->tablefunc.'_'.$this->editlang);
			$this->Cache_model->deleteSome('recommend_'.$this->editlang.'_'.$this->tablefunc);
			show_jsonmsg(array('status'=>200,'remsg'=>$this->_setlist($this->Data_model->getSingle(array('id'=>$id)),false)));
		}else{
			$res = array(
				'tpl'=>'view',
				'tablefunc'=>$this->tablefunc,
				'categoryarr'=>$this->categoryarr,
				'recommendarr'=>$this->recommendarr,
				'recommends'=>array()
			);
			show_jsonmsg(array('status'=>200,'remsg'=>$this->load->view($this->tablefunc,$res,true)));
		}
	}

	public function edit(){
		$this->Purview_model->checkPurviewAjax($this->tablefunc,'edit');
		$post = $this->input->post(NULL,TRUE);
		if($post['id']&&$post['action']==site_aurl($this->tablefunc)){
			$data = elements($this->fields,$post);
			$this->Data_model->editData(array('id'=>$post['id']),$data,'province');
			$this->Cache_model->deleteSome($this->tablefunc.'_'.$this->editlang);
			$this->Cache_model->deleteSome('recommend_'.$this->editlang.'_'.$this->tablefunc);
			show_jsonmsg(array('status'=>200,'id'=>$post['id'],'remsg'=>$this->_setlist($this->Data_model->getSingle(array('id'=>$post['id']),'province'),false)));
		}else{
			$id = $this->uri->segment(4);
			if($id>0&&$view = $this->Data_model->getSingle(array('id'=>$id),'province')){
				$res = array(
						'tpl'=>'view',
						'tablefunc'=>$this->tablefunc,
						'view'=>$view,
				);
				show_jsonmsg(array('status'=>200,'remsg'=>$this->load->view($this->tablefunc,$res,true)));
			}else{
				show_jsonmsg(array('status'=>203));
			}
		}
	}
	
	public function order(){
		$this->Purview_model->checkPurviewAjax($this->tablefunc,'order');
		$data = $this->Data_model->listorder($this->input->post('ids',true),$this->input->post('listorder',true),'listorder');
		$this->Cache_model->deleteSome($this->tablefunc.'_'.$this->editlang);
		$this->Cache_model->deleteSome('recommend_'.$this->editlang.'_'.$this->tablefunc);
		show_jsonmsg(array('status'=>200,'remsg'=>$this->_setlist($data,true)));
	}
	
	public function del(){
		$this->Purview_model->checkPurviewAjax($this->tablefunc,'del');
		$ids = $this->input->post('optid',true);
		if($ids){
			$this->Data_model->delData($ids);
			$this->Cache_model->deleteSome($this->tablefunc.'_'.$this->editlang);
			$this->Cache_model->deleteSome('recommend_'.$this->editlang.'_'.$this->tablefunc);
			show_jsonmsg(array('status'=>200,'remsg'=>lang('delok'),'ids'=>$ids));
		}else{
			show_jsonmsg(array('status'=>203));
		}
	}
	
	function _setlist($data,$ismultiple=true){
		$newdata = $ismultiple?$data:($newdata[0]=$data);
		if($ismultiple){
			$newdata = $data;
		}else{
			$newdata = array(0=>$data);
		}
		$newstr = '';
		foreach($newdata as $key=>$item){
			$item['func'] = '';
			if($this->Purview_model->checkPurviewFunc($this->tablefunc,'edit')){
				$item['func'] .= $this->Purview_model->getSingleFunc(site_aurl($this->tablefunc.'/edit/'.$item['id']),'edit');
			}
//			if($this->Purview_model->checkPurviewFunc($this->tablefunc,'order')){
//				$item['func'] .= $this->Purview_model->getSingleFunc(site_aurl($this->tablefunc.'/order'),'order');
//			}
//			if($this->Purview_model->checkPurviewFunc($this->tablefunc,'del')){
//				$item['func'] .=  $this->Purview_model->getSingleFunc(site_aurl($this->tablefunc.'/del/'.$item['id']),'sdel',$item['id']);
//			}
			$categorystr = isset($this->categoryarr[$item['category']])?'[<a href="'.site_url('category/'.$this->categoryarr[$item['category']]['dir']).$this->langurl.'" target="_blank"><font color="green">'.$this->categoryarr[$item['category']]['name'].'</font></a>]':'';
			$newstr.='<tr id="tid_'.$item['id'].'">
			<td width=30><input type=checkbox name="optid[]" value='.$item['id'].'></td>
			<td>'.$item['province'].'</td>
			<td width=80>'.$item['number'].'</td>
			<td width=80>'.$item['real_number'].'</td>
			<td width=50>'.$item['func'].'</td></tr>';
		}
		return $newstr;
	}
}