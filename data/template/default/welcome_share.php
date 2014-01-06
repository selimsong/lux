<?php $this->load->view($config['site_template'].'/head');?>
<style type="text/css">
  .welcome2_txt2 .welcome2_txtimg li,.welcome2_txt1 .welcome2_txtimg li{float:left;}
</style>
<body>
<div class="page" id="page_welcome">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
        <div class="pagetxt_welcome">
            <div class="pagetxt_welcome_box">
                <div class="clearfix"></div>
                <div class="welcome2_txt1">
                  <ul class="welcome2_txtimg">
                    <li>
                      <img src="<?= $config['site_templateurl']; ?>/images/welcome_img11png.png" alt=""/>
                    </li>
                    <li>
                      <?=$sinaName?>，
                    </li>
                  </ul>

                </div>
                <div class="clearfix"></div>
                <div class="welcome2_txt2">
                  <ul class="welcome2_txtimg">
                  	<li style="margin-top:4px;">
                      <img src="<?= $config['site_templateurl']; ?>/images/welcome_img22png.png" alt=""/>
                    </li>
                  	<li>
                      <?=$igniteCount?>
                    </li>
                    <li style="margin-top:4px;">
                      <img src="<?= $config['site_templateurl']; ?>/images/welcome_img33png.png" alt=""/>
                    </li>
                  </ul>
                  
                  <img src="<?= $config['site_templateurl']; ?>/images/welcome_img44png.png" alt=""/>
                </div>
                <div class="welcome2_txt3">
                    <ul>
                        <li>
                            <input type="image" name="submit" src="<?= $config['site_templateurl']; ?>/images/sure_share.png" onclick="location.href='<?=base_url('index.php?/map/submit')?>'" />
                        </li>
                        <li>
                            <a  style="margin-top:8px;" href="<?=base_url('index.php?/map/cancel')?>"><img src="<?= $config['site_templateurl']; ?>/images/welcome_closetxt.png"></a>
                        </li>
                    </ul>

                </div>
                <div class="clearfix"></div>
                <div class="welcome2_txt3">
                    <img src="<?= $config['site_templateurl']; ?>/images/sure_share1.png" alt=""/>
                </div>
            </div>
            <!-- 内容框左上角金属边 -->
            <div class="pagetxt_welcome_potion1">
                <img src="<?= $config['site_templateurl']; ?>/images/glod_line_t.png" alt=""/>
            </div>
            <!-- 内容框右下角金属边 -->
            <div class="pagetxt_welcome_potion2">
                <img src="<?= $config['site_templateurl']; ?>/images/glod_line_b.png" alt=""/>
            </div>
            <!-- 内容框左下角产品图 -->
            <div class="pagetxt_welcome_potion3">
                <img src="<?= $config['site_templateurl']; ?>/images/product_img.png" alt=""/>
            </div>
            <!-- 内容框右上角“×” -->
            <div class="pagetxt_welcome_potion4">
                <a href="<?=base_url('index.php?/map/cancel')?>"><input type="image" src="<?= $config['site_templateurl']; ?>/images/close_bt.png"/></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>