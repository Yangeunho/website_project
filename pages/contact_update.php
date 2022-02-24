<?php
include_once('./_common.php');
include_once(G5_LIB_PATH.'/mailer.lib.php');
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
exit;
*/

// 추가적인 보안이 필요하시면 토큰, 리퍼러등 다른 추가적인 방법을 사용해주세요.

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$con = $_POST['message'];
$agree_1 = $_POST['agree_1'];
$agree_2 = $_POST['agree_2'];

if($agree_1 != "1" ){
	$uri = G5_URL."/pages/contact.php";
	alert('개인정보처리방침에 동의 해주세요.',$uri);
	
}

if($agree_2 != "1" ){
	$uri = G5_URL."/pages/contact.php";
	alert('이용약관에 동의 해주세요.',$uri);
}

if($name && $email && $tel && $con)
{
	$subject = '홈페이지에 문의가 등록되었습니다.';
	$cf_name = $config['cf_admin_email_name'];
	$to = $config['cf_admin_email'];
	$content = "
	담당자 : $name
	담당자 이메일 : $email
	전화번호 : $tel
	문의내용 : $con
	".G5_TIME_YMDHIS;
	mailer($cf_name, $config['cf_admin_email'], $to, $subject, $content);
	alert('문의가 등록되었습니다.\n빠른시간 안에 연락 드리겠습니다. 감사합니다.',G5_URL);
}else{
	$uri = G5_URL."/pages/contact.php";
	alert('모든 내용을 빠짐없이 입력 해주세요.',$uri);
}



?>