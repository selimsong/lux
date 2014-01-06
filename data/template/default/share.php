<?php $this->load->view($config['site_template'].'/head');?>
<body>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/screen.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jsScroll.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.uploadify.min.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/NcXe.js"></script>
<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/css/uploadify.css">
<style type="text/css">#SWFUpload_0{ margin-left:-56px; width:112px; height:100px; }#SWFUpload_1{ margin-left:-56px; width:112px; height:100px; }</style>
<div class="page" id="page_welcome">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
    <div class="pagetxt_share" style="text-align: center;">
      <div style="margin-top:10px;">
      	<img src="<?= $config['site_templateurl']; ?>/images/share_story_top_title.png" alt=""/>
      </div>
    <div class="pagetxt_share_div1"  style="margin-top:-8px;">
        <div class="pagetxt_share_div1_photo" style="text-align:left;">
<!--            上传图片start-->
            <script type="text/javascript">
                <?php $timestamp = time();?>
                var URL = '<?=base_url();?>';
                var timestamp = '<?php echo $timestamp;?>';
                var token = '<?php echo md5('wood' . $timestamp. 'spring');?>';
                var swf = '<?=$config['site_templateurl'];?>/images/uploadify.swf';
                var uploader = '<?=base_url('index.php?/share/uploadImg/')?>';
                $(function () {
                    changeUpload('<?=$config['site_templateurl'];?>/images/upload_photo.png', 1);
                });
            </script>
          
                <div style="margin:0px 0px 0px 55px;">
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                </div>
            <form action="<?= base_url('index.php?/share/shareImg') ?>" method="post" id="shareForm" enctype="multipart/form-data" onsubmit="return checkSubmit()">
                <input type="hidden" name="fileurl" id="fileurl"/>
