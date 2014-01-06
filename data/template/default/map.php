<?php $this->load->view($config['site_template'].'/head');?>
<body>
<div class="page" id="page_welcome">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
        <div class="pagetxt_map">
            <div class="pagetxt_map_left">
                <!--  已有XXXX位点燃LUX燃情火花 -->
                <div class="pagetxt_map_title">
                    <ul>
                        <li style="margin-top:-13px;">
                            <img src="<?= $config['site_templateurl']; ?>/images/yiyou11.png" alt="" />
                        </li>
                        <li><?=$ignitedCount?></li>
                      <li style="margin-top:-13px;">
                            <img src="<?= $config['site_templateurl']; ?>/images/yiyou22.png" alt="" />
                        </li>
                    </ul>
                    <div class="clearfix">
                    </div>
                </div>
                <div>
                    <!-- 地图 -->
                    <img src="<?= $config['site_templateurl']; ?>/images/map05.png" alt="" />
                    <?php if($userCity):?>
                    <div class="map_province map_<?=$userCityPinyin?>" id="map_<?=$userCityPinyin?>">
                        <div class="map_province_txt">
                            <div class="clearfix">
                            </div>
                            <div class="map_province_txt_1">
                                已有<?=$userCityNumber?>位点亮<br />
                                <img src="<?= $config['site_templateurl']; ?>/images/logo.png" style="height: 14px;" alt="" />力士燃情火花
                            </div>
                        </div>
                        <div class="map_province_p">
                            <?=$userCity?>
                        </div>
                        <!-- 红圈 -->
                        <div class="map_yuanquan1"><img src="<?= $config['site_templateurl']; ?>/images/yuan_1.png" alt=""/></div>
                    </div>
                    <?php endif;?>
                </div>
                <div class="map_hot">
                    <img src="<?= $config['site_templateurl']; ?>/images/map_imgpng2.png" alt="" />
                    </div>
            </div>
            <div class="pagetxt_map_right">
                <div>
                    <img src="<?= $config['site_templateurl']; ?>/images/hot_title_bg1.png" alt="" />
                </div>
                <div class="pagetxt_map_right_txt1">
                    <img src="<?= $config['site_templateurl']; ?>/images/map_imgpng1.png" alt=""/>
                      <div>
                        <a href="<?=base_url('index.php?/more')?>">
                            <img src="<?= $config['site_templateurl']; ?>/images/more_bt.png" alt="" />
                        </a>
                    </div>
                </div>
                <div>
                    <img src="<?= $config['site_templateurl']; ?>/images/hot_title_bg2.png" alt="" />
                </div>
                <div class="pagetxt_map_right_txt2">
                    <div style="float:left;width:100px;">
                      <img src="<?= $config['site_templateurl']; ?>/images/media_logo5.png" alt=""/>
                      <img src="<?= $config['site_templateurl']; ?>/images/media_logo4.png" alt=""/>
                    </div>
                    <div style="float:left;width:100px;">
                      <img src="<?= $config['site_templateurl']; ?>/images/media_logo2.png" alt=""/>
                      <img src="<?= $config['site_templateurl']; ?>/images/media_logo1.png" alt=""/>
                    </div>
                        <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
