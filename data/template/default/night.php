<?php $this->load->view($config['site_template'].'/head');?>
<body>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/screen.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/lux_night_banner1.js"></script>
<!--<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/easing.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/MogFocus.js"></script>-->
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
        .frame_keleyi_com{width:432px;height:325px;overflow:hidden;background:url(<?= $config['site_templateurl']; ?>/images/ye_right_bg.png);background-size:100%;}
        .scroll_keleyi_com{width:432px;height:325px;position:relative;}
        .flash img{width:432px;height:325px;}
      </style>
        <!-- 图片区 -->
        <script type="text/javascript">
            var areaDailyList = [
                //  大图片路径
                {"image": "<?= $config['site_templateurl']; ?>/images/night/1.jpg" }
            ];
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
                <ol id="index_ex_slide" class="flash">
                  <li class="default">
                    <a>
                      <img src="<?= $config['site_templateurl']; ?>/images/night/1.jpg"/>
                    </a>
                  </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/2.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/3.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/4.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/5.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/6.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/7.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/8.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/9.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/10.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/11.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/12.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/13.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/14.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/15.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/16.jpg"/>
                        </a>
                    </li>
                    <li class="default">
                        <a>
                            <img src="<?= $config['site_templateurl']; ?>/images/night/17.jpg"/>
                        </a>
                    </li>
                </ol>
              </div>
            </div>
          </div>
          <script type="text/javascript">
            $.fullFoucs({
                direction: 'up'
            });
          </script>
            <div id="container" style="display:none;">
                <div class="pics">
                    <!--  左侧，默认第一张大图 -->
                    <img alt="" id="dailyImage" src="<?= $config['site_templateurl']; ?>/images/ye_img_1.jpg" />
                </div>
            </div>
            
            <div class="right">
                <div style="height:40px;text-align:center;padding-top:30px;">
                    <a href="<?=base_url('index.php?/share')?>">
                        <img src="<?= $config['site_templateurl']; ?>/images/mwant_bt.png" alt=""/>
                    </a>
                </div>
                <div class="slide-pic" id="slidePic">
                    <!-- 向上按钮 -->
                    <div style="width:85px;text-align:center;height:6px;margin-top:20px;"><a class="gray" id="prev" hidefocus href="javascript:;"></a></div>
                    <!-- 右边小图 -->
                    <div class="pic-container">
                        <ul id="pic-container-ul">
                            <li class="cur" onclick="pic_bt()"  style="background:url(<?= $config['site_templateurl']; ?>/images/ye_right_list_bg.png) top right no-repeat;">
                                <!-- 鼠标移动到小图片，小图片前显示下列图标 -->
                                <div class="ye_li_hover"></div>
                            </li>
                            <li class="cur" onclick="pic_bt()" style="background:url(<?= $config['site_templateurl']; ?>/images/ye_right_list_bg.png) top right no-repeat;">
                              <!-- 鼠标移动到小图片，小图片前显示下列图标 -->
                              <div class="ye_li_hover"></div>
                            </li>
                            <li class="cur" onclick="pic_bt()" style="background:url(<?= $config['site_templateurl']; ?>/images/ye_right_list_bg.png) top right no-repeat;">
                              <!-- 鼠标移动到小图片，小图片前显示下列图标 -->
                              <div class="ye_li_hover"></div>
                            </li>
                            <li class="cur" onclick="pic_bt()" style="background:url(<?= $config['site_templateurl']; ?>/images/ye_right_list_bg.png) top right no-repeat;">
                              <!-- 鼠标移动到小图片，小图片前显示下列图标 -->
                              <div class="ye_li_hover"></div>
                            </li>
                            <li class="cur" onclick="pic_bt()" style="background:url(<?= $config['site_templateurl']; ?>/images/ye_right_list_bg.png) top right no-repeat;">
                              <!-- 鼠标移动到小图片，小图片前显示下列图标 -->
                              <div class="ye_li_hover"></div>
                            </li>
                            <li class="cur" onclick="pic_bt()" style="background:url(<?= $config['site_templateurl']; ?>/images/ye_right_list_bg.png) top right no-repeat;">
                              <!-- 鼠标移动到小图片，小图片前显示下列图标 -->
                              <div class="ye_li_hover"></div>
                            </li>
                          <li class="cur" onclick="pic_bt()" style="background:url("<?= $config['site_templateurl']; ?>/images/ye_right_list_bg.png) top right no-repeat;">
                            <!-- 鼠标移动到小图片，小图片前显示下列图标 -->
                            <div class="ye_li_hover"></div>
                          </li>
                        </ul>
                    </div>
                    <!-- 向下按钮 -->
                    <div style="width:85px;height:6px;"><a id="next" hidefocus href="javascript:;"></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- 讨论区 -->
    <div class="taolun_txt">
      <div class="taolun_txt_right">
        <div class="taolun_txt_right_pinglun">
          <div id="screen">
            <div class="content">
                <div class="left">
                    <wb:livestream skin="silver" appkey="3371428860" titlebar="n" border="n" topic="%E7%87%83%E6%83%85%E4%B9%8B%E5%A4%9C|%E7%87%83%E6%83%85%E4%B9%8B%E5%A4%9C" width="510" height="500"></wb:livestream>
                </div>
            </div>
          </div>
       </div>
     </div>
    <div style="position:absolute;z-index:44;top:410px;left:630px;display:none;">
        <img src="<?= $config['site_templateurl']; ?>/images/ye_huaduo.png" alt=""/>
    </div>
    </div>
    </div>
    </div>
</div>
</body>
</html>