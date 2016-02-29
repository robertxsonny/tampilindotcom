<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="id">
<meta name="description"
	content="Tampilin.id, pengembang one page website sederhana di Indonesia. Menawarkan layanan yang cepat dan desain yang dibuat khusus, bukan berupa template. Buat Buat portofolio atau CV online, kartu nama online, profil usaha, atau website sederhana lainnya di sini.">
<meta property="og:title" content="Tampilin.id: One Page Website For All Your Needs">
<meta property="og:description"
	content="Tampilin.id, pengembang one page website sederhana di Indonesia. Menawarkan layanan yang cepat dan desain yang dibuat khusus, bukan berupa template. Buat Buat portofolio atau CV online, kartu nama online, profil usaha, atau website sederhana lainnya di sini.">
<meta property="og:type" content="website">
<meta property="og:url" content="http://tampilin.id">
<meta property="og:site_name" content="tampilin.id">
<meta name="revisit-after" content="7 days">
<meta name="distribution" content="web">
<meta name="robots" content="index, follow">
<link rel="shortcut icon" type="image/x-icon"
	href="http://tampilin-local.com/images/icon.ico" />
	<link rel="shortcut icon" type="image/png"
	href="images/icon.png" />
<link href="css/style.css" rel='stylesheet' type='text/css'>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Josefin+Sans:300,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:300,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo:700,400,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Hind+Vadodara:600,400'
	rel='stylesheet' type='text/css'>
<title>tampilin.id</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!--Start of Zopim Live Chat Script-->
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3fSCxc6Yo3L6MoByP0cw2rsxjC0lZBhA";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<script type="text/javascript">
$(document).ready(function() {
	$(window).resize(function() {
		if ($(window).width() > 768 )
			$('.nav-menu').show();
		else
			$('.nav-menu').hide();
		if ($(window).width() > 640 )
			$zopim.livechat.window.hide();
		else
			$zopim.livechat.hideAll();			
	});
	$('.team-socmed').hide();
	$('.required-alert').hide();
	$('.invalid-alert').hide();
	$('.input-message').hide();
	$('.nav-item').click(function(){
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, {
			duration: 500
		});
		return false;
	});
	$('#button-collapse').click(function(){
		$('.nav-menu').slideToggle(100);
	});
	$('.team-icon').hover(function() {
		$(this).find('.icon-overlay').hide();
		$(this).find('.team-socmed').each(function() {
			$(this).slideToggle();
		});
	}, function() {
		$(this).find('.team-socmed').slideToggle(100, function() {
				$(this).closest('.team-icon').find('.icon-overlay').show();
			});
	});
	$('.sample-product').hover(function() {
		$(this).find('.product-overlay').hide();
	}, function() {
		$(this).find('.product-overlay').show();
	});
	$('#open-chat').click(function(e) {
		e.preventDefault();
		$zopim.livechat.window.show();
	});
	$('#upload-document').change(function(e) {
		if ($(this).val())
			$('#upload-label').html($(this).val().split('\\').pop());
		else
			$('#upload-label').html('<i class="fa fa-cloud-upload"></i> Upload dokumen pendukung*');
	});
	$('#order-submit').click(function() {
		//e.preventDefault();
		var allFilled = true;
		$('.required').each(function() {
			if (!$(this).val())
			{
				$(this).closest('.input-group').find('.required-alert').show();
				$(this).addClass('empty');
				allFilled = false;
			}
			else
			{
				$(this).closest('.input-group').find('.required-alert').hide();
				$(this).removeClass('empty');
			}
		});
		if (!$('#order-email').hasClass('empty'))
		{
			var email = $('#order-email').val();
			var at = email.indexOf('@');
			var dot = email.lastIndexOf('.');
			if (at < 1 || dot < at + 2 || dot >= email.length - 2)
			{
				$('#order-email').closest('.input-group').find('.invalid-alert').show();
				$('#order-email').addClass('empty');
				allFilled = false;
			}
			else
			{
				$('#order-email').closest('.input-group').find('.invalid-alert').hide();
				$('#order-email').removeClass('empty');
			}
		}
		if (!$('#order-phone').hasClass('empty'))
		{
			var phone = $('#order-phone').val();
			if (phone[0] == '+')
			{
				if (!(phone.substring(1).match(/\d/g).length < 15))
				{
					$('#order-phone').closest('.input-group').find('.invalid-alert').show();
					$('#order-phone').addClass('empty');
					allFilled = false;
				}
				else
				{
					$('#order-phone').closest('.input-group').find('.invalid-alert').hide();
					$('#order-phone').removeClass('empty');
				}
			}
			else
			{
				if (phone[0] != '0' || !(phone.substring(1).match(/\d/g).length < 15))
				{
					$('#order-phone').closest('.input-group').find('.invalid-alert').show();
					$('#order-phone').addClass('empty');
					allFilled = false;
				}
				else
				{
					$('#order-phone').closest('.input-group').find('.invalid-alert').hide();
					$('#order-phone').removeClass('empty');
				}
			}
		}
		if (!$('#order-domain').hasClass('empty'))
		{
			var domain = $('#order-domain').val();
			var dot2 = domain.lastIndexOf('.');
			if (dot2 < 1 || dot2 >= domain.length - 2)
			{
				$('#order-domain').closest('.input-group').find('.invalid-alert').show();
				$('#order-domain').addClass('empty');
				allFilled = false;
			}
			else
			{
				$('#order-domain').closest('.input-group').find('.invalid-alert').hide();
				$('#order-domain').removeClass('empty');
			}
		}		
		if (allFilled)
		{
			if (!$('#upload-document').val())
			{
				var c = confirm("Anda belum meng-upload dokumen. Yakin ingin memproses sekarang? Anda dapat mengirim dokumen tersebut kemudian.");
				if (c)
					processOrder();
			}
			else
				processOrder();
		}
		return false;	
	});
	$( window ).scroll(function() {
				
		$('.feature-box').each(function() {
			animationHandler($(this), 50, -170);
		});
		$('.pricing-box').each(function() {
			animationHandler($(this), 200, -200);
		});
		$('.sample-product').each(function() {
			animationHandler($(this), -200, -400);
		});
		$('.testimonial-box').each(function() {
			animationHandler($(this), 125, -125);
		});
		$('.team-icon').each(function() {
			animationHandler($(this), -400, -400);
		});
		$('.how-to-box').each(function() {
			animationHandler($(this), -400, -400);
		});
	});
});

