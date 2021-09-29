<?php

/*Nama  : Fina Maulidiyah N
  NIM   : 19051397034
  Prodi : D4 MI 19A*/

require_once 'vendor/autoload.php';
require 'functions.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('finamnabila@gmail.com')
  ->setPassword('xxx');

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['john@doe.com' => 'John Doe'])
  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message); 

function sendVerificationEmail($email, $token)
{
	global $mailer;

	$body = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verify email</title>
</head>
<body>
	<div class="wrapper">
		<p>
			Hello,
			Terima kasih sudah registrasi pada website kami. Klik link dibawah ini untuk verifikasi email anda.
		</p>
		<a href="http://localhost/registrasi/verify.php?token=' . $token .'">
			Verify your email address
		</a>
	</div>

</body>
</html>';

	// Create a message
	$message = (new Swift_Message('Verify your email address'))
	  ->setFrom(['finamnabila@gmail.com'])
	  ->setTo($email)
	  ->setBody($body, 'text/html');

	// Send the message
	$result = $mailer->send($message); 
}

function sendPasswordResetLink($email, $token) {
		global $mailer;

	$body = '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Verify email</title>
</head>
<body>
	<div class="wrapper">
		<p>
			Hello,
			Klik link dibawah ini untuk reset password anda.
		</p>
		<a href="http://localhost/registrasi/resetpassword.php?token=' . $token .'">
			Reset your password
		</a>
	</div>

</body>
</html>';

	// Create a message
	$message = (new Swift_Message('Reset your password'))
	  ->setFrom(['finamnabila@gmail.com'])
	  ->setTo($email)
	  ->setBody($body, 'text/html');

	// Send the message
	$result = $mailer->send($message);
}
?>