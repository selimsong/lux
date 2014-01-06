<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
        $page = $this->uri->segment(2) ? $this->uri->segment(2) : 'flash';
        if($page == 'share'){
            //获取当前用户的信息
            include_once(APPPATH.'third_party/sina/config.php');
            include_once( APPPATH.'third_party/sina/saetv2.ex.class.php' );

            $c = new SaeTClientV2( WB_AKEY , WB_SKEY , get_cookie('oauth_token') );
            $uid_get = $c->get_uid();
            $uid = $uid_get['uid'];
            $user_message = $c->show_user_by_id($uid);//根据ID获取用户等基本信息

            //计算当前已经点燃的人数
            $igniteCount = $this->Data_model->getDataSum('number','province');//点燃数量
            $igniteCount = $igniteCount['number']+1;
            set_cookie('igniteCount',$igniteCount,3600);
        }
		$config = $this->Cache_model->loadConfig();
		$config['seo_title'] = '欢迎页';
		$config['seo_keywords'] = $config['site_keywords'];
		$config['seo_description'] = $config['site_description'];
		$this->load->setPath();
		$res = array(
            'config'=>$config,
            'currentLang'=>$this->Cache_model->currentLang,
            'langurl'=>$this->Cache_model->langurl,
            'sinaName'=>$user_message['name'],
            'igniteCount'=>$igniteCount,
            'navShow'=>1
		);
		$tpl = 'welcome_'.$page;
		$this->load->view($config['site_template'].'/'.$tpl,$res);
	}
	
}