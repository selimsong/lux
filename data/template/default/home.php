<?php $this->load->view($config['site_template'].'/head');?>
<script src="http://js.t.sinajs.cn/t4/enterprise/js/public/appframe/appClient.js" type="text/javascript"></script>
<script>
    //弹出授权弹层：
    function authLoad(){
        App.AuthDialog.show({
            client_id : '<?=$sub_appkey?>',    //必选，填入框架通过get方式传递的sub_appkey参数
            redirect_uri : 'http://e.weibo.com/<?=$uid?>/app_<?=$WB_AKEY?>',
            //必选，授权回调地址，必须以http://e.weibo.com开头，类似http://e.weibo.com/1717871843/app_738247391
            //或者http://e.weibo.com/thirdapp/app?appkey=738247391，不同企业应用的前台url是不固定的，需要用uid拼装
            //http://e.weibo.com/{uid}/app_{WB_AKEY}
            height: 220,    //可选，默认距顶端120px
            display: 'apponweibo'  //必选，移动端H5授权则应为display: 'mobile'
        });
    }
</script>
<body onload="authLoad();">
<div class="page" id="page_index">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
        <div class="pagetxt_index"></div>
    </div>
</div>
</body>
</html>