function animationHandler(object, fromTop, fromBottom)
{
	var w_height = $(window).height();
	var w_top = $(window).scrollTop();
	var w_bottom = (w_height + w_top);
	var e_height = object.height();
	var e_top = object.offset().top;
	var e_bottom = (e_height + e_top);
	if (e_bottom > w_top + fromTop && e_top < w_bottom + fromBottom)
		object.addClass('static');
	else if (e_bottom < w_top || e_top > w_bottom)
		object.removeClass('static');
}

function processOrder()
{
	$('.input-message.loading').show();
	var order = {
			name: $('#order-name').val(),
			email: $('#order-email').val(),
			phone: $('#order-phone').val(),
			domain: $('#order-domain').val(),
			web_package: $('input[name=package]:checked').val()
	}
	var xmlhr = new XMLHttpRequest();
	xmlhr.open('POST', '/functions/insertOrder.php', true);
	xmlhr.onload = function(e) {
		if (xmlhr.readyState == 4) {
			if (xmlhr.status == 200) {
				if (xmlhr.responseText == '1')
				{
					/*$('#warningcontainer').hide();*/
					$('.input-message.loading').hide();
					$('#order-form')[0].reset();
					$('#upload-label').html('<i class="fa fa-cloud-upload"></i> Upload dokumen pendukung*');
					$('.input-message.success').show();
				}
				else
				{
					//alert(xmlhr.responseText);
					$('.input-message.loading').hide();
					$('.input-message.failed').show();
				}
				
			} else {
				//alert(xmlhr.status);
				$('.input-message.loading').hide();
				$('.input-message.failed').show();
			}
		}
	};
	var inputForm = document.querySelector('form');
	var data = new FormData(inputForm);
	data.append('jsondata', JSON.stringify(order));
	xmlhr.send(data);
}

</script>
</head>
<body>

