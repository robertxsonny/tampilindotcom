<?php
$path = $_SERVER ['DOCUMENT_ROOT'];
$email = $path.'/functions/mailGenerator.php';
$mailpath = $path.'/functions/class.phpmailer.php';
$smtp = $path.'/functions/class.smtp.php';
include($connection);
include($email);
include($mailpath);
include($smtp);
date_default_timezone_set("Asia/Jakarta");
//setlocale (LC_TIME, 'INDONESIA');
setlocale(LC_TIME, 'id-ID');
if(isset($_POST['jsondata'])){
	$obj = $_POST['jsondata'];
	
	$data = json_decode ( $obj );
	if (count ( $data ) > 0) {
		$name = $data->name;
		$email = $data->email;
		$content = $data->content;
		
		$mail = new PHPMailer();
		//$mail->IsSMTP();
		$mail->SMTPDebug = true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host = "tampilin.id";
		$mail->Port = 465;
		$mail->SMTPAuth = true;
		$mail->Username = "auto@tampilin.id";
		$mail->Password = "pass@word12";
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->Subject = "Automatic Email From TheKucing Visitors";
		$mail->AddAddress("elquellora@gmail.com", "Esty Swandana");
		$mail->Body = generateOrderMailForUser($data);
		if ($mail->Send())
		{
			ob_end_clean();
			echo true;					
		}
		else
		{
			echo $mail->ErrorInfo;
		}
		return;
	}
	else
		echo false;
	return;
}
else 
	echo false;
return;
?>