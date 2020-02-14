<?php
function sms_status($status = 0,$return_array = 0) {
	$array = array(
			'0'=>'发送成功',
			'30'=>'密码错误',
			'40'=>'账号不存在',
			'41'=>'余额不足',
			'42'=>'帐号过期',
			'43'=>'IP地址限制',
			'50'=>'内容含有敏感词',
			'51'=>'手机号码不正确',
			'-1'=>'参数不全'
		);
	return $return_array ? $array : $array[$status];
}

function checkmobile($mobilephone) {
		$mobilephone = trim($mobilephone);
		if(preg_match("/^13[0-9]{1}[0-9]{8}$|15[01236789]{1}[0-9]{8}$|18[01236789]{1}[0-9]{8}$/",$mobilephone)){  
 			return  $mobilephone;
		} else {    
			return false;
		}
		
}

function get_smsnotice($type = '') {
	$url = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
	$urls = base64_decode('aHR0cDovL3Ntcy5waHBpcC5jb20vYXBpLnBocD9vcD1zbXNub3RpY2UmdXJsPQ==').$url."&type=".$type;
	$content = pc_file_get_contents($urls,5);
	if($content) {
		$content = json_decode($content,true);
		if($content['status']==1) {
			return strtolower(CHARSET)=='gbk' ?iconv('utf-8','gbk',$content['msg']) : $content['msg'];
		}
	}
	$urls = base64_decode('aHR0cDovL3Ntcy5waHBjbXMuY24vYXBpLnBocD9vcD1zbXNub3RpY2UmdXJsPQ==').$url."&type=".$type;
	$content = pc_file_get_contents($urls,3);
	if($content) {
		$content = json_decode($content,true);
		if($content['status']==1) {
			return strtolower(CHARSET)=='gbk' ?iconv('utf-8','gbk',$content['msg']) : $content['msg'];
		}
	}
	return '<font color="red">短信通服务器无法访问！您将无法使用短信通服务！</font>';
}

function sendsms($mobile, $send_txt, $tplid = 1, $id_code = '', $siteid=1) {

	pc_base::load_app_class('smsapi', 'sms', 0); //引入smsapi类
	$sms_setting = getcache('sms','sms');
	$sms_uid = $sms_setting[$siteid]['userid'];//短信接口用户ID
	$sms_pid = $sms_setting[$siteid]['productid'];//产品ID
	$sms_passwd = $sms_setting[$siteid]['sms_key'];//32位密码

	$smsapi = new smsapi($sms_uid, $sms_pid, $sms_passwd); //初始化接口类
	$mobile = explode(',',$mobile);
	
	$code = $smsapi->send_sms($mobile, $send_txt, 0, CHARSET,$id_code,$tplid,1); //发送短信
	if($code==0) {
		return 0;
	} else {
		return sms_status($code,1);
	}
}