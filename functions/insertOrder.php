<?php
$path = $_SERVER ['DOCUMENT_ROOT'];
$connection = $path.'/functions/dbConnection.php';
$email = $path.'/functions/mailGenerator.php';
$mailpath = $path.'/functions/class.phpmailer.php';
include($connection);
include($email);
include($mailpath);
setlocale(LC_ALL, 'id_ID');
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
		
		if (isset($_FILES['document']))
		{
			$file_name = $_FILES['document']['name'];
			$ext = end(explode(".",$file_name));
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
		
		do 
		{
			$search = "SELECT * FROM `order_list` ORDER BY `id` DESC LIMIT 1";
			$result = $conn->query($search);
			if ($result->num_rows = 0)
			{
				while($rand = $result->fetch_assoc()){
					$order_code = strtoupper(base_encode(((int)$rand['id'] + 1000001),10,36));
					if (str_len($order_code) < 10)
						$order_code = pad_str($order_code,10,"0");
					else if (str_len($order_code) > 10)
						$order_code = substr($order_code, -10);
				}
			}
		}
		while(str_len($order_code) <= 0);	
		
		$data->code = $order_code;
		$data->date = strftime('%d %B %Y');

		$query = "INSERT INTO `order_list` (`kode`, `tanggal`, nama`, `telepon`, `email`, `paket`, `domain`, `link_dokumen`)
		VALUES ('".$order_code."', '".date('Y-m-d H:i:s')."', '".$name."', '".$phone."','".$email."',  ".$web_package.", '".$domain."', '".$doc_link."')";
		$res = $conn->query($query);
		if($res === false)
			echo false;
		else
		{
			$mail = new PHPMailer ();
			$mail->IsSMTP();
			$mail->SMTPSecure = 'ssl';
			$mail->Host = "tampilin.id";
			$mail->SMTPDebug = 2;
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->Username = 'auto@tampilin.id';
			$mail->Password = 'pass@word12';
			$mail->SetFrom( "auto@tampilin.id", "<no-reply> Tampilin Automated Email" );
			$mail->Subject = "Order #".$order_code.": Pemesanan Website Baru";
			$mail->AddAddress($email);
			$mail->MsgHTML(generateOrderMailForUser($data));
			$mail->Send();
			
			$mail2 = new PHPMailer ();
			$mail2->IsSMTP();
			$mail2->SMTPSecure = 'ssl';
			$mail2->Host = "tampilin.id";
			$mail2->SMTPDebug = 2;
			$mail2->Port = 465;
			$mail2->SMTPAuth = true;
			$mail2->Username = 'auto@tampilin.id';
			$mail2->Password = 'pass@word12';
			$mail2->SetFrom( "auto@tampilin.id", "<no-reply> Tampilin Automated Email" );
			$mail2->Subject = "Order #".$order_code.": Pemesanan Website Baru";
			$mail2->AddAddress("info@tampilin.id");
			$mail2->MsgHTML(generateOrderMailForAdmin($data));
			$mail2->Send();
			ob_end_clean();
			echo true;				
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