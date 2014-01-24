<?php $this->load->view($config['site_template'].'/head');?>
<body>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/screen.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/lux_night_banner1.js"></script>
<!--<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/easing.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/MogFocus.js"></script>-->
<script src="http://malsup.github.io/jquery.cycle2.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.scrollVert.js"></script>
<script src="http://malsup.github.io/jquery.cycle2.carousel.js"></script>
<script>$.fn.cycle.defaults.autoSelector = '.slideshow';</script>     
<style>
.slideshow { margin: auto; width: 400px;}
.slideshow img { width: 135px; height: 82px;  }
div.responsive img { width: auto; height: auto }
.cycle-pager { position: static; margin-top: 5px }
div.vertical { width: 100px }
.cycle-slideshow {display: inline-block; margin: 0 }
</style>
<div class="page" id="page_welcome">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
    <div class="pagetxt_participate">
      <!--<script type="text/javascript">
        $(function(){
        //demo2
        $("#focus2").mogFocus({
        loadAnimation : false,
        time : 3000,
        animationWay : 'tbSliding',
        prevNextToggle : 'toggle',
        btnStyle : 'noNumber',
        focusTime : {duration: 1300, easing: "easeOutBounce"},
        focusTwoTime : {duration: 1300, easing: "easeOutBounce"}
        });

        });
      </script>-->
      <style type="text/css">
        /* flash_control */
        #flash_control{position:absolute;z-index:900;width:51px;}
        .flash li{position:absolute;overflow:hidden;z-index:601;left:0;}
        .flash .default{z-index:605;}
        .frame_keleyi_com{width:510px;height:380px;overflow:hidden; margin:54px 0px 0px 53px;
        }
        .scroll_keleyi_com{width:510px;height:380px;position:relative;}
        .flash img{width:510px;height:380px;}
      </style>
        <!-- 图片区 -->
        <script type="text/javascript">
            var areaDailyList = [
                //  大图片路径
                {"image": "<?= $config['site_templateurl']; ?>/images/night/1.jpg" }
            ];
            /**
            jQuery(function () {
                if (!$('#slidePic')[0])
                    return;
                var i = 0, p = $('#slidePic ul'), pList = $('#slidePic ul li'), len = pList.length;
                var elePrev = $('#prev'), eleNext = $('#next');
                var w = 54, num = 4;

                if (len <= num)
                    eleNext.addClass('gray');
                function prev() {
                    if (elePrev.hasClass('gray')) {
                        return;
                    }
                    p.animate({
                        marginTop: -(--i) * w
                    }, 500);
                    if (i < len - num) {
                        eleNext.removeClass('gray');
                    }
                    if (i == 0) {
                        elePrev.addClass('gray');
                    }
                }
                function next() {
                    if (eleNext.hasClass('gray')) {
                        alert('已经是最后一张了');
                        return;
                    }
                    p.animate({
                        marginTop: -(++i) * w
                    }, 500);
                    if (i != 0) {
                        elePrev.removeClass('gray');
                    }
                    if (i == len - num) {
                        eleNext.addClass('gray');
                    }
                }
                function img_prev() {
                    if (elePrev.hasClass('gray')) {
                        return;
                    }
                    if (i < len - num) {
                        eleNext.removeClass('gray');
                    }
                    if (i == 0) {
                        elePrev.addClass('gray');
                    }
                }
                function img_next() {
                    if (eleNext.hasClass('gray')) {
                        return;
                    }
                    if (i != 0) {
                        elePrev.removeClass('gray');
                    }
                    if (i == len - num) {
                        eleNext.addClass('gray');
                    }
                }
                elePrev.bind('click', prev);
                eleNext.bind('click', next);
                pList.each(function (n, v) {
                    $(this).click(function () {
                        if (n - i == 2) {
                            img_next();
                        }
                        if (n - i == 0) {
                            img_prev()
                        }
                        $('#slidePic ul li.cur').removeClass('cur');
                        $(this).addClass('cur');
                        show(n);
                    })
                });
                function show(i) {
                    var ad = areaDailyList[i];
                    $('#dailyImage').attr('src', ad.image);
                }
            });
            */
        </script>
      <script language="javascript" type="text/javascript">
          function pic_bt() {
            document.getElementById("warpper2").style.display = "none";
            document.getElementById("container").style.display = "block";
          }
          function pic_bttime() {
            document.getElementById("warpper2").style.display = "block";
            document.getElementById("container").style.display = "none";
          }
          window.setInterval("pic_bttime();", 10000);
      </script>
        <div class="ye_container">
          <div id="warpper2">
            <div class="frame_keleyi_com">
              <div class="scroll_keleyi_com">
                <div id="flash_control" style="display: none;">
                  <div class="flash-control-wrp">
                    <a class="icon-up">
                      <i></i>
                    </a>
                    <a class="icon-play">
                      <i></i>
                    </a>
                    <a class="icon-pause">
                      <i></i>
                    </a>
                    <a class="icon-down">
                      <i></i>
                    </a>
                  </div>
                </div>
                <ol id="index_ex_slide" class="cycle-slideshow "
                    data-cycle-fx="scrollVert"
	                data-cycle-reverse="true"
                >
                <li class="default">
                    <a>
                      <img src="<?= $config['site_templateurl']; ?>/images/night/1.png"/>
                    </a>
                  </li>
                <?php 
                   for($i=16; $i>1; $i--){
                ?>
                  <li class="default">
                    <a>
                      <img src="<?= $config['site_templateurl']; ?>/images/night/<?php echo $i; ?>.png"/>
                    </a>
                  </li>
                <?php } ?>
                </ol>
              </div>
            </div>
      <div class="slide-pic">      

						
		    <!-- 向上按钮 -->
               <div   style="width:30px;margin:50px 0px 0px 0px;height:37px;float:left;"><a class="gray" id="prev" hidefocus href="javascript:;"></a></div>
                      <!-- 向下按钮 -->
              <div  style="width:30px;height:37px;margin-top:50px;float:right"><a id="next" hidefocus href="javascript:;"></a></div>
		<ul id="pic-container-ul" class="slideshow" style="width:400px;"
		    data-cycle-fx=carousel
		    data-cycle-timeout=0
		    data-cycle-carousel-visible=3
		    data-cycle-next="#next"
		    data-cycle-prev="#prev"
		    data-cycle-pager="#pager"
		    >
		    <li><img title="1" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
		    <li><img title="2" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
            <li><img title="3" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
            <li><img title="4" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
            <li><img title="5" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
            <li><img title="6" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
            <li><img title="7" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
            <li><img title="8" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
            <li><img title="9" src="<?= $config['site_templateurl']; ?>/images/ye_right_list_bg-big.png"></li>
		</ul>		
           
            </div>
            
            
          </div>
          <script type="text/javascript">
           // $.fullFoucs({
             //   direction: 'up'
           // });
           $('.cycle-slideshow').cycle({
			    speed: 300,
				slides: '>li'
			
			});


           $('.slideshow').cycle({
			    speed: 300,
				slides: '>li'
			
			});
          </script>
            <div id="container" style="display:none;">
                <div class="pics">
                    <!--  左侧，默认第一张大图 -->
                    <img alt="" id="dailyImage" src="<?= $config['site_templateurl']; ?>/images/ye_img_1.jpg" />
                </div>
            </div>
            
            <div class="right">
                <div style="text-align:center; margin:7px 30px 5px 0px;">
                    <a href="<?=base_url('index.php?/share')?>">
                        <img src="<?= $config['site_templateurl']; ?>/images/new_night/i-join.png" alt=""/>
                    </a>
                </div>
                <div class="ngitht_comment-head" ></div>
                <div class="night-comments">
                  <wb:comments url="http://open.weibo.com/widget/comments.php" fontsize="12" width="265" ></wb:comments>
                </div>
     
            </div>
        </div>
    </div>
    <!-- 讨论区 -->
    
    </div>
    </div>
</div>
</body>
</html>