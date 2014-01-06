<?php $this->load->view($config['site_template'] . '/head'); ?>
<body>
<div class="page" id="page_product">
    <?php $this->load->view($config['site_template'] . '/nav'); ?>
    <script type="text/javascript" src="<?= $config['site_templateurl']; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= $config['site_templateurl']; ?>/js/swiper_mi1.js"></script>
    <div class="pagetxt">
        <div class="pagetxt_product">
            <div class="device">
                <a class="arrow-left" href="#"></a>
                <a class="arrow-right" href="#"></a>

                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach($list as $key => $value): ?>
                            <div class="swiper-slide">
                                <!--  图片尺寸：630px * 336px 购买按钮的位置参考图：images/122f.jpg -->
                                <img src="<?= $value['thumb']; ?>"/>

                                <div class="products_order_bt">
                                    <a href="<?= $value['linkurl'] ?>" target="_blank">
                                        <img src="<?= $config['site_templateurl']; ?>/images/buy_bt.png"/>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="pagination"></div>
            </div>
            <script>
                var mySwiper = new Swiper('.swiper-container', {
                    pagination: '.pagination',
                    loop: true,
                    grabCursor: true,
                    paginationClickable: true
                })
                $('.arrow-left').on('click', function (e) {
                    e.preventDefault()
                    mySwiper.swipePrev()
                })
                $('.arrow-right').on('click', function (e) {
                    e.preventDefault()
                    mySwiper.swipeNext()
                })
            </script>
        </div>
    </div>
</body>
</html>