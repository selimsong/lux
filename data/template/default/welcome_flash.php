<?php $this->load->view($config['site_template'].'/head');?>
<body>
<div class="page" id="page_index">
    <?php $this->load->view($config['site_template'].'/nav');?>
    <div class="pagetxt">
        <div class="pagetxt_index">
          <script type="text/javascript">
            var _flash_play_path = null;
            var _flash_play_width = null;
            var _flash_play_height = null;
            function firm_flash_play(path, width, height) {
            this._flash_play_path = path;
            this._flash_play_width = width;
            this._flash_play_height = height;
            var str = null;
            str = "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='" + this._flash_play_width + "' height='" + this._flash_play_height + "' id='nfs_nav_flash' >"
              + "<param name='movie' value='" + this._flash_play_path + "' />"
              + "<param name='quality' value='high' />"
              + "<param name='src' value='" + this._flash_play_path + "' />"
              + "<param name='wmode' value='opaque'>"
              + "<embed src='" + this._flash_play_path + "' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' width='" + this._flash_play_width + "' wmode='opaque' height='" + this._flash_play_height + "'>"
              + "</embed>"
              + "</object>"
            document.write(str);
            }
          </script>
          <script type="text/javascript" language="javascript">
            firm_flash_play("<?= $config['site_templateurl']; ?>/images/video-new2.swf", "788", "444");
          </script>
            <script language="javascript" type="text/javascript">
                setTimeout("javascript:location.href='<?=base_url('index.php?/welcome/view')?>'", 16000);
            </script>
        </div>
    </div>
</div>
</body>
</html>