<div id="wrapper">
	<header id="header">
		<div class="page-content">
			<button type="button" id="button-collapse" class="navbar-toggle">
       			<i class="fa fa-2x fa-bars"></i>
      		</button>
			<div id="brand-title">
			<a class="nav-item" href="#cover-1"><img src="images/tampilin_black_red.png" height="40px" /></a>
			<ul class="nav-menu">
				<li><a class="nav-item" href="#overview">PRODUK</a></li>
				<li><a class="nav-item" href="#feature">HARGA</a></li>
				<li><a class="nav-item" href="#project">CONTOH</a></li>
				<li><a class="nav-item" href="#about-us">TENTANG</a></li>
			</ul>
			</div>		
		</div>
	</header>
	
	<div id="content-wrapper">
		<div id="cover-1" class="page image-page" style="background: linear-gradient(rgba(47,47,59,0.4), rgba(47,47,59,0.4)), url('images/DSC_0074 copy 2.jpg') no-repeat center center fixed; background-size: cover;">
			<div class="page-content">
				<span class="title title-center title-1">ONE PAGE WEBSITE</span>
				<span class="title title-center title-2">for all your needs</span>
			</div>
		</div>
	
		<div id="overview" class="page content-page" style="background-color: #FF7066; color: #FFFFFF;" >
			<div class="page-content">
				<h1 class="content-title">APA YANG KAMI TAWARKAN?</h1>
				<div class="box-container">
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8.gif" alt="Sederhana" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>Sederhana</strong>
							<br/>
							<label>Mengembangkan <i>one page website</i> yang modern dan minimalis untukmu</label></p>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8d.gif" alt="Cepat dan Handal" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>Cepat dan Handal</strong>
							<br/>
							<label>Kami menjamin <i>website</i>-mu akan siap sebelum matahari terbit esok hari</label></p>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8a.gif" alt="Personal" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>Personal</strong>
							<br/>
							<label>Didesain khusus untukmu, bukan mengambil dari CMS atau <i>template</i></label></p>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8e.gif" alt="On Demand" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>On Demand</strong>
							<br/>
							<label>Buat portofolio atau kartu nama <i>online</i>, profil usaha, atau lainnya</label></p>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8b.gif" alt="Real Time" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>Real Time</strong>
							<br/>
							<label><i>Chat</i> langsung dengan tim kami untuk mengkomunikasikan ide <i>website</i>-mu saat ini juga</label></p>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8f.gif" alt="Stand Out" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>Stand Out</strong>
							<br/>
							<label>Tampil beda dan menarik di antara rekan-rekanmu dengan <i>website</i> sendiri</label></p>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8c.gif" alt="Fotografi" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>Fotografi</strong>
							<br/>
							<label>Ambil foto baru untuk <i>website</i>-mu, dan/atau tambahkan fotomu sendiri</label></p>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="feature-box item-with-icon">
						<div class="icon-wrapper">
							<img src="images/icon-8g.gif" alt="Dukungan Penuh" class="gif-icon"></img>
						</div>
						<div class="caption-wrapper">
							<p class="desc desc-left"><strong>Dukungan Penuh</strong>
							<br/>
							<label>Gratis <i>maintenance</i> dan perbaikan selama satu tahun</label></p>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="how-to" class="page content-page" style="background-color: #ECECEC; color: #2F2F3B;">
			<div class="page-content">
				<h1 class="content-title">BAGAIMANA MEMESANNYA?</h1>
				<div class="animation-wrapper">
					<div class="how-to-box" style="background-color: #F9690E; color: white;">
						<div class="how-to-inner">
							<h1 class="title title-center title-2">1</h1>
						</div>
					</div>
					<div class="how-to-box">
						<div class="how-to-inner">
							<img src="images/set-5-1.gif" width="100" height="100" class="how-to-icon"></img>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #F27935; color: white;">
						<div class="how-to-inner">
							<p class="desc">Tentukan ide dan konsep dasar <i>website</i>-mu.</p>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #E57E22; color: white;">
						<div class="how-to-inner">
							<p class="desc">Lalu pilih paket yang sesuai kebutuhanmu.</p>
						</div>
					</div>
				</div>
				<div class="animation-wrapper">
					<div class="how-to-box" style="background-color: #2ECC71; color: white;">
						<div class="how-to-inner">
							<h1 class="title title-center title-2">2</h1>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #1EB24C; color: white;">
						<div class="how-to-inner">
							<p class="desc">Hubungi kami melalui chat box atau kontak yang tersedia.</p>
						</div>
					</div>
					<div class="how-to-box">
						<div class="how-to-inner">
							<img src="images/set-5-2.gif" width="100" height="100"  class="how-to-icon"></img>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #26A65B; color: white;">
						<div class="how-to-inner">
							<p class="desc">Kirimkan dokumen pendukung bila perlu.</p>
						</div>
					</div>
				</div>
				<div class="animation-wrapper">
					<div class="how-to-box" style="background-color: #9B59B6; color: white;">
						<div class="how-to-inner">
							<h1 class="title title-center title-2">3</h1>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #9A1283; color: white;">
						<div class="how-to-inner">
							<p class="desc">Diskusikan isi <i>website</i>-mu dengan kami secara langsung.</p>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #8F55EC; color: white;">
						<div class="how-to-inner">
							<p class="desc">Kami akan mulai mendesain pada <strong>saat itu juga</strong></p>
						</div>
					</div>
					<div class="how-to-box">
						<div class="how-to-inner">
							<img src="images/set-5-3.gif" width="100" height="100" class="how-to-icon"></img>
						</div>
					</div>
				</div>
				<div class="animation-wrapper">
					<div class="how-to-box" style="background-color: #3498DB; color: white;">
						<div class="how-to-inner">
							<h1 class="title title-center title-2">4</h1>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #22A7F0; color: white;">
						<div class="how-to-inner">
							<p class="desc">Tambahkan foto terbaikmu di <i>website</i>-mu</p>
						</div>
					</div>
					<div class="how-to-box">
						<div class="how-to-inner">
							<img src="images/set-5-4.gif" width="100" height="100" class="how-to-icon"></img>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #2574A9; color: white;">
						<div class="how-to-inner">
							<p class="desc">Hubungi fotografer kami untuk mengambil foto baru</p>
						</div>
					</div>
				</div>
				<div class="animation-wrapper">
					<div class="how-to-box" style="background-color: #F7CA18; color: white;">
						<div class="how-to-inner">
							<h1 class="title title-center title-2">5</h1>
						</div>
					</div>
					<div class="how-to-box">
						<div class="how-to-inner">
							<img src="images/set-5-5.gif" width="100" height="100" class="how-to-icon"></img>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #E87E04; color: white;">
						<div class="how-to-inner">
							<p class="desc">Selanjutnya, serahkan pada tim kami.</p>
						</div>
					</div>
					<div class="how-to-box" style="background-color: #F5AB35; color: white;">
						<div class="how-to-inner">
							<p class="desc"><i>Website</i>-mu sudah siap diakses dalam 1x24 jam.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="cover-2" class="page image-page" style="background: linear-gradient(rgba(47,47,59,0.4), rgba(47,47,59,0.4)),  url('images/DSC_0097 copy.jpg') no-repeat center center fixed; background-size: cover;">
			<div class="page-content">
				<span class="title title-right title-1">CREATE</span>
				<span class="title title-right title-2">your own</span>
			</div>
		</div>
		
		<div id="feature" class="page content-page" style="background-color: #ECECEC; color: #2F2F3B;">
			<div class="page-content">
				<h1 class="content-title">PILIH PAKET YANG SESUAI</h1>
				<div class="box-container">
					<div id="personal" class="box-2 box-border-transparent pricing-box left" style="background-color: #008DC7; color: #ECECEC;">
					<div class="icon-big" style="background: url('images/image1.png') no-repeat center; background-size: cover;">
					</div>
					<h3 class="package-title">Personal</h3>
					<p class="desc">Website portofolio untuk dirimu sendiri</p>
					<ul class="feature-list">
						<li><strong>Gratis</strong> domain (.com, .net, .my.id, .web.id)</li>
						<li>Perpanjangan <strong>Rp 200.000,00</strong> per tahun berikutnya</li>
						<li><strong>5</strong> foto dari fotografer kami</li>
						<li><strong>10</strong> foto dari koleksi sendiri</li>
						<li><strong>Gratis</strong> 1 alamat email</li>
						<li>Sudah termasuk <strong>Search Engine Optimization (SEO)</strong></li>
						<li><strong>Gratis</strong> promosi di media sosial selama 1 bulan</li>
					</ul>
					<!-- <p class="old-price"><small>promo opening s/d 26 feb 2016</small><br/><s>Rp 300.000,00</s></p> -->
					<h1 class="price">Rp 400.000,00</h1>
				</div>
				<div id="business" class="box-2 box-border-transparent pricing-box right" style="background-color: #59A80F; color: #ECECEC;">
					<div class="icon-big" style="background: url('images/image2.png') no-repeat center; background-size: cover;">
					</div>
					<h3 class="package-title">Business</h3>
					<p class="desc">Website profile sederhana untuk usahamu</p>
					<ul class="feature-list">
						<li><strong>Gratis</strong> domain (bisa semua nama domain)</li>
						<li>Perpanjangan <strong>Rp 350.000,00</strong> per tahun berikutnya</li>
						<li><strong>10</strong> foto dari fotografer kami</li>
						<li><strong>30</strong> foto dari koleksi sendiri</li>
						<li><strong>Gratis</strong> 5 alamat email</li>
						<li>Sudah termasuk <strong>Search Engine Optimization (SEO)</strong></li>
						<li><strong>Gratis</strong> promosi di media sosial selama 2 bulan</li>
					</ul>
					<!-- <p class="old-price"><small>promo opening s/d 26 feb 2016</small><br/><s>Rp 500.000,00</s></p> -->
					<h1 class="price">Rp 700.000,00</h1>
				</div>
				</div>
			</div>
		</div>
		
		<div id="order" class="page content-page" style="background-color: #FF7066; color: #FFFFFF;">
			<div class="page-content">
				<h1 class="content-title">PESAN SEKARANG JUGA</h1>
				<div class="box-container">
				<div class="box-2">
						<h3 class="desc desc-pc">Isi formulir di samping</h3>
						<h3 class="desc desc-mobile">Isi formulir di bawah ini</h3>
						<p class="desc">atau</p>
						<h3 class="desc desc-pc">Hubungi kami melalui <a id="open-chat" href="">chat box</a> di bawah ini</h3>
						<h3 class="desc desc-mobile">Hubungi kami melalui <a href="whatsapp://send?text=Halo, saya berminat memesan website dari tampilin.id. (Kirim pesan ini ke 081578900098)">Whatsapp</a> atau <a href="http://line.me/ti/p/%40zeg8363e">LINE</a></h3>
				</div>
				<div class="box-2 input-box">
					<div class="input-message loading">
						<img src="images/ajax-loader.gif" class="message-icon"></img>
						<span>Memproses pemesanan, harap tunggu...</span>
					</div>
					<div class="input-message success">
						<i class="fa fa-check fa-lg message-icon"></i>
						<span>Pemesanan berhasil! Silakan buka email anda.</span>
					</div>
					<div class="input-message failed">
						<i class="fa fa-times fa-lg message-icon"></i>
						<span>Pemesanan gagal! Silakan ulangi lagi.</span>
					</div>
					<form id="order-form" class="input-container">
					<div class="input-group">
						<input id="order-name" class="contact-input required" type="text" placeholder="Nama pemesan" />
						<small class="contact-input required-alert">Nama wajib diisi!</small>
					</div>
					<div class="input-group">
						<input id="order-email" class="contact-input required" type="text" placeholder="Email" />
						<small class="contact-input required-alert">Email wajib diisi!</small>
						<small class="contact-input invalid-alert">Format email tidak valid!</small>
					</div>
					<div class="input-group">
						<input id="order-phone" class="contact-input required" type="text" placeholder="Nomor Telepon" />
						<small class="contact-input required-alert">Nomor telepon wajib diisi!</small>
						<small class="contact-input invalid-alert">Format telepon tidak valid!</small>
					</div>
					<div class="input-group">
						<div class="input-2 left">
							<input id="package-personal" class="contact-input" type="radio" name="package" value="1" checked/>
							<label for="package-personal" class="contact-input"><i class="fa fa-check"></i>Personal</label>
						</div>
						<div class="input-2 right">
							<input id="package-business" class="contact-input" type="radio" name="package" value="2"/>
							<label for="package-business" class="contact-input"><i class="fa fa-check"></i>Business</label>
						</div>
					</div>
					<div class="input-group">
						<input id="order-domain" class="contact-input required" type="text" placeholder="Nama domain yang diinginkan" />
						<small class="contact-input required-alert">Nama domain wajib diisi!</small>
						<small class="contact-input invalid-alert">Nama domain tidak valid!</small>
					</div>
					<div class="input-group">
						<input id="upload-document" name="document" class="contact-input" type="file" accept=".doc,.docx,.pdf,.zip" />
						<label id="upload-label" for="upload-document" class="contact-input file-input"><i class="fa fa-cloud-upload"></i> Upload dokumen pendukung*</label>
						<small class="contact-input">*CV untuk personal, profil perusahaan untuk business, atau dokumen lainnya</small>
					</div>
					<button id="order-submit" class="contact-button" >Pesan</button>
					</div>					
				</form>
				</div>
			</div>
		</div>
		
		<div id="cover-3" class="page image-page" style="background: linear-gradient(rgba(47,47,59,0.4), rgba(47,47,59,0.4)),  url('images/DSC_0060 copy.jpg') no-repeat center center fixed; background-size: cover">
			<div class="page-content">
				<span class="title title-left title-1">SEE WHAT</span>
				<span class="title title-left title-2">we've done</span>
			</div>
		</div>
	
	
		<div id="project" class="page content-page" style="background-color: #ECECEC; color: #2F2F3B;">
			<div class="page-content">
				<h1 class="content-title">PORTOFOLIO KAMI</h1>
				<br/>
				<h1 class="title title-center title-2" style="line-height: 60px; vertical-align: middle;"><i>..akan di-</i><img src="images/tampilin_black_red.png" height="60px" /><i>kemudian</i></h1>
				<br/>
				<!-- <div class="box-container">
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 1.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>	
					</div>
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 2.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>
					</div>
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 3.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>
					</div>
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 4.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>
					</div>
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 5.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>
					</div>
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 6.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>
					</div>
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 7.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>
					</div>
					<div class="box-4 animation-wrapper">
						<a class="sample-product" href="#" style="background: url('images/sample web 8.jpg') no-repeat center; background-size: cover;">
						<div class="product-overlay"></div>
						</a>
					</div>
				</div> -->
			</div>
		</div>
		
		<div id="testimonial" class="page content-page" style="background-color: #FF7066; color: #FFFFFF;">
			<div class="page-content">
				<h1 class="content-title">TESTIMONI</h1>
				<br/>
				<h1 class="title title-center title-2" style="line-height: 60px; vertical-align: middle;"><i>...akan di-</i><img src="images/tampilin_white_red.png" height="60px" /><i>kemudian</i></h1>
				<br/>
				<!-- <div class="box-container">
					<div class="box-2 animation-wrapper">
					<div class="testimonial-box left item-with-icon">
						<div class="sicon-wrapper">
							<i class="fa fa-quote-left fa-lg"></i>
						</div>
						<div class="testimonial-wrapper">
							<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend sem at arcu vestibulum elementum. Pellentesque magna dolor, tempus sed commodo et, sagittis vitae enim.
							<br/>
							<strong>Nama testimoni 1</strong></p>
						</div>
						<div class="sicon-wrapper">
							<i class="fa fa-quote-right fa-lg"></i>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="testimonial-box right item-with-icon">
						<div class="sicon-wrapper">
							<i class="fa fa-quote-left fa-lg"></i>
						</div>
						<div class="testimonial-wrapper">
							<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend sem at arcu vestibulum elementum. Pellentesque magna dolor, tempus sed commodo et, sagittis vitae enim.
							<br/>
							<strong>Nama testimoni 1</strong></p>
						</div>
						<div class="sicon-wrapper">
							<i class="fa fa-quote-right fa-lg"></i>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="testimonial-box left item-with-icon">
						<div class="sicon-wrapper">
							<i class="fa fa-quote-left fa-lg"></i>
						</div>
						<div class="testimonial-wrapper">
							<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend sem at arcu vestibulum elementum. Pellentesque magna dolor, tempus sed commodo et, sagittis vitae enim.
							<br/>
							<strong>Nama testimoni 1</strong></p>
						</div>
						<div class="sicon-wrapper">
							<i class="fa fa-quote-right fa-lg"></i>
						</div>
					</div>
					</div>
					<div class="box-2 animation-wrapper">
					<div class="testimonial-box right item-with-icon">
						<div class="sicon-wrapper">
							<i class="fa fa-quote-left fa-lg"></i>
						</div>
						<div class="testimonial-wrapper">
							<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eleifend sem at arcu vestibulum elementum. Pellentesque magna dolor, tempus sed commodo et, sagittis vitae enim.
							<br/>
							<strong>Nama testimoni 1</strong></p>
						</div>
						<div class="sicon-wrapper">
							<i class="fa fa-quote-right fa-lg"></i>
						</div>
					</div>
					</div>
				</div> -->
			</div>
		</div>
	
		<div id="about-us" class="page content-page" style="background-color: #49494E; color: #FF7066;">
			<div class="page-content">
				<h1 class="content-title">TEAM MEMBER</h1>
				<div class="box-container">
					<div class="box-4 animation-wrapper">
						<div class="team-icon" style="background: url('images/theo.jpg') no-repeat center; background-size: cover;">
							<div class="icon-overlay">
								<h1 class="team-name">BROWN</h1>
							</div>
							<div class="team-socmed">
								<div class="socmed-wrapper">
									<a class="socmed-item" href="#" style="background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="box-4 animation-wrapper">
						<div class="team-icon" style="background: url('images/sonny.jpg') no-repeat center; background-size: cover;">
							<div class="icon-overlay">
								<h1 class="team-name">GREY</h1>
							</div>
							<div class="team-socmed">
								<div class="socmed-wrapper">
									<a class="socmed-item" href="#" style="background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="box-4 animation-wrapper">
						<div class="team-icon" style="background: url('images/inge.jpg') no-repeat center; background-size: cover;">
							<div class="icon-overlay">
								<h1 class="team-name">WHITE</h1>
							</div>
							<div class="team-socmed">
								<div class="socmed-wrapper">
									<a class="socmed-item" href="#" style="background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="box-4 animation-wrapper">
						<div class="team-icon" style="background: url('images/esty.jpg') no-repeat center; background-size: cover;">
							<div class="icon-overlay">
								<h1 class="team-name">BLACK</h1>
							</div>
							<div class="team-socmed">
								<div class="socmed-wrapper">
									<a class="socmed-item" href="#" style="background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;"></a>
									<a class="socmed-item" href="#" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div id="contact-us" class="page content-page" style="background-color: #2F2F3B; color: #FFFFFF;">
			<div class="page-content">
				<h1 class="content-title">HUBUNGI KAMI</h1>
				<div class="box-container">
					<div class="box-4">
					<div class="item-with-icon">
						<small class="item-label">TELEPON:</small>
						<br/>
						<h1 class="contact">081578900098</h1>
						<h1 class="contact">082225226368</h1>
					</div>
					</div>
					<div class="box-4">
					<div class="item-with-icon">
						<small class="item-label">EMAIL:</small>
						<br/>
						<h1 class="contact"><a href="mailto:info@tampilin.id">info@tampilin.id</a></h1>
					</div>
				</div>
				<div class="box-4">
					<div class="item-with-icon">
						<div class="icon-wrapper">
							<div class="socmed-item" style="background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;"></div>
						</div>
						<div class="scaption-wrapper">
							<p class="desc desc-left"><a href="http://facebook.com/tampilin" target="_blank">Tampilin.id</a></p>
						</div>
					</div>
					<div class="item-with-icon">
						<div class="icon-wrapper">
							<div class="socmed-item" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></div>
						</div>
						<div class="scaption-wrapper">
							<p class="desc desc-left"><a href="http://twitter.com/tampilin" target="_blank">@tampilin</a></p>
						</div>
					</div>
					</div>
					<div class="box-4">
					<div class="item-with-icon">
						<div class="icon-wrapper">
							<div class="socmed-item" style="background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;"></div>
						</div>
						<div class="scaption-wrapper">
							<p class="desc desc-left"><a href="http://instagram.com/tampilin" target="_blank">@tampilin</a></p>
						</div>
					</div>
					<div class="item-with-icon">
						<div class="icon-wrapper">
							<div class="socmed-item" style="background: url('images/1455227609_LINE.png') no-repeat center; background-size: contain;"></div>
						</div>
						<div class="scaption-wrapper">
							<p class="desc desc-left"><a href="http://line.me/ti/p/%40zeg8363e" target="_blank">Tampilin.id</a></p>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
		
		<div id="footer" class="page content-page" style="background-color: #2F2F3B; color: #FFFFFF;">
			<div class="page-content">
				<p class="foot-note">
				Copyright &copy; 2016 <a
					href="https://www.facebook.com/tampilin" target="_blank">tampilin.id</a>
				</p>
			</div>
		</div>
	</div>
	
	
	
</div>

</body>
</html>