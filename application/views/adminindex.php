<?php $this->load->view('admin_head.php'); ?>
    <div id="main_head" class="main_head" style="height:35px;">
        <table class="menu">
            <tr>
                <td>
                    <a href="<?= site_aurl('adminindex') ?>" class="current"><?= lang('func_adminindex') ?></a><?php if(is_dir('./install')): ?>
                        <font color="red"><?= lang('installnotice') ?></font><?php endif; ?>
                </td>
            </tr>
        </table>
    </div>
    <div id="main_head" style="padding-top:35px;">
        <table cellSpacing=0 width="100%" class="content_list">
            <tr>
                <th width="50%" align="left" colspan="2"><?= lang('userinfo') ?></th>
            </tr>
            <tr>
                <td width="15%"><?= lang('user_name') ?></td>
                <td width="35%"><?= $user['username'] ?></td>
            </tr>
            <tr>
                <td width="15%"><?= lang('func_usergroup') ?></td>
                <td width="35%"><?= $user['usergroup'] ?></td>
            </tr>
            <tr>
                <td width="15%"><?= lang('lasttimelogin') ?></td>
                <td width="35%"><?= date('Y-m-d H:i:s', $user['lasttime']) ?></td>
            </tr>
            <tr>
                <td width="15%"><?= lang('lastiplogin') ?></td>
                <td width="35%"><?= $user['lastip'] ?></td>
            </tr>
            <tr>
                <td width="15%"><?= lang('allcountlogin') ?></td>
                <td width="35%"><?= $user['logincount'] ?></td>
            </tr>
        </table>
    </div>
<?php $this->load->view('admin_foot.php'); ?>