<?php if($tpl=='list'):?>
	<?php $this->load->view('admin_head.php');?>
	<div id="main_head" class="main_head">
	<form name="formsearch" id="formsearch" action="<?=site_aurl($tablefunc)?>" method="post">
	<table class="menu">
	<tr><td>
	<a href="<?=site_aurl($tablefunc)?>" class="current"><?=lang('func_'.$tablefunc)?></a>
	</td></tr>
	</table>
	</form>
	<table cellSpacing=0 width="100%" class="content_list"><thead>
	<tr>
	<th width=30  align="left"><input type="checkbox" onclick="checkAll(this)"></th>
	<th align=left>user id</th>
	<th width=80 align="left">昵称</th>
	<th width=480 align="left">内容</th>
	<th width=80 align="left">省份</th>
	<th width=80 align="left">城市</th>
	<th width=50 align="left"><?=lang('operate')?></th>
	</tr>
	</thead>
	</table>
	</div>
	<form name="formlist" id="formlist" action="<?=site_aurl($tablefunc)?>" method="post">
	<input type="hidden" name="action" id="action" value="<?=site_aurl($tablefunc)?>">
	<div id="main" class="main">
	<table cellSpacing=0 width="100%" class="content_list">
	<tbody id="content_list"><?php if (isset($liststr)): ?><?=$liststr?><?php endif; ?></tbody>
	</table>
	</div>
	</form>
	<div class="main_foot">

	</div>
	<?php $this->load->view('admin_foot.php');?>
<?php elseif($tpl=='view'):?>
	<form name="formview" id="formview" action="" method="post">
	<input type="hidden" name="action" id="action" value="<?=site_aurl($tablefunc)?>">
	<input type="hidden" name="id" value="<?=isset($view['id'])?$view['id']:'';?>">
	<div id="main_view" class="main_view">
	<table cellSpacing=0 width="100%" class="content_view">
	<tr>
		<td>user id</td>
        <td colspan="4">
            
        </td>
	</tr>
	<tr>
		<td>昵称</td>
        <td colspan="4">
           
        </td>
	</tr>
	<tr>
		<td>内容</td>
        <td colspan="4">
           
        </td>
	</tr>
	<tr>
		<td>省份</td>
        <td colspan="4">
           
        </td>
	</tr>
	<tr>
		<td>城市</td>
		<td><input type="text" name="number" id="number"  class="input-text" value=""></td>
    </tr>
	</table>
	</div>
	</form>
<?php endif;?>