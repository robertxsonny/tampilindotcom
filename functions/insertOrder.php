<?php
$path = $_SERVER ['DOCUMENT_ROOT'];
$connection = $path.'/functions/dbConnection.php';
$email = $path.'/functions/mailGenerator.php';
$mailpath = $path.'/functions/class.phpmailer.php';
$smtp = $path.'/functions/class.smtp.php';
include($connection);
include($email);
include($mailpath);
include($smtp);
date_default_timezone_set("Asia/Jakarta");
setlocale (LC_TIME, 'INDONESIA');
//setlocale(LC_TIME, 'id-ID');
if(isset($_POST['jsondata'])){
	$obj = $_POST['jsondata'];
	$conn = new mysqli($GLOBALS ['servername'], $GLOBALS ['dbuser'], $GLOBALS ['dbpass'], $GLOBALS ['dbname']);
	if($conn->connect_error)
		die('Connection failed: ' . $conn->connect_error);
	
	$data = json_decode ( $obj );
	if (count ( $data ) > 0) {
		$name = $data->name;
		$email = $data->email;
		$phone = $data->phone;
		$web_package = $data->web_package;
		$domain = $data->domain;
		$doc_link = "";
		$data->has_doc = false;
		
		if (isset($_FILES['document']))
		{
			$file_name = $_FILES['document']['name'];
			$files = explode(".",$file_name);
			$ext = end($files);
			/* if ($ext == "doc" || $ext == "docx" || $ext == "pdf" || $ext == "zip" )
			{ */
				$source = $_FILES['document']['tmp_name'];
				$link = "/documents/".$file_name;
				$target = $_SERVER ['DOCUMENT_ROOT'] . $link;
				if (move_uploaded_file($source, $target))
					$doc_link = $link;
			/* } */
		}
		
		$order_code = "";
		
		$search = "SELECT * FROM `order_list` ORDER BY `id` DESC LIMIT 1";
		$result = $conn->query($search);
		if ($result->num_rows > 0)
		{
			while($rand = $result->fetch_assoc()){
				$randstr = strtoupper(base_convert((string)((int)($rand['id']) + 1000001),10,36));
				if (strlen($randstr) < 10)
					$order_code = str_pad($randstr,10,"0",STR_PAD_LEFT);
				else
					$order_code = substr($randstr, -10);
				break;
			}
		}

		$data->code = $order_code;
		$data->date = strftime("%d %B %Y", time());
		

		$query = "INSERT INTO `order_list` (`kode`, `tanggal`, `nama`, `telepon`, `email`, `paket`, `domain`, `link_dokumen`) ";
		$query .= "VALUES ('".$order_code."', '".date('Y-m-d H:i:s')."', '".$name."', '".$phone."','".$email."',  ".$web_package.", '".$domain."', '".$doc_link."')";
		$res = $conn->query($query);
		if($res === false)
			echo false;
		else
		{
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
			$mail->Subject = "Order #".$order_code.": Pemesanan Website Baru";
			$mail->AddAddress($email, $name);
			$mail->IsHTML(true);
			$mail->Body = generateOrderMailForUser($data);
			if ($mail->Send())
			{
				$mail2 = new PHPMailer();
				//$mail2->IsSMTP();
				$mail2->SMTPDebug = true;
				$mail2->SMTPSecure = 'ssl';
				$mail2->Host = "tampilin.id";
				$mail2->Port = 465;
				$mail2->SMTPAuth = true;
				$mail2->Username = "auto@tampilin.id";
				$mail2->Password = "pass@word12";
				$mail2->From = "auto@tampilin.id";
				$mail2->FromName = "<no-reply> Tampilin Automated Email";
				$mail2->Subject = "Order #".$order_code.": Pemesanan Website Baru";
				$mail2->AddAddress("info@tampilin.id", "Info Tampilin");
				$mail2->IsHTML(true);
				$mail2->Body = generateOrderMailForAdmin($data);
				if ($mail2->Send())
				{
					ob_end_clean();
					echo true;					
				}
				else
				{
					echo $mail2->ErrorInfo;
				}
			}
			else
			{
				echo $mail->ErrorInfo;
			}
				
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