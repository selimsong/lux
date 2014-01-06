<div class="top">
    <!--<div class="logo">
        <img src="<?= $config['site_templateurl']; ?>/images/logo.png" alt=""/>
    </div>-->
    <div class="nav">
        <ul>
            <li <?php if($navShow == 1):?>class="lux_nav_li"<?php endif;?>><a href="<?=base_url('index.php?/welcome')?>">
              <img src="<?= $config['site_templateurl']; ?>/images/LUX-action13.png" alt=""/>
              </a></li>
            <li class="nav_line"></li>
            <li <?php if($navShow == 2):?>class="lux_nav_li"<?php endif;?>><a href="<?=base_url('index.php?/movie')?>">
              <img src="<?= $config['site_templateurl']; ?>/images/lux-vedio13.png" alt=""/>
              </a></li>
            <li class="nav_line"></li>
            <li <?php if($navShow == 3):?>class="lux_nav_li"<?php endif;?>><a href="<?=base_url('index.php?/night')?>">
              <img src="<?= $config['site_templateurl']; ?>/images/lux-night13.png" alt=""/>
              </a></li>
            <li class="nav_line"></li>
            <li <?php if($navShow == 4):?>class="lux_nav_li"<?php endif;?>><a href="<?=base_url('index.php?/share')?>">
              <img src="<?= $config['site_templateurl']; ?>/images/lux-share13.png" alt=""/>
              </a></li>
            <li class="nav_line"></li>
            <li <?php if($navShow == 5):?>class="lux_nav_li"<?php endif;?>><a href="<?=base_url('index.php?/product')?>">
              <img src="<?= $config['site_templateurl']; ?>/images/LUX-pro13.png" alt=""/>
              </a></li>
        </ul>
    </div>
</div>