<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sina extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->Cache_model->setLang($this->input->get());
		//$this->Lang_model->loadLang('front',$this->Cache_model->currentLang);
		//if($this->uri->segment(3)){
			//show_404();
		//}
		$this->load->helper('tags');
	}
	
	public function callback(){
		
		include_once(APPPATH.'third_party/sina/config.php');
		$code = $_GET['code'];
		$postdata = http_build_query(
				array(
						'client_id' => WB_AKEY,
						'client_secret' => WB_SKEY,
						'grant_type' => 'authorization_code',
						'redirect_uri' => WB_CALLBACK_URL,
						'code' => $code,
				)
		);
		$opts = array('http' =>
				array(
						'method'  => 'POST',
						'header'  => 'Content-type: application/x-www-form-urlencoded',
						'content' => $postdata
				)
		);
		
		$context  = stream_context_create($opts);
		$returnData = file_get_contents('https://api.weibo.com/oauth2/access_token', false, $context);
        $tokenArr =  json_decode($returnData);
		$token = $tokenArr->access_token;
		if($token){
			include_once( APPPATH.'third_party/sina/saetv2.ex.class.php' );
			set_cookie('oauth_token', $token,3600*24);
			$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $token);
			//$uid_get = $c->get_uid();
			$_user = $this->Data_model->getSingle(array('user_id'=>$this->session->userdata('uid')),'share_record');
			if (!empty($_user)) {
				redirect(base_url('index.php?/map'));
				exit();
			}
			redirect(base_url('index.php?/welcome'));
		}else{
			echo '<p>授权失败或者微博服务器出错（如果你是新浪审核人员，你的账号是否要添加为测试账号？），<a href="http://weibo.com/p/1006062027335320/app416184956">返回应用</a></p>';
		}

	}
	
}