<?php 

function generateOrderMailForUser($orderObject)
{
	$pkg = generatePackageText($orderObject->web_package);
		
	$html = "";
	$html .= "<html><link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>";
	$html .= "<body>";
	$html .= "<table style=\"width: 100%; font-family: 'Lato', Arial, sans-serif\">";
	$html .= "<tr>";
	$html .= "<td style=\"background-color: #2F2F3B; color: white; padding: 10px 20px;\">";
	$html .= "<img src=\"images/tampilin_white_red.png\" height=\"40px\" />";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "<td style=\"color: #2F2F3B; padding: 20px 30px;\">";
	$html .= "<table style=\"width: 100%\">";
	$html .= "<colgroup>";
	$html .= "<col style=\"width: 20%; min-width: 350px;\" />";
	$html .= "<col style=\"width: 80%\" />";
	$html .= "</colgroup>";
	$html .= "<tr>";
	$html .= "<td colspan=\"2\">";
	$html .= "<p>";
	$html .= "Salam <strong>".$orderObject->name.".</strong>";
	$html .= "<br/>";
	$html .= "Anda baru saja memesan website melalui <strong>tampilin.id</strong> dengan rincian sebagai berikut:";
	$html .= "</p>";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Kode Pemesanan</td>";
	$html .= "<td>: <strong>#".$orderObject->code."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Paket</td>";
	$html .= "<td>: <strong>".$pkg->name."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Nama Domain</td>";
	$html .= "<td>: <strong>".$orderObject->domain." *</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Dokumen Pendukung</td>";
	$html .= "<td>: <strong>".generateDocumentStatus($orderObject->has_doc)."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Harga Awal</td>";
	$html .= "<td>: <strong>".$pkg->price." **</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td colspan=\"2\">";
	$html .= "<p>";
	$html .= "Selanjutnya, Anda akan segera dihubungi oleh tim kami melalui email atau telepon untuk memproses pembuatan website lebih lanjut.";
	$html .= "Anda juga dapat menghubungi tim kami terlebih dahulu melalui email/WhatsApp/LINE dengan menyertakan <u>kode pemesanan</u> yang tertera di atas.";
	$html .= "<br/>";
	$html .= "<br/>";
	$html .= "Terima kasih.";
	$html .= "</p>";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td colspan=\"2\">";
	$html .= "<small>* Nama domain dapat berubah sesuai ketersediaan. Tim kami akan memberitahu Anda dan meminta nama domain yang lain jika nama domain tidak tersedia.</small>";
	$html .= "<br/>";
	$html .= "<small>** Harga berlaku sesuai paket yang tertera di website. Tambahan biaya dapat dikenakan jika ada penambahan fitur/konten yang dikehendaki.</small>";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "</table>";
	$html .= "</td>";
	$html .= "<tr>";
	$html .= "<td style=\"background-color: #FF7066; color: white; padding: 10px 20px;\">";
	$html .= "<div style=\"display: inline-block; float: left; line-height: 30px;\">";
	$html .= "Copyright &copy; 2016 <a href=\"http://tampilin.id\" target=\"_blank\" style=\"color: white;\" >tampilin.id</a>";
	$html .= "</div>";
	$html .= "<div style=\"display: inline-block; float: right\">";
	$html .= "<a href=\"http://facebook.com/tampilin\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "<a href=\"http://twitter.com/tampilin\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "<a href=\"http://instagram.com/tampilin\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "<a href=\"http://line.me/ti/p/%40zeg8363e\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227609_LINE.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "</div>";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "</table>";
	$html .= "</body>";
	$html .= "</html>";
	return $html;
}

function generateOrderMailForAdmin($orderObject)
{
	$pkg = generatePackageText($orderObject->web_package);

	$html = "";
	$html .= "<html><link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>";
	$html .= "<body>";
	$html .= "<table style=\"width: 100%; font-family: 'Lato', Arial, sans-serif\">";
	$html .= "<tr>";
	$html .= "<td style=\"background-color: #2F2F3B; color: white; padding: 10px 20px;\">";
	$html .= "<img src=\"images/tampilin_white_red.png\" height=\"40px\" />";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "<td style=\"color: #2F2F3B; padding: 20px 30px;\">";
	$html .= "<table style=\"width: 100%\">";
	$html .= "<colgroup>";
	$html .= "<col style=\"width: 20%; min-width: 350px;\" />";
	$html .= "<col style=\"width: 80%\" />";
	$html .= "</colgroup>";
	$html .= "<tr>";
	$html .= "<td colspan=\"2\">";
	$html .= "<p>";
	$html .= "Salam <strong>Tim tampilin.id.</strong>";
	$html .= "<br/>";
	$html .= "Terdapat sebuah pemesanan website baru melalui <strong>tampilin.id</strong> dengan rincian sebagai berikut:";
	$html .= "</p>";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Kode Pemesanan</td>";
	$html .= "<td>: <strong>#".$orderObject->code."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Nama Pemesan</td>";
	$html .= "<td>: <strong>#".$orderObject->name."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Tanggal Pemesanan</td>";
	$html .= "<td>: <strong>#".$orderObject->date."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Paket</td>";
	$html .= "<td>: <strong>".$pkg->name."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Nama Domain</td>";
	$html .= "<td>: <strong>".$orderObject->domain."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Dokumen Pendukung</td>";
	$html .= "<td>: <strong>".generateDocumentStatus($orderObject->has_doc)."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td>Harga Awal</td>";
	$html .= "<td>: <strong>".$pkg->price."</strong></td>";
	$html .= "</tr>";
	$html .= "<tr>";
	$html .= "<td colspan=\"2\">";
	$html .= "<p>";
	$html .= "Harap segera menghubungi pemesan melalui email <strong>".$orderObject->email."</strong> atau telepon <strong>".$orderObject->phone."</strong> untuk melakukan proses pembuatan website lebih lanjut.";
	$html .= "<br/>";
	$html .= "<br/>";
	$html .= "Terima kasih.";
	$html .= "</p>";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "</table>";
	$html .= "</td>";
	$html .= "<tr>";
	$html .= "<td style=\"background-color: #FF7066; color: white; padding: 10px 20px;\">";
	$html .= "<div style=\"display: inline-block; float: left; line-height: 30px;\">";
	$html .= "Copyright &copy; 2016 <a href=\"http://tampilin.id\" target=\"_blank\" style=\"color: white;\" >tampilin.id</a>";
	$html .= "</div>";
	$html .= "<div style=\"display: inline-block; float: right\">";
	$html .= "<a href=\"http://facebook.com/tampilin\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "<a href=\"http://twitter.com/tampilin\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "<a href=\"http://instagram.com/tampilin\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "<a href=\"http://line.me/ti/p/%40zeg8363e\" style=\"display: inline-block; vertical-align: middle; width: 30px; height: 30px; background: url('images/1455227609_LINE.png') no-repeat center; background-size: contain;\"></a>";
	$html .= "</div>";
	$html .= "</td>";
	$html .= "</tr>";
	$html .= "</table>";
	$html .= "</body>";
	$html .= "</html>";
	return $html;
}

function generatePackageText($package_number)
{
	$package = new stdObj();
	if ($package_number == 1)
	{
		$package->name = "Personal";
		$package->price = "Rp 300.000,00";
	}
	else if ($package_number == 2)
	{
		$package->name = "Business";
		$package->price = "Rp 500.000,00";
	}
	return $package;
}

function generateDocumentStatus($is_attached)
{
	if ($is_attached)
		return "Sudah disertakan";
	else
		return "Belum disertakan";
}

?>
