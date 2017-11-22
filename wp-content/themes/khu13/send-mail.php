<?php
if (isset($_POST["email"])) {
  if (isset($_POST["survey"]))
	   $survey = implode(",&nbsp;", $_POST["survey"]);
	$first_name = trim($_POST["first_name"]);
	$last_name = trim($_POST["last_name"]);
  $full_name = trim($_POST["full_name"]);
	$email = trim($_POST["email"]);
	$comment = trim(nl2br(strip_tags($_POST["comment"])));
	$error = array();
	if(empty($survey)){
		$error['survey'] = 'Xin hãy chọn sản phẩm';
	}
	if(empty($first_name) || empty($last_name)){
		$error['name'] = 'Xin hãy nhập Họ & Tên';
	}
  if(empty($full_name)){
		$error['name'] = 'Xin hãy nhập họ tên';
	}
  if(empty($tel) || !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $tel)){
		$error['tel'] = 'Xin hãy nhập số điện thoại';
	}
	if(empty($email) || !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
		$error['email'] = 'Xin hãy nhập địa chỉ e-mail';
	}
	if(empty($comment)){
		$error['comment'] = 'Vui lòng để lại tin nhắn';
	}
	if(empty($error)){
		$ToEmail = 'thanhloansqt@gmail.com';
		$EmailSubject = 'Site Contact Us';
		$mailheader = "MIME-Version: 1.0\r\n" ;
		$mailheader .= "From: ".$email."\r\n";
		$mailheader .= "Reply-To: ".$email."\r\n";
		$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$mailheader .= "X-Priority: 1 (Highest)\r\n";
		$mailheader .= "X-MSMail-Priority: High\r\n";
		$mailheader .= "Importance: High\r\n";
		$MESSAGE_BODY = "Sản Phẩm:&nbsp;".$survey."<br/>";
		$MESSAGE_BODY .= "Họ Và Tên:&nbsp;".$last_name."&nbsp;".$first_name."<br/>";
		$MESSAGE_BODY .= "E-mail:&nbsp;".$email."<br/>";
		$MESSAGE_BODY .= "Tin Nhắn:&nbsp;".$comment."<br/>";
		$result = mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);
		if($result){
			exit(header('Location: '.'/contact/thanks.php'));
		}
	}
}
