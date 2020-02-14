<?php 
	defined('IN_ADMIN') or exit('No permission resources.');
	include $this->admin_tpl('header', 'admin');
?>
<div class="pad-10">
<div class="common-form">
<form name="myform" action="?m=sms&c=sms&a=sms_setting" method="post" id="myform">
<table width="100%" class="table_form">
<tr>
<td  width="120"><?php echo L('sms_enable')?></td> 
<td><input name="setting[sms_enable]" value="1" type="radio" id="sms_enable" <?php if($this->sms_setting[sms_enable] == 1) {?>checked<?php }?>> <?php echo L('open')?>  
<input name="setting[sms_enable]" value="0" type="radio" id="sms_enable" <?php if($this->sms_setting[sms_enable] == 0) {?>checked<?php }?>> <?php echo L('close')?></td>
</tr>
<tr>
<td  width="120">短信宝用户名  <font color="#C0C0C0"></font></td> 
<td><input type="text" name="setting[userid]" size="20" placeholder="填写你在短信宝注册的用户名" value="<?php echo $this->sms_setting[userid]?>" id="userid"></td>
</tr>
<tr>
<td  width="120">短信宝密码 <font color="#C0C0C0"></font></td> 
<td><label><input type="input" id="sms_key" name="setting[sms_key]" value="<?php echo $this->sms_setting[sms_key]?>" size="50">
<input type="hidden" name="pc_hash" value="<?php echo $_GET['pc_hash'];?>" size="50"></label></td>
</tr>
<tr>
<td  width="120">短信签名 <font color="#C0C0C0"></font></td> 
<td><input type="text" name="setting[productid]" size="20" placeholder="填写你所发送短信的签名" value="<?php echo $this->sms_setting[productid]?>" id="productid"></td>
</tr>


</table>
<div class="bk15"></div>
<input name="dosubmit" type="submit" value="<?php echo L('submit')?>" class="button" id="dosubmit">
</form>
</div>
</body>
</html>