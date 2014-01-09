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
		$url = 'https://api.weibo.com/oauth2/access_token?client_id='.WB_AKEY.'&client_secret='.WB_SKEY.'&grant_type=authorization_code&redirect_uri='.'http://lux.yogurtdigital.com/index.php?/home'.'&code='.$code;
		//$content =file_get_contents($url);
		
		
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
		
		$myresult = file_get_contents('https://api.weibo.com/oauth2/access_token', false, $context);
		
		
		
		
		var_dump($postdata);
		echo "<br >";
		
		echo $code;
		echo "<br >";
		var_dump($myresult);

	}
	
}