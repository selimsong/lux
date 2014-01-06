<?php $this->load->view($config['site_template'].'/head');?>
<body>
<div class="page" id="page_welcome">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
        <div class="pagetxt_welcome">
            <div class="pagetxt_welcome_box">
                <div class="clearfix"></div>
              <div class="welcome_txt1">
                  <img src="<?= $config['site_templateurl']; ?>/images/welcome_imgpng.png" alt=""/>
                  </div>
                <div class="welcome_txt3" style="margin-top:34px;">
                    <input type="image" name="submit" src="<?= $config['site_templateurl']; ?>/images/yes_bt.png" onclick="location.href='<?=base_url('index.php?/welcome/share')?>'" />
                    <!-- 图片倒影 -->
                </div>
                <div class="welcome_txt3">
                    <img src="<?= $config['site_templateurl']; ?>/images/yes_bt1.png" alt=""/>
                </div>
            </div>
            <div class="pagetxt_welcome_potion1">
                <img src="<?= $config['site_templateurl']; ?>/images/glod_line_t.png" alt=""/>
            </div>
            <div class="pagetxt_welcome_potion2">
                <img src="<?= $config['site_templateurl']; ?>/images/glod_line_b.png" alt=""/>
            </div>
            <div class="pagetxt_welcome_potion3">
                <img src="<?= $config['site_templateurl']; ?>/images/product_img.png" alt=""/>
            </div>
        </div>
    </div>
</div>
</body>
</html>
