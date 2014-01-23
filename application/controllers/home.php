<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
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
        	include_once( APPPATH.'third_party/sina/saetv2.ex.class.php' );
            set_cookie('oauth_token',$tokenStringStr['oauth_token'],3600*24);
            $c = new SaeTClientV2( WB_AKEY , WB_SKEY , $tokenStringStr['oauth_token']);
            $uid_get =$this->input->get('viewer');
            $this->session->set_userdata(array('uid'=> $uid_get));
            //$uid_get = $c->get_uid();
           
            $_user = $this->Data_model->getSingle(array('user_id'=>$uid_get),'share_record');      
            if (!empty($_user)) {
            	redirect(base_url('index.php?/map'));
            	exit();
            }
            redirect(base_url('index.php?/welcome'));
            exit();
        }else{
            redirect('https://api.weibo.com/oauth2/authorize?client_id='.WB_AKEY.'&response_type=code&redirect_uri='.WB_CALLBACK_URL);
            exit();  
        }
       
	}
	
	public function index_bk(){
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
        	include_once( APPPATH.'third_party/sina/saetv2.ex.class.php' );
            set_cookie('oauth_token',$tokenStringStr['oauth_token'],3600*24);
            $c = new SaeTClientV2( WB_AKEY , WB_SKEY , $tokenStringStr['oauth_token']);
            $uid_get = $c->get_uid();
            $_user = $this->Data_model->getSingle(array('user_id'=>$uid_get['uid']),'share_record');      
            if (!empty($_user)) {
            	redirect(base_url('index.php?/map'));
            	exit();
            }
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