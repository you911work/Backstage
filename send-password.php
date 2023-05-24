<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include "PHPMailer/Exception.php";
include "PHPMailer/PHPMailer.php";
include "PHPMailer/SMTP.php";

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; //SMTP服務器
$mail->Port = 465; //SSL預設Port 是465, TLS預設Port 是587
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //使用SSL, 如果是TLS 請改為 PHPMailer::ENCRYPTION_STARTTLS
$mail->Username = "you911work@gmail.com"; // 這裡填寫你的SMTP登入帳號, 例如 your.gmail.name@gmail.com 則填寫your.gmail.name
$mail->Password = "1qaz!QAZ911"; //這裡填寫你的SMTP登入密碼. 即是Gmail的密碼

$mail->From = "you911work@gmail.com"; //設定寄件人電郵
$mail->FromName = "you911work@gmail.com"; //設定寄件人名稱
$mail->Subject = "系統測試"; //設定郵件主題
$mail->Body = "密碼發送";  //設定郵件內容
$mail->IsHTML(true);  //設定是否使用HTML格式
$mail->addAddress("you911kimo700919@gmail.com", "person A"); //設定收件人電郵及名稱
$mail->addCC("personC@gmail.com", "person C"); //設定收件人電郵及名稱(CC)
$mail->addBCC("personD@gmail.com", "person D"); //設定收件人電郵及名稱(BCC)
$mail->addAttachment("image1.jpg", "picture.jpg"); //設定附件, 對方會看到附件名稱為 picture.jpg
if(!$mail->Send()){
  echo "Mailer error: " . $mail->ErrorInfo;
}
else{
  echo "Email sent";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>發送密碼</title>
	
	<!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="logo/fav.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="logo/fav.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="logo/fav.png">
    <!-- Standard iPad Touch Icon--> 
    <link rel="apple-touch-icon" sizes="72x72" href="logo/fav.png">
    <!-- Standard iPhone Touch Icon--> 
    <link rel="apple-touch-icon" sizes="57x57" href="logo/fav.png">
	
	<!-- Styles -->
    <link href="assets/fontAwesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/nixon.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

	<div class="Nixon-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<div class="login-content">
						<div class="login-logo">
							<h2><img id="" src="logo/logoSmall.png" style="width:50px;height:43px;"/>發送密碼</h2>
						</div>
						<div class="login-form">
							<h4></h4>
							<form method="post" action="send-password.php">
						        <input type="hidden" name="sendMail" value="comMail">
								<button type="submit" class="btn btn-primary btn-flat m-b-15">確認發送密碼</button>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

</html>