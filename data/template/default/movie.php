<?php $this->load->view($config['site_template'].'/head');?>
<body>
<div class="page" id="page_welcome">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
        <div class="pagetxt_microfilm">
            <div class="pagetxt_microfilm_left">
                <img src="<?= $config['site_templateurl']; ?>/images/video_img.png" style="cursor:pointer;" onclick="test()" alt=""/>
            </div>
            <div class="pagetxt_microfilm_right">
                <img src="<?= $config['site_templateurl']; ?>/images/video_img1.png" style="cursor:pointer;" onclick="test()" alt=""/>
            </div>
        </div>
    </div>
</div>
</body>
</html>