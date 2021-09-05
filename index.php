<?php
// index phpmail without contact form all changes made in the code
// include the file
include 'phpmailer/phpmailerAutoload.php';
$mail = new PHPMailer();
// set host
$mail-> Host ="smtp.gmail.com";// you can use any address other than gmail
// enable smtp
$mail-> IsSMTP();
//set debog info
$mail-> SMTPDebug = 2; // you can also set it to 1 if you like
//set authentication
$mail-> SMTPAuth = true;
//set login details for gmail acconut from which you want to send mail from
$mail-> UserName = "efefbi@yahoo.com";
$mail -> Password = "";
//set type of security
$mail-> SMTPSecure = "tsl";// or tsl or blank if you dont have ssl or tsl
// set port
$mail-> Port = 587; // 465 for ssl and for tsl is 587 or 80 if no ssl or tls
// set subject
$mail -> Subject = " write subject here";
// set HTML to true. this enable to write html in the body
$mail -> IsHTML(isHTML: 'true');
// set attachment
$mail-> addAttachment('path of the file','name of the file');
//unable the attachment below if you want to add another and so on
// $mail-> addAttachment(path:'path of the file',Name:'name of the file');
//set body
$mail -> Body = "Dear client<br><p>This is Gab find attachment below</p>";
//set alternative body that is free from the HTML. it uses plain texts
//$mail-> AltBody= "";
//set who is sending the email
$mail-> setForm('the email address','name of the sender');
//set reciever email
$mail-> addAddress('email you want to send to here');
// set reply to
$mail -> addReplyTo("the email you want the reply to go into");
// set copy
$mail -> addCC('cc@efefbi@yahoo.com');
$mail-> addBCC('bc@gabone911@yahoo.com');
//send email
if($mail-> Send()){
	echo'email is sent';
}else{
	$mail-> ErrorInfo;
}


?>