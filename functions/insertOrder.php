<?php
$path = $_SERVER ['DOCUMENT_ROOT'];
$path .= '/functions/dbConnection.php';
include($path);
if(isset($_POST['jsondata'])){
	$obj = $_POST['jsondata'];
	$conn = new mysqli($GLOBALS ['servername'], $GLOBALS ['dbuser'], $GLOBALS ['dbpass'], $GLOBALS ['dbname']);
	if($conn->connect_error)
		die('Connection failed: ' . $conn->connect_error);
	
	$data = json_decode ( $jsondata );
	if (count ( $data ) > 0) {
		$name = $data->name;
		$email = $data->email;
		$phone = $data->phone;
		$web_package = $data->web_package;
		$domain = $data->domain;
		$doc_link = "";
		
		if (isset($_FILES['upload-document']))
		{
			$file_name = $_FILES['upload-document']['name'];
			$ext = end(explode($file_name));
			if ($ext == "doc" || $ext == "docx" || $ext == "pdf" || $ext == "zip" )
			{
				$source = $_FILES['upload-document']['tmp_name'];
				$link = "/images/".$file_name;
				$target = $_GLOBALS['root'].$link;
				move_uploaded_file($source, $target);
				$doc_link = $link;
			}
		}

		$query = "INSERT INTO `order_list` (`nama`, `telepon`, `email`, `paket`, `domain', `link_dokumen`)
		VALUES ('".$name."', '".$phone."','".$email."',  ".$web_package.", '".$domain."', '".$doc_link."');";
		$res = $conn->query($query);
		if($res === false)
			echo false;
		else
			echo true;	
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