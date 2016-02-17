<?php
$path = $_SERVER ['DOCUMENT_ROOT'];
include ($path . '/functions/launchingMailGenerator.php');
include ($path .'/functions/class.phpmailer.php');
$root = $_SERVER ['DOCUMENT_ROOT'];
$servername = 'localhost';
$dbname = 'tampilin';
$dbuser = 'theodorus';
$dbpass = 'pass@word1';

$conn = new mysqli ( $GLOBALS ['servername'], $GLOBALS ['dbuser'], $GLOBALS ['dbpass'], $GLOBALS ['dbname'] );
if ($conn->connect_error)
	die ( 'Connection failed: ' . $conn->connect_error );
$search = "SELECT * FROM `newsletter`";
$result = $conn->query ( $search );
if ($result->num_rows > 0) {
	while($item = $result->fetch_assoc()){
		$email = 'theo@mic.ms';
		$mail = new PHPMailer();
		//$mail->IsSMTP();
		$mail->SMTPDebug = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "tampilin.id";
		$mail->Port = 465;
		$mail->SMTPAuth = true;
		$mail->Username = "auto@tampilin.id";
		$mail->Password = "pass@word12";
		$mail->From = "auto@tampilin.id";
		$mail->FromName = "<no-reply> Tampilin Automated Email";
		$mail->Subject = "Tampilin.id is now here!";
		$mail->AddAddress($email);
		$mail->IsHTML(true);
		$mail->Body = generateHtml();
		$mail->Send();
	}
}

function generateHtml(){
	$html = '<html>
<link href="https://fonts.googleapis.com/css?family=Lato:400,300"
	rel="stylesheet" type="text/css">
<div
	style="background-color: #2F2F3B; padding-top: 2%; padding-left: 3%; padding-bottom: 2%">
	<a href="http://tampilin.id" target="_blank"><img
		src="http://tampilin.id/images/tampilin_white_red.png" height="40" /></a>
</div>
<div style="padding-left: 3%; display: inline-block;">
	<h2
		style="font-size: 18px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: bold">Tampilin.id
		is now here!</h2>
	<p
		style="font-size: 16px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: lighter;">We
		are proud to announce that Tampilin.id is now available for you, who
		like to stand out from the crowd.</p>
	<p
		style="font-size: 14px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: lighter;">In
		our first month, we are glad to offer you a promo, which is valid
		until February 26, 2016: Create your own website under 24 hours only
		for IDR 200K!</p>
</div>
<div style="padding-left: 3%; padding-right: 3%;">
	<div
		style="margin-top: 2%; display: block; min-width: 100%; min-height: 10%; border-radius: 10px; text-align: center; padding-bottom: 1%; padding-right: 3%;">
		<img src="http://tampilin.id/images/LaunchAds_noon.png"
			style="max-width: 100%; border-radius: 20px;" />
	</div>
	<p
		style="font-size: 14px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: lighter;">
		We also have another special offer for you...</p>
	<div
		style="margin-top: 2%; display: block; min-width: 100%; min-height: 10%; border-radius: 10px; background-color: #FF6F6F; text-align: center; padding-top: 1%; padding-bottom: 1%;">
		<img src="http://tampilin.id/images/set 5 1.png" height="50" />
		<p
			style="font-size: 14px; font-family: \'Lato\', Arial, sans-serif; color: white; font-weight: bold;">
			<a style="color: white;" href="http://facebook.com/tampilin"
				target="_blank">Check our offer here!</a>
		</p>
	</div>
	<div
		style="margin-top: 2%; display: block; min-width: 100%; min-height: 10%; border-radius: 10px; background-color: #FF6F6F; text-align: center; padding-top: 1%; padding-bottom: 1%;">
		<img src="http://tampilin.id/images/set-5-5.gif" height="45" />
		<p
			style="font-size: 14px; font-family: \'Lato\', Arial, sans-serif; color: white; font-weight: bold;">
			<a style="color: white;" href="http://tampilin.id" target="_blank">Order
				your website at www.tampilin.id</a>
		</p>
	</div>
</div>
<div style="padding-left: 3%; display: inline-block;">
	<p
		style="font-size: 14px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: lighter;">
		We hope to see you soon on your first website!</p>
</div>
<div
	style="background-color: #2F2F3B; padding-top: 2%; padding-left: 3%; font-family: \'Lato\', Arial, sans-serif; color: white; font-weight: lighter; font-size: 14px; padding-bottom: 2%; text-align: center;">
	Copyright &#169; 2016 <a href="http://tampilin.id" target="_blank"
		style="color: white;">Tampilin.id</a>
</div>
</html>';
	return $html;
}
?>

