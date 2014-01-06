<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Share extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->Cache_model->setLang($this->input->get());
		$this->Lang_model->loadLang('front',$this->Cache_model->currentLang);
		if($this->uri->segment(3)){
			show_404();
		}
		$this->load->helper('tags');
	}
	
	public function index(){
		$config = $this->Cache_model->loadConfig();
		$config['seo_title'] = '燃情故事';
		$config['seo_keywords'] = $config['site_keywords'];
		$config['seo_description'] = $config['site_description'];
        $list = $this->Data_model->getData(array(),'id DESC',0,100,'share_story');
        $this->load->setPath();
		$res = array(
            'config'=>$config,
            'currentLang'=>$this->Cache_model->currentLang,
            'langurl'=>$this->Cache_model->langurl,
            'list'=>$this->Cache_model->handleModelData($list),
            'navShow'=>4
        );
		$tpl = 'share';
		$this->load->view($config['site_template'].'/'.$tpl,$res);
	}

    public function uploadImg(){
        $verifyToken = md5('wood' . $this->input->post('timestamp') . 'spring');
        if (!empty($_FILES) && $this->input->post('token') == $verifyToken) {
            $upload_config['file_name'] = date('YmdHis');
            $upload_config['upload_path'] = './data/attachment/image/share/';
            $upload_config['allowed_types'] = 'jpg|jpeg|png';
            $upload_config['max_size'] = '2048';
            $upload_config['max_width']  = '0';
            $upload_config['max_height']  = '0';

            $this->load->library('upload', $upload_config);
            $field_name = 'Filedata';
            if($this->upload->do_upload($field_name)){
                $upload_data = $this->upload->data();
                $thumb_url = $upload_config['upload_path'].$upload_data['file_name'];
                $new_thumb_url = $upload_config['upload_path'].'s_'.$upload_data['file_name'];

                $image_config['image_library'] = 'gd2';
                $image_config['source_image'] = $thumb_url;
                $image_config['new_image'] = $new_thumb_url;
//                $image_config['create_thumb'] = TRUE;
                $image_config['maintain_ratio'] = TRUE;
                $image_config['width'] = 112;
                $image_config['height'] = 100;

                $this->load->library('image_lib', $image_config);

                $this->image_lib->resize();
                exit($new_thumb_url);
            } else {
                $error = $this->upload->display_errors('','');
                exit($error);
            }
        }
    }

    public function shareImg(){
        $shareThumb = base_url(str_replace('s_', '', substr($this->input->post('fileurl'), 1)));
        $content    = $this->input->post('content', TRUE);
        //发送带图片的微博
        include_once(APPPATH.'third_party/sina/config.php');
        include_once( APPPATH.'third_party/sina/saetv2.ex.class.php' );
        $c = new SaeTClientV2( WB_AKEY , WB_SKEY , get_cookie('oauth_token') );
        $shareWB = $c->upload_url_text($content ,$shareThumb);
        //存储记录
        $userThumb = $shareWB['user']['profile_image_url'];
        $shareThumb = $shareWB['thumbnail_pic'];
        $nickName = $shareWB['user']['name'];
        $mid = $shareWB['mid'];
        if($nickName && $shareThumb){
            $data = array(
                'mid'=>$mid,
                'nickname'=>$nickName,
                'content'=>$content,
                'user_thumb'=>$userThumb,
                'share_thumb'=>$shareThumb,
                'createtime'=>time()
            );
            $this->Data_model->addData($data,'share_story');
        }
        redirect(base_url('index.php?/share'));
    }
}