<!--                上传图片end-->
              
                <div class="share_text_bt" style="text-align:left;">
                    <div class="share_textarea" style="text-align:left;">
                        <textarea name="content" onclick="dianji()" id="content" rows="6" cols="10" style="float:left;">#燃情之夜#</textarea>
                        <div class="share_textarea_zishu" id="share_textarea_zishu" style="display:block;">(字数不超过140个)</div>
                        <div class="pagetxt_share_div1_txtbt">
                            <input type="image" src="<?= $config['site_templateurl']; ?>/images/share_bt.png"/>
                        </div>
                    </div>
                  <div style="clear:both;height:1px;width:100%;"></div>
                </div>
            </form>
        </div>
      <script type="text/javascript">
        function dianji() {
        document.getElementById("share_textarea_zishu").style.display = "none";
        }
      </script>
        <div class="pagetxt_share_div1_txt">
          <div id="screen">
            <div class="content">
              <div class="left" id="">
                <div class="guiz">
                  <p>
                    招募时间
                  </p>
                  2013年12月30日-2014年1月24日（第一波招募）<br/>
                  2014年2月10日-2014年3月14日（第二波招募）
                  <p>
                    入住时间
                  </p>
                  2014年1月2日-2014年3月23日<br/>
                  （具体入住时间以最终沟通确认为准，入住时间仅限1晚。）
                  <p>
                    入住地点
                  </p>
                  上海半岛酒店 (上海市外滩中山东一路32号)
                  <p>
                    参与条件
                  </p>
                  年龄超过20周岁以上的情侣/夫妻
                  <p>
                    招募周期说明
                  </p>
                    12.23-12.29第一周 招募1对。<br/>
                    12.30-1.24第一波 每周招4对。<br/>
                    1.25-2.9两周 暂停招募。<br/>
                    2.10-3.14第二波 每周招4对。(其中2.10-2.14招5对，情人节特招)<br/>
                  （共招募30对）
                  <p>
                    参与方式
                  </p>
                  在页面：<a style="color:#000;" href="http://t.cn/8k1dYsy">http://t.cn/8k1dYsy</a>燃情故事中上传你和他的亲密照片并分享照片中的燃情故事并 @LUX力士
                  <p>
                    评选规则
                  </p>
                  随机抽取符合参与方式和条件的情侣/夫妻体验燃情之夜。<br/>
                  每周周五公布下周入住名单
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix" style="width:100%;"></div>
          <!--弹出层的按钮:-->
          <div class="huodong_jieshi" onclick="locking()" style="cursor:pointer;">
            *用户条款和隐私政策
          </div>
          <div id="ly" style="position: absolute; top: 0px; filter: alpha(opacity=60);;z-index: 2; left: 0px; display: none;"></div>

          <div id="pop" align="center" style="display:none;">
            <div id="tabtop3" style="text-align:right;width:100%;background:url(<?= $config['site_templateurl']; ?>/images/share_box_bg1230.png) repeat-x;height:38px;line-height:38px;">
              <div style="text-align:center;width:900px;font-weight:bold;font-size:18px;color:#fff;float:left;">
                用户条款和隐私政策
              </div>
              <div id="tabtop-R3" onclick="closeLayer()" style="width:26px;height:25px;float:right; cursor:pointer;margin:4px 10px 0px 0px;">
                <a href="JavaScript:;" onclick="Lock_CheckForm(this);">
                  <img src="<?= $config['site_templateurl']; ?>/images/liaojie_close_bt.png" alt="关闭"/>
                </a>
              </div>
            </div>
            <div id="tabcontent3" style="padding:8px;height:650px;overflow:auto;text-align:left;font-family:宋体;line-height:175%;">
              <p class="guize_p1">力士燃情之夜活动规则</p>
              <p class="guize_p1">一：活动简介</p>
              &nbsp;&nbsp;&nbsp;&nbsp;招募时间：2013年12月30日—2014年1月24日（第一波招募）<br/>
              　　　　　&nbsp;&nbsp;&nbsp;&nbsp;2014年2月10日—2014年3月14日（第二波招募）<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;入住时间：2014年1月2日—2014年3月23日<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;入住地点：上海半岛酒店。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;参与条件：华东地区女性用户。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;参与方式：<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;通过页面：http://  导航栏中的燃情故事上传自己和另一半的亲密合照。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;分享照片中的燃情故事 @LUX力士。<br/><br/>
              <p class="guize_p1">二：活动奖励：</p>
              &nbsp;&nbsp;&nbsp;&nbsp;燃情之夜体验资格：<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;每周从符合参与要求的用户中随机抽取4位用户获得和另一半一起参与燃情之夜的体验资格。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;用户领奖及兑奖须知：<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;燃情之夜公布获奖名单一周内，主办方将联系获奖用户，和其确认参与体验具体事宜。<br/><br/>
              <p class="guize_p1"> 三：体验流程：</p>
              &nbsp;&nbsp;&nbsp;&nbsp;13:00-13:30 开启燃情之夜  （LUX管家带领办理入住手续）<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;13:30-15:00 亲密肢体互动  （燃情舞蹈老师进行触发亲密的舞蹈教学）<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;15:00-16:30 美妙香氛“体”验 （体验燃情spa）<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;16:00-17:15 燃情心灵之旅  （专业心理咨询师沟通燃情技巧）<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;17:15-19:30 留驻燃情时刻  （打造燃情造型，拍摄燃情写真）<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;19:30-21:00 共进烛光晚餐  （享受饶有情调的烛光晚餐）<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;21:00-次日11:00 共度燃情一夜<br/><br/>
              &nbsp;&nbsp;&nbsp;&nbsp;活动主办发提供活动当日上海本地接送服务，以及上述流程环节中所提供项目的全部费用。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;*参与者若非上海用户，异地差旅需要自理。<br/><br/>
              <p class="guize_p1"> 四、活动说明：</p>
              &nbsp;&nbsp;&nbsp;&nbsp;(1)用户保证在活动过程中遵守中国相关法律、法规、规章和其他规范性文件。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(2)不得为任何非法目的而使用网络服务系统，不得在活动中出现任何损害国家利益、破坏民族团结、宣扬封建迷信、扰乱社会秩序、宣扬淫秽、色情、赌博、暴力、凶杀、恐怖、教唆犯罪和侵害他人合法权益等不符合国家法律规定的内容，也不得出现任何包含诬蔑、人身攻击、谩骂、侮辱、诋毁、有悖公序良俗等的不适当内容；<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(3)遵守所有与网络服务有关的网络协议、规定和程序；<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(4)不得利用本网站网络服务系统实施任何诋毁联合利华及其品牌或其网络服务系统以及妨碍其他用户公平参与的行为；<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(5)对于违反以上规定的内容，在不需要通知和解释的情况下，管理员有权予以屏蔽或删除，取消用户参与活动的资格和冻结帐号，情节严重的将转交相关司法机构处理；<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(6)就用户通过本网站发表的相关言论，纯属用户个人行为，由此引发的任何纠纷与主办方无关，由其自行承担一切法律责任。因此给主办方造成损失的（包括但不限于直接损失以及为解决纠纷所支出的成本和费用），主办方有权要求其予以赔偿。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(7)用户对于通过上传或链接而参加燃情之夜活动的内容依法享有版权及其他相关合法权利，对于该等内容，用户不可撤销的同意主办方及其关联公司在全世界范围内具有免费的、永久性的使用许可，以使用、复制、修改、翻译、据以创作衍生作品、传播、表演和展示该等内容（整体或部分）。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(8)图示的礼品仅供参考，颜色随机发放，请以收到的实物为准。活动主办方对邮寄奖品中发生的丢失或损坏不承担任何责任。有关礼品如遇质量问题，消费者应与礼品生产商或其指、定的经销商联系，按照其正常的退换货和维修规则办理相关事宜，活动主办方不承担任何责任。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(9)联合利华（中国）有限公司作为本次活动主办方在法律允许范围内保留对本次活动的最终解释权。<br/>
              &nbsp;&nbsp;&nbsp;&nbsp;(10)用户参加力士燃情之夜的活动，即表示已仔细阅读上述关于本活动的规则和说明，并完全同意上述内容。<br/><br/><br/>
              <p style="text-align:center;font-weight:bold;">
                UNILEVER PRIVACY PRINCIPLES<br/>
                联合利华隐私保护准则
              </p>
              
              Unilever takes privacy seriously. The following five principles underpin our approach to respecting your privacy:<br/>
              联合利华高度重视隐私保护，下列原则规制我们与您的隐私有关的行为：<br/><br/>
              1.We value the trust that you place in us by giving us your personal information. We will always use your personal information in a way that is fair and worthy of that trust.<br/>
              我们珍视您在向我们提供您的个人信息时对于我们的信任。我们对于您的个人信息的使用将绝不会有负您的信任。<br/>
              2.You are entitled to clear information about how we use your personal information. We shall always be transparent with you about what information we collect, what we do with it, with whom we share it and whom you should contact if you have any concerns.<br/>
              您有权清楚了解我们如何使用您的个人信息。我们将始终在收集何种信息，如何处理该种信息，与哪方共享信息以及您有疑问时联系我们的联系人信息等方面保持透明。<br/>
              3.If you have any concerns about how we use your personal information, we will work with you to promptly resolve those concerns.<br/>
              如您对于我们如何使用您的个人信息存在疑问，我们将配合您迅速解决您的疑问。<br/>
              4.We will take all reasonable steps to protect your information from misuse and keep it secure.<br/>
              我们将采取所有必要措施来确保您的信息不被滥用和不当披露。<br/>
              5.We will comply with all applicable data protection laws and regulations and we will co-operate with data protection authorities.  In the absence of data protection legislation, we will act in accordance with generally accepted principles governing data protection.<br/>
              我们将遵守所有适用的有关数据保护和法律法规并配合数据保护主管机关的工作。如不存在有关数据保护的立法，我们将依据普遍接受的适用于数据保护的准则来规范我们的行为。<br/><br/>
              <p style="text-align:center;font-weight:bold;">
                UNILEVER PRIVACY POLICY<br/>
                联合利华隐私保护政策
              </p>
              Last Updated: August 2012<br/>
              最后修订时间：2012年8月<br/><br/>
              Unilever is committed to protecting your privacy and ensuring that your personal information is protected.  This Privacy Policy explains the types of personal information we collect and how we use, disclose and protect that information.
              <br/>联合利华致力于保护您的隐私并且确保您的个人信息受到保护。本隐私保护政策解释了我们收集的信息类型、我们如何使用以及我们如何保护该等信息。<br/><br/>
              <p style="font-weight:bold;color:#0066cc;">
                What does this Privacy Policy apply to?<br/>
                本隐私权保护政策的适用范围？
              </p>
              This Privacy Policy applies to personal information collected by the Unilever Group of companies in connection with the services they offer. Find out more about the Unilever Group at <a href="http://unilever.com/aboutus/" style="color:#0066cc;"> http://unilever.com/aboutus/</a>.  This includes information collected offline through our Careline and consumer call centres, direct marketing campaigns, sweepstakes and competitions, and online through our websites, branded pages on third party platforms and applications accessed or used through such websites or third party platforms which are operated by or on behalf of the Unilever Group (“Unilever Sites”).    This Privacy Policy is hereby incorporated into and forms part of the terms and conditions of use of the applicable Unilever Site.  For information about the Unilever Group company responsible for protecting your personal information, see Your privacy rights and who to contact below.
              <br/>本隐私保护政策适用联合利华集团所属企业所收集的与其所提供的服务有关的任何个人信息（您可以通过网站http://unilever.com/aboutus/了解更多有关联合利华集团的信息）。上述个人信息既包括我们通过服务热线、消费者呼叫热线，直递市场活动、抽奖和竞赛等线下渠道和联合利华网站、第三方平台之上的品牌页面、以及联合利华集团公司或其代表所运营的网站或第三方平台所访问或使用的程序等线上渠道(以上统称“联合利华网站”)所收集的个人信息。所有有关使用联合利华网站的条款和条件中均应当包括作为其组成部分的本隐私保护政策。如欲了解更多关于有责任保护您的个人信息的联合利华所属企业，请参阅下述您的隐私权及如何联系我们。
              <br/><br/>This Privacy Policy does not apply to:
              <br/>本隐私保护政策不适用于：<br/><br/>
              1.information collected by third party websites, platforms and/or applications (“<span style="font-weight:bold;">Third Party Sites</span>”) which we do not control;<br/>
              我们没有控制权的第三方网站、平台和/或应用程序（以下简称为“第三方网站”）所收集的信息；<br/>
              2.information collected by Third Party Sites which you access via links on Unilever Sites;<br/>
              您通过联合利华网站的链接所访问的第三方网站所收集的信息；<br/>
              3.banners, sweepstakes and other advertisements or promotions on Third Party Sites that we may sponsor or participate in.<br/>
              我们可能在第三方网站上主办或参与的广告通栏、抽奖以及其他广告或促销。<br/>
              4.These Third Party Sites may have their own privacy policies and terms and conditions. We encourage you to read them before using those Third Party Sites.<br/>
              该等第三方网站可能有其自己的隐私保护政策以及使用条款与条件。我们鼓励您在使用该等第三方网站之前仔细阅读该等政策和条款。<br/>
              <br/><p style="font-weight:bold;color:#0066cc;">
                Your consent<br/>
                您的许可
              </p>
              Unilever will not collect, use or disclose your personal information without your consent. In most cases, we will ask for your consent explicitly but, in some cases, we may infer consent from your actions and behaviour.  By using a Unilever Site, you are consenting to the relevant Unilever Group company collecting, using and disclosing your personal information in accordance with this Privacy Policy.
              <br/>未经您的许可联合利华不会收集、使用或披露您的个人信息。多数情况下我们会征得您的事先许可。在少数情况下我们会依据您的行动或行为合理推断获得您的同意。使用联合利华网站，您即同意相关联合利华集团所属企业根据本隐私保护政策收集、使用和正当披露您的个人信息。
              <br/>We may ask you to provide additional consent if we need to use your personal information for purposes not covered by this Privacy Policy.  You are not obliged to provide such consent but if you decide not to then your participation in certain activities may be restricted.  If you provide additional consent, the terms of that consent shall prevail in the event of any conflict with the terms of this Privacy Policy.
              <br/>如我们需要使用您的个人信息用于本隐私保护政策适用范围以外的目的，我们将会事先征得您的额外许可。您没有义务给予此等额外许可，但如果您未有给予相关额外许可，您在某些活动中的参与可能会有所限制。如您给予额外的许可，此等额外许可的条款在与本隐私保护政策相冲突时将优先适用。
              <br/>If you do not agree to the collection, use and disclosure of your personal information in this way, please do not use the Unilever Sites or otherwise provide Unilever with personal information.
              <br/>如果您不同意您的个人信息以上述方式被收集、使用和披露，请勿使用联合利华网站或向联合利华提供您的个人信息。<br/><br/>
              <p style="font-weight:bold;color:#0066cc;">
                Children<br/>
                未成年人
              </p>
              The majority of Unilever Sites are designed and intended for use by adults.  Where a Unilever Site is intended for use by a younger audience, we will obtain consent from a parent or guardian before we collect personal information where we feel it is appropriate to do so or where it is required by applicable data protection laws and regulations (the age at which consent is necessary varies from country to country).  If you are a child over the age where parental consent is required in your country, you should review the terms of this Privacy Policy with your parent or guardian to make sure you understand and accept them.
              <br/>联合利华网站的大多数内容系为成人用户设计和计划。如果联合利华网站预期供更加年轻的用户使用，如果我们认为有必要或根据所适用的数据保护法律法规的要求，我们将会在收集个人信息之前获得父母或监护人的同意（需要获得同意的年龄各国不尽相同）。如果您属于未成年人但您的年龄超过了您所在国家要求父母同意的年龄，则您应当与您的父母或监护人一起阅读本隐私权政策，确保您理解并接受这些条款。
              <br/>If we discover that we have collected information without consent from a parent or guardian where such consent should have been obtained, we will delete that information as soon as possible.
              <br/>如果我们发现未获得该等所必需的父母或监护人的同意而我们已经收集到某用户的信息，我们将会尽快删除该等信息。
              <br/>Access to certain parts of the Unilever Sites and/or eligibility to receive prizes, samples or other rewards may be limited to users over a certain age. We may use your personal information to carry out age verification checks and enforce any such age restrictions.
              <br/>联合利华网站某些部分的访问和/或获得奖金、样品或其它报酬的资格，可能仅限于某一特定年龄以上的用户。 我们可能会使用您的个人信息进行年龄验证和核查以执行我们的年龄限制规定。<br/><br/>
              <p style="font-weight:bold;color:#0066cc;">
                What information do we collect?<br/>
                我们收集何种信息？
              </p>
              In this Privacy Policy, your "personal information" means information or pieces of information that could allow you to be identified. This typically includes information such as your name, address, screen name, profile picture, email address, and telephone number, but can also include other information such as IP address, shopping habits, preferences and information about your lifestyle or preferences such as your hobbies and interests. We may collect personal information about you from different sources, including:
              <br/>在本隐私保护政策中，您的“个人信息”是指能够使您被识别的信息或多条信息。该信息典型地包括诸如您的姓名、地址、用户名、个人图片、电子邮件地址以及电话号码等信息，但是也可以包括诸如IP地址、购物习惯、爱好以及关于您的生活方式或爱好（例如您的业余爱好和兴趣）的信息。 我们可以从以下不同来源收集您的个人信息：
              <br/>
              <p style="color:#0066cc;text-decoration:underline;">
                Information you give us directly
                <br/>您直接向我们提供的信息
              </p>
             
              We may collect information from you directly when you provide us with personal information, e.g. when you register for prize draws or competitions, sign up to receive information, use applications, buy a product or service from us, fill out a survey, or make a comment or enquiry. The types of information we may collect from you directly include your:
              <br/>当您向我们提供个人信息时，例如当您进行抽奖或比赛注册，报名获取信息、使用应用程序、向我们购买产品或服务、填写调查表或进行评论或咨询之时，我们会直接向您收集信息。 我们会直接向您收集的信息类型包括您的：<br/><br/>
              1.name姓名<br/>
              2.address地址<br/>
              3.email address邮件地址<br/>
              4.user name用户名<br/>
              5.telephone number电话号码<br/>
              6.credit card or other payment information信用卡或其他支付信息<br/>
              7.age年龄<br/>
              8.date of birth生日<br/>
              9.gender性别<br/>
              10.user-generated content, posts and other content you submit to Unilever Sites用户生成的内容、帖子以及您向联合利华网站提供的其它内容<br/>
              11.any other person information you voluntarily provide to us您自愿向我们提供的任何其他个人信息<br/><br/>

              <p style="color:#0066cc;text-decoration:underline;">
                Information we collect automatically when you use the Unilever Sites<br/>
                您使用联合利华网站时我们自动收集的信息
              </p>
              
              We use cookies and other tools (such as web analytic tools and pixel tags) to automatically collect information about you when you use Unilever Sites, subject to the terms of this Privacy Policy and applicable data protection laws and regulations.  The types of information we may collect automatically include:
              <br/>当您使用联合利华网站时，我们会在遵守本隐私保护政策和所适用的数据保护法律法规的前提下使用Cookies以及其他工具（例如，网站分析工具和像素标签）自动地收集您的有关信息。我们可能自动地收集的信息类型包括：<br/><br/>
              1.information about the type of browser you use您使用的浏览器类型<br/>
              2.details of the web pages you have viewed您浏览的网页详情<br/>
              3.your IP address您的IP地址<br/>
              4.the hyperlinks you have clicked您点击的超链接<br/>
              5.your user name, profile picture, gender, networks and any other information you choose to share when using Third Party Sites (such as when you use the “Like” functionality on Facebook or the +1 functionality on Google+)使用第三方网站(例如您使用Facebook的“Like”功能或Google+的“+1”功能)时您选择共享的您的用户名、个人图片、性别、社交圈以及任何其他信息<br/>
              6.the websites you visited before arriving at a Unilever Site访问联合利华网站之前您所访问的网站<br/>
              Most internet browsers are initially set up to accept cookies. You can change the settings to block cookies or to alert you when cookies are being sent to your device. If you disable the cookies this may impact your experience on Unilever Sites.
              <br/>多数互联网浏览器的初始设置是接受cookies。您可以选择设置拒绝接受cookies或收到cookies时系统报警。如您取消cookies功能，您在联合利华网站的浏览体验可能受到影响。<br/><br/>


              <p style="color:#0066cc;text-decoration:underline;">
                Information we collect from other sources<br/>
                我们自其它来源所收集的信息
              </p>
              We may receive personal information about you from other sources if you have given permission for that information to be shared.  This may include information from commercially available sources, such as public databases and data aggregators, and information from third parties. The types of personal information that we may collect from such sources include your:
              <br/>我们可能自其它的来源收集您的个人信息，但前提是您已经同意您的信息被分享。此等信息可能包括商业可供来源（例如，公共数据库以及数据聚合器）的信息以及第三方处获得的信息。 我们可以自该等来源收集的个人信息类型包括您的：<br/><br/>
              1.name姓名<br/>
              2.street address街道地址<br/>
              3.age年龄<br/>
              4.your shopping habits 您的购物习惯<br/>
              5.preferences and information about your lifestyle such as your hobbies and interests爱好和您的生活方式相关信息，例如您的业余爱好和兴趣<br/>
              6.publicly available information such as user-generated content, blogs and postings, as permitted by law法律所允许的公开渠道可得的信息，例如，用户生成内容、博客以及贴子等<br/><br/>
              <p style="font-weight:bold;color:#0066cc;">
                How do we use your personal information?<br/>
                我们如何使用您的个人信息
              </p>
              
              We may use your personal information:<br/>
              我们可能将您的个人信息用于：<br/>
              to improve our products and your experience on the Unilever Sites. Find out more.<br/>
              改进我们的产品和提升您在联合利华网站的用户体验。点击此处了解更多<br/>
              We may use your personal information to:<br/>
              我们可能将您的个人信息用于：<br/><br/>
              1.evaluate the use of the Unilever Sites, products and services<br/>
              评估联合利华网站、产品以及服务的使用<br/>
              2.analyse the effectiveness of our advertisements, competitions and promotions<br/>
              分析我们的广告、竞赛以及促销的有效性<br/>
              3.personalise your website experience, as well as to evaluate (anonymously and in the aggregate) statistics on website activity, such as what time you visited it, whether you’ve visited it before and what site referred you to it 
              <br/>个性化您的网站体验，以及对网站活动的评估统计（匿名且总计数据），例如，您访问的时间、您是否之前访问过以及什么站点将您指引到网站<br/>
              4.make the Unilever Sites easier to use and to better tailor the Unilever Sites and our products to your interests and needs<br/>
              使联合利华网站的使用更轻松并且更好地设计研发联合利华网站和产品，以满足您的兴趣和需求<br/>
              5.help speed up your future activities and experience on the Unilever Sites. For example, a site can recognise that you have provided your personal information and will not request the same information a second time
              <br/>帮助加速您在联合利华网站上的未来活动和经验。例如，网站识别您曾经提供了个人信息就不再第二次请求相同信息<br/>
              6.collect information about the device you are using to view the Unilever Site, such as your IP address or the type of Internet browser or operating system you are using, and link this to your personal information so as to ensure that each Unilever Site presents the best web experience for you
              <br/>收集您用于浏览联合利华网站的设备的相关信息，例如，您的IP地址或互联网浏览器类型或您所使用的操作系统，并且将之与您的个人信息相联系，以便确保联合利华为您提供最佳的网站体验<br/>

              7.to contact you regarding products and services which may be of interest to you, provided you have given us consent to do so or you have previously requested a product or service from us and the communication is relevant or related to that prior request and made within any timeframes established by applicable laws.  Find out more.
              <br/>仅当我们已经获得您的同意后或您之前提出对于我们提供的产品或服务的请求，就您可能感兴趣的产品和服务与您进行联络，且此等联络在适用法律的规定的合理时间期限内与前述的请求相关或存在关联。点击此处了解更多<br/><br/>
              We may use your personal information to:<br/>
              我们可能将您的个人信息用于：<br/><br/>
              1.suggest products or services (including those of relevant third parties) which we think may be of interest to you建议我们认为您可能感兴趣的产品或服务（包括相关第三方的产品或服务）<br/>
              2.offer you the opportunity to take part in competitions or promotions向您提供参加竞赛或促销的机会<br/>
              You can opt out of receiving communications from us at any time.  Any direct marketing communications that we send to you will provide you with the information and means necessary to opt out.<br/>
              您可随时选择不再接受我们的联络。并且我们向您发送的任何直销沟通将会向您提供选择退出的所需信息和方式。<br/>

              to provide you with products or services that you request from us.  Find our more.<br/>
              向您提供您向我们所要求的产品或服务。点击此处了解更多<br/><br/>
              We may use your personal information:<br/>
              我们可能将您的个人信息用于：<br/><br/>
              1.for the purposes of competitions or promotions that you have entered<br/>
              用于您已经报名参与的竞赛或促销<br/>
              2.to send you information, products or samples that you have requested<br/>
              向您发送您所要求的信息、产品或样品<br/>
              3.to respond to your queries or comments<br/>
              回复您的询问或评论<br/>

              Where we collect personal information for a specific purpose, we will not keep it for longer than is necessary to fulfil that purpose, unless we have to keep it for legitimate business or legal reasons.  In order to protect information from accidental or malicious destruction, when we delete information from our services we may not immediately delete residual copies from our servers or remove information from our backup systems.
              <br/>当我们为了一个特定目的收集个人信息时，除非基于合法的商业或法定理由，我们对于该等信息的保存期限仅限于该目的所必需的期限。 为了确保信息免于因为意外事件或恶意损毁而受损，当我们删除从各项服务过程中收集的信息时我们也许不会立即从我们的服务器中删除剩余副本或立即从备用系统中移除备份信息。
              <br/><br/>

              <p style="font-weight:bold;color:#0066cc;">
                Mobile Message Services<br/>
                移动信息服务
              </p>
              
              We may make available a service through which you can receive text or other types of messages from Unilever (such as short message service, or SMS, enhanced message service, or EMS, and multimedia message service, or MMS) on your wireless or mobile device (“Mobile Message Service”). If you subscribe to one of our Mobile Message Services, you agree to receive such messages from Unilever at the address or mobile number you provide for that purpose (unless and until you have elected to opt out of receiving such messages by following the instructions in the Your privacy rights and who to contact section below).
              <br/>您能通过我们提供的服务在您的无线或移动设备上接收联合利华发出的文字或其它类型的信息(诸如短消息SMS服务, 增强型短消息EMS服务或多媒体短消息MMS服务)服务(“移动信息服务”)。如您订阅任意一项我们提供的移动信息服务，您须同意接收联合利华向您为了此目的所提供的地址或移动号码发送的信息(直至您按照下述您的隐私权及如何联系我们条款选择不再接受此类信息)。
              <br/>You understand that your wireless carrier’s standard rates apply to these messages, and that you may change your mind at any time by following the instructions in the Your privacy rights and who to contact section below. If fees are charged to your wireless account invoice, you agree that we may collect from you and provide your carrier with your applicable payment information in connection therewith. You represent that you are the owner or authorized user of the wireless device you use to sign up for the Mobile Message Service, and that you are authorized to approve the applicable charges. In addition to meeting certain age restrictions and any other terms and conditions associated with each Mobile Message Service, you may be required to register personal information such as your name, text message, wireless address or mobile phone number. We may also obtain the date, time and content of your messages in the course of your use of the Mobile Message Service. We will use the information we obtain in connection with our Mobile Message Service in accordance with this Privacy Policy. Please note, however, that your wireless carrier and other service providers may also collect data about your wireless device usage, and their practices are governed by their own policies.
              <br/>您须了解您的无线服务运行商可能对上述信息按照其费率标准收费，您可随时按照下述您的隐私权及如何联系我们条款改变您的决定。如有费用在您的无线账户账单中收取，您应当同意我们可向您收取并据此向您的无线运营商提供您所适用的支付信息。您须声明您是您所用来申请收取移动信息服务的无线设备的所有人或授权使用人且有权批准所产生的费用。为了符合特定的年龄限制或与移动信息服务相关的其他条款和条件的要求，您可能被要求注册登记包括您的姓名、短消息、无线地址或手机号码在内的个人信息。我们也可能会收集您在使用移动信息服务过程中的您所使用的信息的日期，时间和信息内容。我们将按照本隐私保护政策的规定使用所收集的与提供移动信息服务相关的信息。请注意，您的无线运营商或其他服务供应商也可能收集有关您无线设备使用的数据，他们的行为受到他们各自政策的规范。
              <br/>You acknowledge and agree that the Mobile Message Service is provided via wireless systems which use radios (and other means) to transmit communications over complex networks. We do not guarantee that your use of the Mobile Message Service will be private or secure, and we are not liable to you for any lack of privacy or security you may experience. You are fully responsible for taking precautions and providing security measures best suited for your situation and intended use of the Mobile Message Service. We may also access the content of your wireless and/or mobile phone account with your carrier for the purpose of identifying and resolving technical problems and/or service-related complaints.
              <br/>您承认并同意移动信息服务系使用以无线信号(或其他方式)通过复杂网络传送沟通信息的无线网络系统来提供。基于上述原因，我们无法保证您对移动信息服务的使用是完全保密和安全的，我们对于您可能遇到的隐私侵犯或不安全不承担责任。你有责任根据自身情况和预期的对移动信息服务的使用采取相应的防范措施和安全措施。在法律许可的范围内，我们可能会为了鉴别和解决技术故障和/或服务相关的投诉的目的而向您的无线运营商了解您的无线服务的份额内容或移动电话账户信息。
             <br/><p style="font-weight:bold;color:#0066cc;">
               Who do we share your personal information with?<br/>
               我们对您个人信息的共享限制
             </p>
             
              As a general rule, we do not share your personal information with anyone outside of the Unilever Group. However, we may share your personal information with trusted third parties.  Find out more.
              <br/>作为一般原则，我们不与联合利华集团之外的任何人共享您的个人信息。 但是，我们可能会与某些信任的第三方分享您的个人信息。点击此处了解更多<br/><br/>
              We may share your personal information with:<br/>
              我们可能与以下各方共享您的个人信息：<br/>
              1.our advertising, marketing and promotional agencies to help us deliver and analyse the effectiveness of our advertising campaigns and promotions
              <br/>帮助我们提供广告宣传和促销并且分析其有效性的广告、市场和促销代理商
              <br/>2.third parties required to deliver a product or service to you, such as a delivery or postal service delivering a product that you have ordered
              <br/>要向您交付产品或服务的第三方，例如，交付您所订购产品的运输和快递服务
              <br/>3.law enforcement or government authorities where they have followed due legal process to request us to disclose the information
              <br/>执法或政府部门，如果他们已经遵守适当法律程序要求我们披露信息
              <br/>4.third parties who wish to send you information about their products and services, but only if you have given us consent to do so
              <br/>希望向您发送关于他们的产品与服务的信息的第三方，前提是我们已经获得您的同意
              <br/>5.third party providers of services, such as data processing, to Unilever
              <br/>联合利华的第三方服务提供商，例如，向联合利华提供数据处理的服务的提供商
              <br/>6.web analytics tool providers, such as Google or Unica
              <br/>网络分析工具提供商，例如，Google 或 Unica

              <br/>We may also share your personal information with companies, organisations or individuals outside of the Unilever Group if we believe that disclosure of the information is necessary for legal reasons.  Find out more.
              <br/>如我们依据合法理由相信信息的披露是必要的，我们可能向联合利华集团企业以外的公司、组织或个人共享您的个人信息。点击此处了解更多<br/><br/>
              1.We may share your personal information to:<br/>
              我们可能基于下列理由共享您的个人信息：<br/>
              2.enforce applicable terms of use of Unilever Sites<br/>
              执行与使用联合利华网站相关的条款<br/>
              3.conduct investigations into possible breaches of applicable laws<br/>
              就违反适用法律而进行调查<br/>
              4.detect, prevent and protect against fraud and any technical or security vulnerabilities<br/>
              对于欺诈和任何技术或安全攻击进行检测、预防和防护<br/>
              5.comply with applicable laws and regulations, co-operate in any legal investigation and meet enforceable governmental requests<br/>
              遵守适用法律法规，配合司法调查和执行行政机关依法要求<br/><br/>

              If we do share your personal information with a third party, we shall use our best efforts to ensure that they keep your information secure, take all reasonable steps to protect it from misuse and only use it in a manner consistent with this Privacy Policy and applicable data protection laws and regulations.
              <br/>如果我们的确与第三方分享您的个人信息，我们将会尽最大努力确保该第三方对您的信息保密，防止其被滥用且仅能以与本隐私保护政策以及所适用的数据保护法律法规所允许的方式使用您的个人信息。
              <br/>Unilever does not sell personal information, except to an entity to which we divest all or a portion of our business (for example, in connection with our sale of a brand), or otherwise in connection with a merger, consolidation, change in control, reorganization or liquidation of all or a portion of our business.
              <br/>除非我们向一个法律实体出售全部或部分我们的业务时一并提供相关信息(例如，与出售某一品牌相关)，或与某一业务的业务收购、合并、所有权变更、重组或清算相关，联合利华不对外出售个人信息。
              <br/><br/>
              <p style="font-weight:bold;color:#0066cc;">
                Transferring your personal information<br/>
                您的个人信息的转移
              </p>

              We may transfer your personal information to servers located outside the country in which you live or to affiliates or other trusted third parties based in other countries so that they may process personal information on our behalf.  By using a Unilever Site or otherwise providing Unilever with personal information, you agree to us doing so in accordance with the terms of this Privacy Policy and applicable data protection laws and regulations.
              <br/>我们可能将您的个人信息转移存储至您所居住国家以外的服务器或转移至位于其他国家的关联企业或可行的第三方以便代表我们处理您的个人信息。对于联合利华网站的使用或向联合利华提供您的个人信息即表明您同意我们按照本隐私保护政策和所适用的数据保护的法律法规对您的个人信息进行转移。
              <br/>You should be aware that many countries do not afford the same legal protection to personal information as you might enjoy in your country of origin. While your personal information is in another country, it may be accessed by the courts, law enforcement and national security authorities in that country in accordance with its laws. Subject to such lawful access requests, we promise that anyone processing your personal information outside your country of origin is required to implement measures to protect it and is only entitled to process it in accordance with Unilever’s instructions.
              <br/>您应当了解，不同于您可能在您的来源国所享受的个人信息法律保护，许多国家不提供相同的法律保护。当您信息存储于另一国家时，该国的法院、执法机构或安全机关可能根据该国法律查询您的个人信息。对于此等合法查询要求，我们承诺，处理您的个人信息的任何人将会被要求采取措施以保护您的个人信息且仅有权根据联合利华的指示处理您的个人信息。
              <br/><br/><p style="font-weight:bold;color:#0066cc;">
                Safeguarding your personal information<br/>
                保护您的个人信息
              </p>
              
              We take all reasonable precautions to keep your personal information secure and require any third parties that handle or process your personal information for us to do the same. Access to your personal information is restricted to prevent unauthorised access, modification or misuse and is only permitted among our employees and agents on a need-to-know basis.  
              <br/>我们将会采取所有合理措施保护您的个人信息安全并且要求所有办理或处理您的个人信息的第三方为我们采取相同的措施。为防止未经授权的访问、修改或滥用，对您的个人信息的查询是严格限制的，并且仅允许需要知道的我们的员工和代理人访问您的个人信息。
              <br/><br/><p style="font-weight:bold;color:#0066cc;">
                Your privacy rights and who to contact 
                <br/>您的隐私权及如何联系我们
              </p>
            
              If you have any questions, comments or concerns about how we handle your personal information, then you may contact us by clicking the Contact Us link on the Unilever Site that directed you to this Privacy Policy.  Alternatively, please go to www.unilever.com, select the appropriate country and click on the Contact Us link. Your request will be directed to the appropriate Unilever group company.
              <br/>如果您就我们怎样处理您的个人信息存在任何问题、评论或担心，您可以点击指引您到本隐私保护政策的联合利华网站之上的“联系我们”链接，联系我们。您也可以登录www.unilever.com,选择相应国家并点击“联系我们”链接。 您的请求将会被转给相关联合利华集团公司。
              <br/>You have the right to tell us if you:
              <br/>您有权告诉我们您是否：
              <br/>
              1.don't want to be contacted in the future by us <br/>
              不希望我们今后联系您<br/>
              2.would like a copy of the personal information which we hold about you<br/>
              同意我们持有的您的个人信息的复本<br/>
              3.would like us to correct, update, or delete your personal information in our records <br/>
              希望我们纠正、更新或删除我们记录中的您的个人信息<br/>
              4.wish to report any misuse of your personal information<br/>
              希望举报任何滥用您的个人信息<br/>
              To assist us in dealing with your request, please provide your full name and details. <br/>
              为协助我们处理您的要求，请提供您的全名和联系详情。
              <br/><p style="font-weight:bold;color:#0066cc;">
                Changes to our Privacy Policy <br/>
                我们隐私保护政策的变更
              </p>
              
              We may change this Privacy Policy from time to time by posting the updated version of the Privacy Policy on the Unilever Sites. We will give you reasonable notice of any material change. We encourage you to visit frequently to stay informed about how we use your personal information.
              <br/>我们可以通过在联合利华网站上发布隐私保护政策的更新版本而随时修订本隐私保护政策。 如果有任何重大变更，我们将会对您进行合理地通知。 我们欢迎您经常访问我们的网站，以便及时了解我们如何使用您的个人信息。
              <br/><br/>
              <p style="font-weight:bold;color:#0066cc;">
                Other Unilever privacy policies <br/>
                其它联合利华隐私保护政策
              </p>

              In addition to this Privacy Policy, there may be specific campaigns or promotions which will be governed by additional privacy terms or policies. We encourage you to read these additional terms or policies before participating in any such campaigns or promotions as you will be required to comply with them if you participate. Any additional privacy terms or policies will be made prominently available to you.
               <br/>除本隐私保护政策之外，联合利华可能举办特定的广告宣传或促销活动，这些宣传和促销活动将受到其它附加的隐私保护条款或政策的管辖。 我们建议您在参加任何该等广告宣传或促销活动之前仔细阅读该等附加的条款或政策，因为如果您参加活动您将会被要求遵守这些附加的条款或政策。您将会得到任何附加的隐私保护政策或条款的明显突出提示。
            </div>
          </div>
          <!--  浮层框架结束-->
          <script>
            function locking() {
            document.all.ly.style.display = "block";
            document.all.ly.style.width = document.body.clientWidth;
            document.all.ly.style.height = document.body.clientHeight;
            document.all.pop.style.display = 'block';
            }
            function Lock_CheckForm(theForm) {
            document.all.ly.style.display = 'none'; document.all.pop.style.display = 'none';
            return false;
            }
          </script>
        </div>
    </div>
    <div class="clearfix"></div>
      <style type="text/css">
        .divScrollBar{height:200px;width:30px;background:#f199aa url(<?= $config['site_templateurl']; ?>/images/share_story_line.png) top center no-repeat;}
        .divScrollBar:hover{height:200px;width:30px;background:#f199aa url(<?= $config['site_templateurl']; ?>/images/share_story_line.png) top center no-repeat;}
        .divScrollBar share_mi12_div{width:30px;height:46px;background:url(<?= $config['site_templateurl']; ?>/images/long_scroll1.png) top center no-repeat; position:absolute; left:0px; top:0px;}
    </style>
        <div class="pagetxt_share_div2" id="pagetxt_share_div2">
          <div id="share_mi12_div">
            <div class="left" id="leftDiv">
              <?php foreach($list as $item):?>
              <div class="pagetxt_share_div2_1">
                <div class="pagetxt_share_div2_1img">
                  <a>
                    <img height="125" src="<?php if($item['share_thumb']): ?><?= $item['share_thumb'];?><?php else:?><?= $config['site_templateurl']; ?>/images/default.png<?php endif;?>"/>
                  </a>
                </div>
                <div class="pagetxt_share_div2_1user">
                  <div class="pagetxt_share_div2_1user1">
                    <a>
                      <img src="<?php if($item['user_thumb']): ?><?= $item['user_thumb'];?><?php else:?><?= $config['site_templateurl']; ?>/images/default.png<?php endif;?>"/>
                    </a>
                  </div>
                  <div class="pagetxt_share_div2_1user2">
                    <a>
                      <?= $item['nickname']?>
                    </a>
                  </div>
                </div>
                <div class="pagetxt_share_div2_1txt">
                  <?= $item['content']?>
                </div>
              </div>
              <?php endforeach;?>
            </div>
          </div>
          <div id="divInfo" style=""></div>
          <script type="text/javascript">
            jsScroll(document.getElementById('share_mi12_div'), 10, 'divScrollBar');
          </script>
        </div>
    </div>
    </div>
</div>
<script type="text/javascript">
  $(function() {
  var container = document.querySelector('#leftDiv');
  var msnry = new Masonry( container, {
  itemSelector: '.pagetxt_share_div2_1'
  });
  });

  function checkSubmit(){
  if($('#fileurl').val() == '')
  {
  alert('请上传图片');
  return false;
  }
  if($('#content').val() == '#燃情之夜#' || $('#content').val() == '')
  {
  alert('请填写分享内容');
  return false;
  }
  }

</script>
</body>
</html>
