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
<meta property="og:site_name" content="TheKucing">
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
<link href='https://fonts.googleapis.com/css?family=News+Cycle:300,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:300,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo:700,400,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
<link
	href='https://fonts.googleapis.com/css?family=Hind+Vadodara:600,400'
	rel='stylesheet' type='text/css'>
<title>TheKucing</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
<script src="/js/jquery-2.2.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(window).resize(function() {
		if ($(window).width() > 768 )
			$('.nav-menu').show();
		else
			$('.nav-menu').hide();		
	});
	$('.required-alert').hide();
	$('.invalid-alert').hide();
	$('.input-message').hide();
	$('.popup').hide();
	$('#group-2').hide();
	$('#group-3').hide();
	$('.sample-product').addClass("static");
	$('.nav-item').click(function(){
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, {
			duration: 500
		});
		return false;
	});
	$('.slide-item').bind('mousedown', function() {
		var newId = Number($(this).attr('id').replace('slide-', ''));
		var selectedId = Number($('.slide-item.selected').first().attr('id').replace('slide-', ''));
		if (newId != selectedId) {
			$('#slide-' + selectedId).removeClass('selected');
			$('#slide-' + newId).addClass('selected');
			$('#group-' + selectedId).hide("slide", { direction : (newId > selectedId ? "left" : "right")},	300,
					function() {
						$('#group-'+ newId).show("slide", {direction : (newId > selectedId ? "right": "left")},	300);
					});
		}
	});
	$('.slide-left').bind('mousedown', function() {
		var selectedId = Number($('.slide-item.selected').first().attr('id').replace('slide-', ''));
		var firstId = Number($('.slide-item').first().attr('id').replace('slide-', ''));
		var lastId = Number($('.slide-item').last().attr('id').replace('slide-', ''));
		var newId = (selectedId > firstId ? selectedId - 1 : lastId);
		$('#slide-' + selectedId).removeClass('selected');
		$('#slide-' + newId).addClass('selected');
		$('#group-' + selectedId).hide("slide", { direction : "right"},	300,
				function() {
					$('#group-'+ newId).show("slide", {direction : "left"},	300);
				});
	});
	$('.slide-right').bind('mousedown', function() {
		var selectedId = Number($('.slide-item.selected').first().attr('id').replace('slide-', ''));
		var firstId = Number($('.slide-item').first().attr('id').replace('slide-', ''));
		var lastId = Number($('.slide-item').last().attr('id').replace('slide-', ''));
		var newId = (selectedId < lastId ? selectedId + 1 : firstId);
		$('#slide-' + selectedId).removeClass('selected');
		$('#slide-' + newId).addClass('selected');
		$('#group-' + selectedId).hide("slide", { direction : "left"}, 300,
				function() {
					$('#group-'+ newId).show("slide", {direction : "right"}, 300);
				});
	});
	$('.sample-product').bind('mousedown', function(){
		var background = $(this).css('background-image');
		$('#image-big').css('background-image',	background.replace('Thumbs','Fullpics'));
		$('#image-big').css('background-size', 'contain');
		$('#image-big').css('background-position', 'center center');
		$('#image-big').css('background-repeat', 'no-repeat');
		$('#product-popup').fadeIn(300);
	});
	$('#product-close').click(function(){
		$('#product-popup').fadeOut(300);
	});
	$('#button-collapse').click(function(){
		$('.nav-menu').slideToggle(100);
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
		if (allFilled)
		{
			$('.input-message.loading').show();
			var order = {
					name: $('#order-name').val(),
					email: $('#order-email').val(),
					content: $('#order-content').val(),
			}
			var xmlhr = new XMLHttpRequest();
			xmlhr.open('POST', '/functions/sendEmail.php', true);
			xmlhr.onload = function(e) {
				if (xmlhr.readyState == 4) {
					if (xmlhr.status == 200) {
						if (xmlhr.responseText == '1')
						{
							/*$('#warningcontainer').hide();*/
							$('.input-message.loading').hide();
							$('#order-form')[0].reset();
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
		return false;	
	});
	/* $( window ).scroll(function() {
		$('.sample-product').each(function() {
			animationHandler($(this), -300, -450);
		});
	}); */
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
			<a class="nav-item" href="#cover-1"><img src="images/Homebutton v1.png" height="55px" style="border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; box-shadow: 0 0 10px #3c3c3c;" /></a>
			<ul class="nav-menu">
				<li><a class="nav-item" href="#works">WORKS</a></li>
				<li><a class="nav-item" href="#about">ABOUT</a></li>
				<li><a class="nav-item" href="#skills">SKILLS</a></li>
				<li><a class="nav-item" href="#contact">CONTACT</a></li>
			</ul>
			</div>		
		</div>
	</header>
	
	<div id="content-wrapper">
		<div id="cover-1" class="page content-page" style="background: linear-gradient(rgba(47,47,59,0.4), rgba(47,47,59,0.4)), url('images/Home.small.jpg') no-repeat center center; background-size: cover;">
			<div class="page-content">
				<div class="image-page">
						<p class="title title-left title-1">THEKUCING</p>
						<p class="title title-left title-2">ILLUSTRATOR & DESIGNER</p>
				</div>
				<p class="title title-left title-3">Indonesian-based artist with a passion for creating digital beauty</p>
			</div>
		</div>
	
		<div id="works" class="page content-page" style="background-color: #1c1c1c; color: #FFFFFF;" >
			<div class="page-content">
				<h1 class="content-title">WORKS</h1>
				<a class="slide-button slide-left"><i class="fa fa-chevron-left fa-2x"></i></a>
				<a class="slide-button slide-right"><i class="fa fa-chevron-right fa-2x"></i></a>
				<ul class="slide-nav">
					<li><span id="slide-1" class="slide-item selected"><small><i class="fa fa-circle"></i></small></a></li>
					<li><span id="slide-2" class="slide-item"><small><i class="fa fa-circle"></i></small></a></li>
					<li><span id="slide-3" class="slide-item"><small><i class="fa fa-circle"></i></small></a></li>
				</ul>
				<div id="group-1" class="product-group box-container">
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_1.jpg') no-repeat center; background-size: cover;">
						</div>	
					</div>
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_2.jpg') no-repeat center; background-size: cover;">
						</div>
					</div>
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_3.jpg') no-repeat center; background-size: cover;">
						</div>
					</div>
				</div>
				<div id="group-2" class="product-group box-container">
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_4.jpg') no-repeat center; background-size: cover;">
						</div>	
					</div>
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_5.jpg') no-repeat center; background-size: cover;">
						</div>
					</div>
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_6.jpg') no-repeat center; background-size: cover;">
						</div>
					</div>
				</div>
				<div id="group-3" class="product-group box-container">
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_7.jpg') no-repeat center; background-size: cover;">
						</div>	
					</div>
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_8.jpg') no-repeat center; background-size: cover;">
						</div>
					</div>
					<div class="box-3 animation-wrapper">
						<div class="sample-product" style="background: url('images/Works Thumbs/works_9.jpg') no-repeat center; background-size: cover;">
						</div>
					</div>
				</div>
				<br/>
			</div>
		</div>
		
		<div id="about" class="page content-page" style="background: linear-gradient(rgba(47,47,59,0.8), rgba(47,47,59,0.8)),  url('images/Aboutme.small.jpg') no-repeat center center; background-size: cover; color: #FFFFFF">
			<div class="page-content">
				<h1 class="content-title">ABOUT ME</h1>
				<div class="person-photo circle" style="background: url('images/esty.jpg') no-repeat center; background-size: cover;">
				</div>
				<p class="desc">I am a designer and digital ilustrator with a passion and tendency to create art pieces which can give the audience a unique experience as well as long lasting impression.</p>
				<p class="desc">Thus far, I have been learning new things and gaining a lot of experience through my freelance works. The fruit of these works is that I am able to work under pressure, to colaborate within a team, and also am able to keep pushing forward to reach the desirable results.</p>
			</div>
		</div>
		
		<div id="skills" class="page content-page" style="background-color: #1c1c1c; color: #FFFFFF">
			<div class="page-content">
				<h1 class="content-title">SKILLS</h1>
				<p class="desc desc-left">Photoshop</p>
				<progress id="skill-photoshop" class="skill-set" value="85" max="100"></progress>
				<p class="desc desc-left">Paint Tool SAI</p>
				<progress id="skill-sai"  class="skill-set" value="100" max="100"></progress>
				<p class="desc desc-left">Corel Draw</p>
				<progress id="skill-corel"  class="skill-set" value="78" max="100"></progress>
			</div>
		</div>
				
		<div id="contact" class="page content-page div-between-top" style="background: linear-gradient(rgba(47,47,59,0.8), rgba(47,47,59,0.8)),  url('images/Contact.small.jpg') no-repeat center center; background-size: cover; color: #FFFFFF">
			<div class="page-content">
				<h1 class="content-title">CONTACT</h1>
				<div class="box-container">
				<div class="box-2 input-box">
				<form>
					<div class="input-message loading">
						<img src="images/ajax-loader.gif" class="message-icon"></img>
						<span>Sending email, please wait...</span>
					</div>
					<div class="input-message success">
						<i class="fa fa-check fa-lg message-icon"></i>
						<span>Email sent!</span>
					</div>
					<div class="input-message failed">
						<i class="fa fa-times fa-lg message-icon"></i>
						<span>Send email failed! Please re-send.</span>
					</div>
					<form id="order-form" class="input-container">
					<div class="input-group">
						<input id="order-name" class="contact-input required" type="text" placeholder="Name" />
						<small class="contact-input required-alert">Name is required!</small>
					</div>
					<div class="input-group">
						<input id="order-email" class="contact-input required" type="text" placeholder="Email" />
						<small class="contact-input required-alert">Email is required!</small>
						<small class="contact-input invalid-alert">Email is invalid!</small>
					</div>
					<div class="input-group">
						<textarea id="order-content" rows="6" class="contact-input required" placeholder="Message"></textarea>
						<small class="contact-input required-alert">Content is required!</small>
					</div>
					<button id="order-submit" class="contact-button" >Send</button>
				</form>
				</div>
				<div class="box-2 indent-box">
					<p class="desc">If you want to drop by and say hello or want to work on a project with me, please don't hesitate to contact me.</p>
					<div class="item-with-icon">
						<div class="icon-wrapper">
							<div class="socmed-item" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></div>
						</div>
						<div class="scaption-wrapper">
							<p class="desc desc-left">Sagan GK V No 999 Yogyakarta</p>
						</div>
					</div>
					<div class="item-with-icon">
						<div class="icon-wrapper">
							<div class="socmed-item" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></div>
						</div>
						<div class="scaption-wrapper">
							<p class="desc desc-left">(0284) 584138</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>					
					
		
		<div id="socmed" class="page content-page div-between-bottom" style="background-color: #1c1c1c; color: #FFFFFF;">
			<div class="page-content">
				<a id="up-button" href="#cover-1" class="circle between-div nav-item"><i class="fa fa-chevron-up fa-2x"></i></a>
				<div class="team-socmed">
					<div class="socmed-wrapper">
						<a class="socmed-item" href="#" style="background: url('images/facebook500.png') no-repeat center; background-size: contain;"></a>
						<a class="socmed-item" href="#" style="background: url('images/linkedin.png') no-repeat center; background-size: contain;"></a>
						<a class="socmed-item" href="#" style="background: url('images/deviantart.png') no-repeat center; background-size: contain;"></a>
						<a class="socmed-item" href="#" style="background: url('images/pinterest.png') no-repeat center; background-size: contain;"></a>
						<a class="socmed-item" href="#" style="background: url('images/youtube-variation.png') no-repeat center; background-size: contain;"></a>
					</div>
				</div>
			</div>
		</div>
		
		<hr class="foot-line"/>
		
		<div id="footer" class="page content-page" style="background-color: #1c1c1c; color: #FFFFFF;">
			<div class="page-content">
				<p class="foot-note">
				Copyright &copy; 2016 <a
					href="https://www.facebook.com/thekucing" target="_blank">TheKucing</a>, created by <a
					href="http://tampilin.id" target="_blank">tampilin.id</a>
				</p>
			</div>
		</div>
	</div>
		
</div>

<div id="product-popup" class="popup">
	<div id="image-big" class="page-content">
		<a id="product-close" class="close-button"><i class="fa fa-times fa-2x"></i></a>
	</div>
</div>

</body>
</html>