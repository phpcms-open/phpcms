<?php 
	defined('IN_ADMIN') or exit('No permission resources.');
	include $this->admin_tpl('header','admin');
?>
<div class="pad_10">
<div class="table-list">
<form name="smsform" action="" method="get" >
<input type="hidden" value="sms" name="m">
<input type="hidden" value="sms" name="c">
<input type="hidden" value="init" name="a">
<input type="hidden" value="<?php echo $_GET['menuid']?>" name="menuid">
<div class="explain-col search-form">
短信模块默认使用<a href="http://www.smsbao.com" target="_blank" style="font-weight:bold;color:red;">短信宝</a>接口，
还没有短信宝账户，请点击<a href="http://smsbao.com/reg" target="_blank" style="font-weight:bold;color:red;">免费注册</a>，
短信宝客服热线：400-716-3021，或联系短信宝<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODA0NjAyMV8yNTU0MzFfNDAwMDA5MDQ2NV8yXw" target="_blank" style="font-weight:bold;color:red;">在线客服</a>
</br>
说明：欲购买1W条以上的短信套餐以及包月套餐用户，请咨询<a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=XzkzODA0NjAyMV8yNTU0MzFfNDAwMDA5MDQ2NV8yXw" target="_blank" style="font-weight:bold;color:red;">在线客服</a>
</br>
备注：短信宝官网（http://www.smsbao.com），短信宝技术交流群：188145230
</div>
</form>
<div class="btn text-l">
<span class="font-fixh green">您当前账户为：<?php echo $this->smsapi->userid?>，短信宝账户剩余短信条数：<?php echo $smsinfo_arr?></span>
</div><br>

<br>
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
            <th width="5%" align="center"><?php echo L('product_id')?></th>
            <th width="20%" align="left"><?php echo L('product_name')?></th>
            <th width="30%" align="left"><?php echo L('product_description')?></th>
            <th width="10%" align="left"><?php echo L('totalnum')?></th>
            <th width="10%" align="left"><?php echo L('give_away')?></th>
            <th width="10%" align="left"><?php echo L('product_price').L('yuan')?></th>
            <th width="10%" align="left"><?php echo L('buy')?></th>
            </tr>
        </thead>
    <tbody>
	<tr>
		<td width="10%" align="center">1</td>
		<td width="10%" align="left">50条短信</td>
		<td width="10%" align="left">50条短信</td>
		<td width="10%" align="left">50</td>
		<td width="10%" align="left">0</td>
		<td width="10%" align="left">5</td>
		<td width="10%" align="left"><a href="http://smsbao.com/member/product/list.jhtml" target="_blank">购买</a></td>
	</tr>
	<tr>
		<td width="10%" align="center">2</td>
		<td width="10%" align="left">500条短信</td>
		<td width="10%" align="left">500条短信</td>
		<td width="10%" align="left">500</td>
		<td width="10%" align="left">0</td>
		<td width="10%" align="left">40</td>
		<td width="10%" align="left"><a href="http://smsbao.com/member/product/list.jhtml" target="_blank">购买</a></td>
	</tr>
	<tr>
		<td width="10%" align="center">3</td>
		<td width="10%" align="left">2000条短信</td>
		<td width="10%" align="left">2000条短信</td>
		<td width="10%" align="left">2000</td>
		<td width="10%" align="left">0</td>
		<td width="10%" align="left">150</td>
		<td width="10%" align="left"><a href="http://smsbao.com/member/product/list.jhtml" target="_blank">购买</a></td>
	</tr>
	<tr>
		<td width="10%" align="center">4</td>
		<td width="10%" align="left">5000条短信</td>
		<td width="10%" align="left">5000条短信</td>
		<td width="10%" align="left">5000</td>
		<td width="10%" align="left">0</td>
		<td width="10%" align="left">375</td>
		<td width="10%" align="left"><a href="http://smsbao.com/member/product/list.jhtml" target="_blank">购买</a></td>
	</tr>
	<tr>
		<td width="10%" align="center">5</td>
		<td width="10%" align="left">10000条短信</td>
		<td width="10%" align="left">10000条短信</td>
		<td width="10%" align="left">10000</td>
		<td width="10%" align="left">0</td>
		<td width="10%" align="left">700</td>
		<td width="10%" align="left"><a href="http://smsbao.com/member/product/list.jhtml" target="_blank">购买</a></td>
	</tr>
    </tbody>
    </table>
<div class="explain-col search-form">
开启会员注册短信验证方法：后台->用户->会员模块配置->手机强制验证方式 选择 <font color="red">是</font>
</div>
</div>
</div>
<br>

<br>
<br>
<br>
</body>
</html>