<html>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300'
	rel='stylesheet' type='text/css'>
<div
	style="background-color: #2F2F3B; padding-top: 2%; padding-left: 3%; padding-bottom: 2%">
	<a href="http://tampilin.id" target="_blank"><img
		src="http://tampilin.id/images/tampilin_white_red.png" height="40" /></a>
</div>
<div style="padding-left: 3%; display: inline-block;">
	<h2
		style="font-size: 18px; font-family: 'Lato', Arial, sans-serif; color: black; font-weight: bold">Tampilin.id
		is now here!</h2>
	<p
		style="font-size: 16px; font-family: 'Lato', Arial, sans-serif; color: black; font-weight: lighter;">We
		are proud to announce that Tampilin.id is now available for you, who
		like to stand out from the crowd.</p>
	<p
		style="font-size: 14px; font-family: 'Lato', Arial, sans-serif; color: black; font-weight: lighter;">In
		our first month, we are glad to offer you a promo, which is valid
		until February 26, 2016: Create your own website under 24 hours only
		for IDR 200K!</p>
</div>
<div style="padding-left: 3%; padding-right: 3%;">
	<div
		style="margin-top: 2%; display: block; min-width: 100%; min-height: 10%; border-radius: 10px; text-align: center; padding-bottom: 1%; padding-right: 3%;">
		<img src="http://tampilin.id/images/LaunchAds_noon.png"
			style="max-width: 100%; border-radius: 20px;" />
	</div>
	<p
		style="font-size: 14px; font-family: 'Lato', Arial, sans-serif; color: black; font-weight: lighter;">
		We also have another special offer for you...</p>
	<div
		style="margin-top: 2%; display: block; min-width: 100%; min-height: 10%; border-radius: 10px; background-color: #FF6F6F; text-align: center; padding-top: 1%; padding-bottom: 1%;">
		<img src="http://tampilin.id/images/set 5 1.png" height="50" />
		<p
			style="font-size: 14px; font-family: 'Lato', Arial, sans-serif; color: white; font-weight: bold;">
			<a style="color: white;" href="http://facebook.com/tampilin"
				target="_blank">Check our offer here!</a>
		</p>
	</div>
	<div
		style="margin-top: 2%; display: block; min-width: 100%; min-height: 10%; border-radius: 10px; background-color: #FF6F6F; text-align: center; padding-top: 1%; padding-bottom: 1%;">
		<img src="http://tampilin.id/images/set-5-5.gif" height="45" />
		<p
			style="font-size: 14px; font-family: 'Lato', Arial, sans-serif; color: white; font-weight: bold;">
			<a style="color: white;" href="http://tampilin.id" target="_blank">Order
				your website at www.tampilin.id</a>
		</p>
	</div>
</div>
<div style="padding-left: 3%; display: inline-block;">
	<p
		style="font-size: 14px; font-family: 'Lato', Arial, sans-serif; color: black; font-weight: lighter;">
		We hope to see you soon on your first website!</p>
</div>
<div
	style="background-color: #2F2F3B; padding-top: 2%; padding-left: 3%; font-family: 'Lato', Arial, sans-serif; color: white; font-weight: lighter; font-size: 14px; padding-bottom: 2%; text-align: center;">
	Copyright &#169; 2016 <a href="http://tampilin.id" target="_blank"
		style="color: white;">Tampilin.id</a>
</div>
</html>
