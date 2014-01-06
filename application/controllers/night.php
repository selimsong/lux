<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Night extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->Cache_model->setLang($this->input->get());
		$this->Lang_model->loadLang('front',$this->Cache_model->currentLang);
		if($this->uri->segment(4) || ($this->uri->segment(3)&&!is_numeric($this->uri->segment(3)))){
			show_404();
		}
		$this->load->helper('tags');
	}
	
	public function index(){
		$config = $this->Cache_model->loadConfig();
		$config['seo_title'] = '燃情之夜';
		$config['seo_keywords'] = $config['site_keywords'];
		$config['seo_description'] = $config['site_description'];
        $list = $this->Data_model->getData(array(),'id DESC',0,100,'share_night');
        $this->load->setPath();
        $res = array(
            'config'=>$config,
            'currentLang'=>$this->Cache_model->currentLang,
            'langurl'=>$this->Cache_model->langurl,
            'list'=>$this->Cache_model->handleModelData($list),
            'navShow'=>3
        );
		$tpl = 'night';
		$this->load->view($config['site_template'].'/'.$tpl,$res);
	}
}