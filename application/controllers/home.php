<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
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
        include_once(APPPATH.'third_party/sina/config.php');

        $url = $this->uri->segment(2);
        $urlArr = explode('&',$url);
        foreach($urlArr as $item){
            $arrDeal = explode('=',$item);
            $postField[$arrDeal[0]] = $arrDeal[1];
        }

        $tokenString =  explode('.',$postField['tokenString']);
        $tokenStringAccess = base64_decode($tokenString[1]);

        $tokenStringStr = json_decode($tokenStringAccess,true);
        if($tokenStringStr['oauth_token']){
            set_cookie('oauth_token',$tokenStringStr['oauth_token'],3600*24);
            redirect(base_url('index.php?/welcome'));
        }
        $config = $this->Cache_model->loadConfig();
		$config['seo_title'] = '微博授权';
		$config['seo_keywords'] = $config['site_keywords'];
		$config['seo_description'] = $config['site_description'];
		$this->load->setPath();
		$res = array(
				'config'=>$config,
				'currentLang'=>$this->Cache_model->currentLang,
				'langurl'=>$this->Cache_model->langurl,
                'WB_AKEY'=>WB_AKEY,
                'sub_appkey'=>$postField['sub_appkey'],
                'uid'=>$postField['cid']
		);
		$tpl = $config['site_home']==''?'home':$config['site_home'];
		$this->load->view($config['site_template'].'/'.$tpl,$res);
	}
	
}