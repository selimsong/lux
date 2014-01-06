<?php $this->load->view($config['site_template'].'/head');?>
<body>
<div class="page" id="page_welcome">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
        <div class="pagetxt_microfilm">
            <div class="lux_more">
                <div onclick="javascript:window.history.back(-1);" class="lux_more_close">
                    <img src="<?= $config['site_templateurl']; ?>/images/liaojie_close_bt.png" alt=""/>
                </div>
                <div class="lux_more_product">
                    <img src="<?= $config['site_templateurl']; ?>/images/product_img.png" alt=""/>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>