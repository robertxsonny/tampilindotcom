<?php
$path = $_SERVER ['DOCUMENT_ROOT'];
$mailpath = $path . '/functions/class.phpmailer.php';
$smtp = $path . '/functions/class.smtp.php';
include ($mailpath);
include ($smtp);
date_default_timezone_set ( "Asia/Jakarta" );
// setlocale (LC_TIME, 'INDONESIA');
setlocale ( LC_TIME, 'id-ID' );
function generateHtml($name, $email, $content) {
	$html = '<html><head></head><head><link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
</head><body><div style="background-color: #2F2F3B; padding-top: 2%; padding-left: 3%; padding-bottom: 2%">
	<a href="http://tampilin.id" target="_blank"><img src="http://tampilin.id/images/tampilin_white_red.png" height="40"></a>
</div>
<div style="padding-left: 3%; display: inline-block;">
	<h2 style="font-size: 18px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: bold">Halo Rendy Rian Sandhika,</h2>
	<p style="font-size: 16px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: lighter;">Kamu mendapat pesan baru dari website kamu di <a href="http://rendyrians.com">www.rendyrians.com</a> dengan isi sebagai berikut:</p>
	<p style="font-size: 14px; font-family: &quot;Lato&quot;,Arial,sans-serif; color: black; font-weight: lighter; padding-left: 20px;">
<table>
	<tbody><tr>
		<td>Nama:</td>
		<td>' . $name .'</td>
	</tr>
		<tr>
		<td>Email:</td>
		<td>' . $email .'</td>
	</tr>	<tr>
		<td>Pesan:</td>
		<td>' . $content .'</td>
	</tr>
</tbody></table>
</p><p style="font-size: 16px; font-family: \'Lato\', Arial, sans-serif; color: black; font-weight: lighter;">Segera follow-up pesan dari pelangganmu atau kamu bisa lakukan balas otomatis dengan upgrade layanan ke Tampilin.id Enterprise!</p>
</div>


<div style="background-color: #2F2F3B; padding-top: 2%; padding-left: 3%; font-family: \'Lato\', Arial, sans-serif; color: white; font-weight: lighter; font-size: 14px; padding-bottom: 2%; text-align: center;">
	Copyright © 2016 <a href="http://tampilin.id" target="_blank" style="color: white;">Tampilin.id</a>
</div>
</body></html>';
	return $html;
}

if (isset ( $_POST ['jsondata'] )) {
	$obj = $_POST ['jsondata'];
	$data = json_decode ( $obj );
	if (count ( $data ) > 0) {
		$name = $data->name;
		$email = $data->email;
		$content = $data->content;
		
		$mail = new PHPMailer ();
		// $mail->IsSMTP();
		$mail->SMTPDebug = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "tampilin.id";
		$mail->Port = 465;
		$mail->SMTPAuth = true;
		$mail->Username = "auto@tampilin.id";
		$mail->Password = "pass@word12";
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->Subject = "Automatic Email From Your Personal Website";
		/* $mail->AddAddress ( "rendyrian_s@yahoo.com", "Rendy Rian Sandhika" ); */
		$mail->AddAddress ( "theo@tampilin.id", "Theodorus Y." );
		$mail->Body = generateHtml($data->name, $data->email, $data->content);
		if ($mail->Send ()) {
			ob_end_clean ();
			echo true;
		} else {
			echo $mail->ErrorInfo;
		}
		return;
	} else
		echo false;
	return;
} else
	echo false;
return;
?>