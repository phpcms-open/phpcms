<?php 
	defined('IN_ADMIN') or exit('No permission resources.');
	include $this->admin_tpl('header', 'admin');
?>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>formvalidator.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>formvalidatorregex.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>content_addtop.js"></script>
<script type="text/javascript">
  var charset = '<?php echo CHARSET?>';
  $(document).ready(function() {
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#mobile").formValidator({onshow:"<?php echo L('input').L('mobile')?>",onfocus:"<?php echo L('one_msg').L('mobile')?>"}).inputValidator({min:11,max:110000,onerror:"<?php echo L('one_msg').L('mobile')?>"});
  });
</script>
<div class="pad-10">
<form name="smsform" action="index.php?m=sms&c=sms&a=exportmobile" method="post" >
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
		<td>
		<div class="explain-col">		
			<?php echo L('regtime')?>：
			<?php echo form::date('start_time', $start_time)?>-
			<?php echo form::date('end_time', $end_time)?>

			<?php echo form::select($modellist, $modelid, 'name="modelid"', L('member_model'))?>
			<?php echo form::select($grouplist, $groupid, 'name="groupid"', L('member_group'))?>
			<input type="submit" name="search" class="button" value="<?php echo L('exportmobile')?>" />
		</div>
		</td>
		</tr>
    </tbody>
</table>
</form>
<form name="dosubmit" action="?m=sms&c=sms&a=sms_sent" method="post" id="myform">
<table width="100%" class="table_form">
<tr>
<td  width="120">发送号码  <font color="#C0C0C0">（每行一个号码）</font></td> 
<td><textarea name="mobile">

</textarea></td>
</tr>
<tr>
</br>
<td  width="120">发送内容  <font color="#C0C0C0">（短信群发内容）</font></td> 
<td><textarea name="msg">

</textarea></td>
</tr>
</table>
<div class="bk15"></div>
<input name="dosubmit" type="submit" value="<?php echo L('submit')?>" class="button" id="dosubmit">
</form>
<div class="common-form">
<!--<iframe name="sms_qf" id="sms_qf" src="<?php echo $show_qf_url;?>" frameborder="false" scrolling="auto" style="border:none" width="100%" height="auto" allowtransparency="true"></iframe>-->
</form>
</div>

</body>
</html>