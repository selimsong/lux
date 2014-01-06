<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Map extends CI_Controller {
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
        $page = $this->uri->segment(2) ? $this->uri->segment(2) : 'submit';
        include_once(APPPATH.'third_party/sina/config.php');
        include_once( APPPATH.'third_party/sina/saetv2.ex.class.php' );
        $c = new SaeTClientV2( WB_AKEY , WB_SKEY , get_cookie('oauth_token') );

        if($page == 'submit'){
            //获取当前用户的信息
            $igniteCount = get_cookie('igniteCount');
            if(!$igniteCount || !is_numeric($igniteCount)){
                $igniteCount = $this->Data_model->getDataNum(array(),'share_record');//点燃数量
            }
            $updateWeibo = $c->update('#燃情行动#我已经成功点燃SPRAK燃情火花，你也来一起加入燃情行动，获得亲密的两性关系吧。');
            $location = $updateWeibo['user']['location'];
            $location = explode(' ', $location);

            if($updateWeibo['mid']){
                $province = $location[0];
                if($province){
                    //检测是否存在
                    $provinceSelect = $this->Data_model->getSingle(array('province'=>$province),'province');
                    if($provinceSelect['id']){
                        $provinceID = $provinceSelect['id'];
                        $this->Data_model->setNumber($provinceID, 'province');
                    } else {
                        $provinceID = $this->Data_model->addData(array('province'=>$province),'province');
                    }
                }

                $city = $location[1];
                if($city){
                    //检测是否存在
                    $citySelect = $this->Data_model->getSingle(array('city'=>$city),'city');
                    if($citySelect['id']){
                        $cityID = $citySelect['id'];
                        $this->Data_model->setNumber($cityID, 'city');
                    } else {
                        $cityID = $this->Data_model->addData(array('province'=>$provinceID,'city'=>$city),'city');
                    }
                }


                //插入数据库当次转播的信息
                $data = array(
                    'user_id'=>$updateWeibo['id'],
                    'nickname'=>$updateWeibo['user']['name'],
                    'content'=>$updateWeibo['text'],
                    'mid'=>$updateWeibo['mid'],
                    'province'=>$provinceID,
                    'city'=>$cityID,
                    'addtime'=>time()
                );
                $this->Data_model->addData($data,'share_record');
            }
        }
        else {
            $uid_get = $c->get_uid();
            $uid = $uid_get['uid'];
            $user_message = $c->show_user_by_id($uid);//根据ID获取用户等基本信息
            $location = $user_message['location'];
            $location = explode(' ', $location);

            $province = $location[0];
        }


//计算当前已经点燃的人数
        $ignitedCount = $this->Data_model->getDataSum('number','province');//点燃数量
        $ignitedCount = $ignitedCount['number'];
//start
        //33个
        //需要显示的城市
        $cityArray = array(
            '哈尔滨','长春','沈阳','乌鲁木齐','拉萨','海口','南宁','呼和浩特','银川','石家庄','济南','郑州','合肥','南京',
            '杭州','武汉','太原','西宁','兰州','长沙','南昌','福州','台北','云南','贵阳','成都','广州',
            '北京','上海','天津','香港','澳门','重庆'
        );
        //城市对应的省
        $provinceArray = array(
            '黑龙江','吉林','辽宁','新疆','西藏','海南','广西','内蒙古','宁夏','河北','山东','河南','安徽','江苏',
            '浙江','湖北','山西','青海','甘肃','湖南','江西','福建','台湾','昆明','贵州','四川','广东',
            '北京','上海','天津','香港','澳门','重庆'
        );
        //数据库中的省份数据
        $provinceSQLResult = $this->Data_model->getData(array(),'',0,50,'province');
        foreach($provinceSQLResult as $item){
            $provinceSQL[$item['province']] = $item['number'];
        }

        //省份对应城市
        foreach($cityArray as $key => $value) {
            $provinceToCity[$provinceArray[$key]] = $value;
        }
        $userCity = $provinceToCity[$province];
        $userCityPinyin = Pinyin($userCity,1);
        $userCityNumber = 0;
        foreach($cityArray as $key => $value){
            $provinceNumber = $provinceSQL[$provinceArray[$key]] ? $provinceSQL[$provinceArray[$key]] : 0;
            //如果当前循环的值与用户的城市一样  则把城市上级的省市的数量赋值
            if($value == $userCity) $userCityNumber = $provinceNumber;

            $allIgnitedNumber[Pinyin($value,1)] = $provinceNumber;

//            if($provinceNumber > 0){
//                if($provinceNumber <= 100){
//                    $roundSize = 1;
//                } elseif($provinceNumber >100 && $provinceNumber <= 500) {
//                    $roundSize = 2;
//                } elseif($provinceNumber >500 && $provinceNumber <= 1000) {
//                    $roundSize = 3;
//                } elseif($provinceNumber >1000 && $provinceNumber <= 5000) {
//                    $roundSize = 4;
//                }
//                $allRound[Pinyin($value,1)] = $roundSize;
//            }
        }
//end

        $config = $this->Cache_model->loadConfig();
		$config['seo_title'] = '地图';
		$config['seo_keywords'] = $config['site_keywords'];
		$config['seo_description'] = $config['site_description'];
		$this->load->setPath();
		$res = array(
            'config'=>$config,
            'currentLang'=>$this->Cache_model->currentLang,
            'langurl'=>$this->Cache_model->langurl,
            'ignitedCount'=>$ignitedCount,
            'allIgnitedNumber'=>$allIgnitedNumber,
            'userCity'=>$userCity,
            'userCityPinyin'=>$userCityPinyin,
            'userCityNumber'=>$userCityNumber,
//            'roundSize'=>$roundSize,
//            'allRound'=>$allRound,
            'navShow'=>1
		);
		$tpl = 'map';
		$this->load->view($config['site_template'].'/'.$tpl,$res);
	}
}