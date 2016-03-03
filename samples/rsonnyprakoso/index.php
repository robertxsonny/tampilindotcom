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
<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>
<title>tampilin.id</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(window).resize(function() {
		if ($(window).width() > 768 )
			$('.nav-menu').show();
		else
			$('.nav-menu').hide();		
	});
	/* $('.sample-product').addClass('static'); */
	$('.required-alert').hide();
	$('.invalid-alert').hide();
	$('.input-message').hide();
	$('.portfolio-group').hide();
	$('.portfolio-group.selected').show();
	$('.nav-item').click(function(){
		$('html, body').animate({
			scrollTop: $($(this).attr('href')).offset().top
		}, {
			duration: 500
		});
		return false;
	});

	$('.content-item').click(function(){
		$(this).closest('.content-nav').find('.content-item.selected').removeClass('selected');
		$(this).addClass('selected');
		var id = $(this).attr('href');
		$(id).closest('.page-content').find('.portfolio-group.selected').removeClass('selected').fadeOut(300, function() {
			$(id).fadeIn(300, function() { 
				$(this).addClass('selected');
			});			
		});
		return false;
	});
	var chart1 = $("#frontend-chart").get(0).getContext("2d");
	var chart2 = $("#backend-chart").get(0).getContext("2d");
	var chart3 = $("#database-chart").get(0).getContext("2d");
	var chart4 = $("#desktop-chart").get(0).getContext("2d");
	var chart5 = $("#mobile-chart").get(0).getContext("2d");
	var chart6 = $("#semantic-chart").get(0).getContext("2d");
	var chart7 = $("#sharepoint-chart").get(0).getContext("2d");
	var chart8 = $("#server-chart").get(0).getContext("2d");
	
	var data1 = [
	 	        {
	 		        value: 85,
	 		        color:"#00B4CC"
	 		    },
	 		    {
	 		        value: 15,
	 		        color: "#444848"
	 		    }];
	var data2 = [
	 	        {
	 		        value: 79,
	 		        color:"#00B4CC"
	 		    },
	 		    {
	 		        value: 21,
	 		        color: "#444848"
	 		    }];
	var data3 = [
	 	        {
	 		        value: 71,
	 		        color:"#00B4CC"
	 		    },
	 		    {
	 		        value: 29,
	 		        color: "#444848"
	 		    }];
	var data4 = [
	 	        {
	 		        value: 76,
	 		        color:"#00B4CC"
	 		    },
	 		    {
	 		        value: 24,
	 		        color: "#444848"
	 		    }];
	var data5 = [
	 	        {
	 		        value: 65,
	 		        color:"#00B4CC"
	 		    },
	 		    {
	 		        value: 35,
	 		        color: "#444848"
	 		    }];
	var data6 = [
	 	        {
	 		        value: 69,
	 		        color:"#00B4CC"
	 		    },
	 		    {
	 		        value: 31,
	 		        color: "#444848"
	 		    }];
	var data7 = [
	 	        {
	 		        value: 72,
	 		        color:"#00B4CC"
	 		    },
	 		    {
	 		        value: 28,
	 		        color: "#444848"
	 		    }];
	var data8 = [
		 	    {
		 		    value: 55,
		 		    color:"#00B4CC"
		 		},
		 		{
		 		    value: 45,
		 		    color: "#444848"
		 		}];
	var ch1 = new Chart(chart1).Doughnut(data1, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	var ch2 = new Chart(chart2).Doughnut(data2, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	var ch3 = new Chart(chart3).Doughnut(data3, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	var ch4 = new Chart(chart4).Doughnut(data4, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	var ch5 = new Chart(chart5).Doughnut(data5, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	var ch6 = new Chart(chart6).Doughnut(data6, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	var ch7 = new Chart(chart7).Doughnut(data7, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	var ch8 = new Chart(chart8).Doughnut(data8, {
		responsive: true,
		maintainAspectRatio: true,
		animationEasing : "easeOutBounce",
		showTooltips : false,
		segmentShowStroke : false
	});
	$('#button-collapse').click(function(){
		$('.nav-menu').contentToggle(100);
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
			<a class="nav-item" href="#cover-1">@rsonnyprakoso</a>
			<ul class="nav-menu">
				<li><a class="nav-item" href="#about">ABOUT</a></li>
				<li><a class="nav-item" href="#works">SKILLS</a></li>
				<li><a class="nav-item" href="#skills">PORTFOLIO</a></li>
				<li><a class="nav-item" href="#contact">CONTACT</a></li>
			</ul>
			</div>		
		</div>
	</header>
	
	<div id="content-wrapper">
		<div id="cover-1" class="page image-page" style="background: linear-gradient(rgba(47,47,59,0.7), rgba(47,47,59,0.7)), url('images/cover1.jpg') no-repeat center center; background-size: cover;">
			<div class="page-content">
				<div class="person-photo circle" style="background: url('images/rsp.jpg') no-repeat center; background-size: cover;"></div>
				<span class="title title-center title-1">Robertus Sonny Prakoso</span>
				<span class="title title-center title-3">Yogyakarta, ID</span>
				<br/>
				<span class="title title-center title-2">Programmer | Designer | Writer</span>
			</div>
		</div>
		
		<div id="about" class="page content-page" style="background-color: #FFFFFF; color: #343838;">
			<div class="page-content">
				<h1 class="content-title">ABOUT ME</h1>
				<div class="box-container">
					<div class="box-3">
						<p class="desc desc-short desc-right"><strong>Education</strong>
						<br/>
						Bachelor of Information Technology, Universitas Gadjah Mada</p>
						<br/>
						<p class="desc desc-short desc-right"><strong>Language</strong>
						<br/>
						English, Bahasa Indonesia, Javanese</p>
						<br/>
						<p class="desc desc-short desc-right"><strong>Interested In</strong>
						<br/>
						Human Computer Interaction, Web 3.0, Cloud Computing</p>
						<br/>
						<p class="desc desc-medium desc-right"><strong>Experiences</strong>
						<br/>
						Involved in some professional projects, joined and got achievement in some software design competition</p>
						<br/>
					</div>
					<div class="box-3 center-image" style="background: url('images/worker.png') no-repeat center; background-size: contain;">
						&nbsp;
					</div>
					<div class="box-3">
						<p class="desc desc-short desc-left"><strong>Main Occupation</strong>
						<br/>
						Co-founder and web developer at tampilin.id</p>
						<br/>
						<p class="desc desc-short desc-left"><strong>Freelance Job</strong>
						<br/>
						Web designer, layouter, online media contributor</p>
						<br/>
						<p class="desc desc-short desc-left"><strong>Past Occupation</strong>
						<br/>
						MIC Yogyakarta, NextIn Indonesia</p>
						<br/>
						<p class="desc desc-long desc-left"><strong>Work Attitude</strong>
						<br/>
						Able to work with team, always has lots of creativities and fresh ideas, never deliver works with low quality</p>
						<br/>
					</div>						
				</div>
			</div>
		</div>
	
		<div id="skills" class="page content-page" style="background-color: #343838; color: #FFFFFF" >
			<div class="page-content">
				<h1 class="content-title">PROGRAMMING AND DESIGN SKILLS</h1>
				<p class="desc">&nbsp;</p>
				<div class="box-container">
					<div class="box-4">
						<canvas id="frontend-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Front-end Web Programming (HTML, CSS, JavaScript)</p>
					</div>
					<div class="box-4">
						<canvas id="backend-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Back-end Web Programming (PHP, ASP.NET)</p>
					</div>
					<div class="box-4">
						<canvas id="database-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Database Programming (MySQL, SQL Server)</p>
					</div>
					<div class="box-4">
						<canvas id="desktop-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Desktop Application (C#)</p>
					</div>
					<div class="box-4">
						<canvas id="mobile-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Mobile Application (Android, Windows Phone)</p>
					</div>
					<div class="box-4">
						<canvas id="semantic-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Semantic Web Programming (Ontology, RDF)</p>
					</div>
					<div class="box-4">
						<canvas id="sharepoint-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Vector Design (Inkscape, CorelDraw, AI)</p>
					</div>
					<div class="box-4">
						<canvas id="server-chart" class="skill-chart"></canvas>
						<p class="desc desc-short">Server Programming (Windows Server, Linux-based Server)</p>
					</div>
				</div>
			</div>
		</div>
			
		
		<div id="works" class="page content-page" style="background-color: #444848; color: #FFFFFF;" >
			<div class="page-content">
				<h1 class="content-title">PORTFOLIO</h1>
				<ul class="content-nav">
					<li class="content-subtitle"><a href="#web-pf" class="content-item selected">website</a></li>
					<li class="content-subtitle">|</li>
					<!-- <li class="content-subtitle"><a href="#apps-pf" class="content-item selected">app</a></li>
					<li class="content-subtitle">|</li> -->
					<li class="content-subtitle"><a href="#layout-pf" class="content-item">layout</a></li>
					<li class="content-subtitle">|</li>
					<li class="content-subtitle"><a href="#write-pf" class="content-item">writings</a></li>
				</ul>
				<div class="portfolio-box">
					<div id="web-pf" class="portfolio-group selected">
					<div class="box-container">
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 1.jpg') no-repeat center; background-size: cover;">
						</a>	
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 2.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 3.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 4.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 5.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 6.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 1.jpg') no-repeat center; background-size: cover;">
						</a>	
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 2.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 3.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 4.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 5.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					<div class="box-6">
						<a class="sample-product" href="#" style="background: url('images/sample web 6.jpg') no-repeat center; background-size: cover;">
						</a>
					</div>
					</div>
					<p class="desc top-space">
						I design and develop websites, team up with my friends and co-workers, mostly single page website. My signature design is simplegant, simple but elegant. I also sometimes create icons and vectors by myself, but just the simple one.
					</p>
				</div>
				<!-- <div id="apps-pf" class="box-container portfolio-group">
					<div class="box-3">
						<p class="desc">Desktop</p>
					</div>
					<div class="box-3">
						<p class="desc">Android</p>
					</div>
					<div class="box-3">
						<p class="desc">Desktop</p>
					</div>
				</div> -->
				<div id="layout-pf" class="box-container portfolio-group">
					<div class="box-3">
						<p class="desc">Poster Design</p>
						<div class="sample-product" style="background: url('images/sample web 6.jpg') no-repeat center; background-size: cover;"></div>
						<p class="desc top-space">
							I create poster design for some occasions and events, mostly for weekly discussion of EnglishDiscuss.
						</p>
					</div>
					<div class="box-3">
						<p class="desc">Vector Drawings</p>
						<div class="sample-product" style="background: url('images/sample web 7.jpg') no-repeat center; background-size: cover;"></div>
						<p class="desc top-space">
							I currently learning and trying to make simple vector drawings, such as simple image, icon, or logo.
						</p>
					</div>
					<div class="box-3">
						<p class="desc">Magazine Layout</p>
						<div class="sample-product" style="background: url('images/sample web 7.jpg') no-repeat center; background-size: cover;"></div>
						<p class="desc top-space">
							I previously have experience on designing magazine/bulletin layout for quarterly bulletin in my campus.
						</p>
					</div>
				</div>
				<div id="write-pf" class="box-container portfolio-group">
					<div class="box-3">
						<a class="sample-product" href="#" style="background: url('images/tampilin_white_red.png') no-repeat center center; background-size: contain;"></a>
						<p class="desc top-space">
							Scientific articles in simple and popular language (in Bahasa Indonesia)
						</p>
					</div>
					<div class="box-3">
						<a class="sample-product" href="#" style="background: url('images/tampilin_white_red.png') no-repeat center center; background-size: contain;"></a>
						<p class="desc top-space">
							Free-writings, mostly about opinion and criticism (in Bahasa Indonesia)
						</p>
					</div>
					<div class="box-3">
						<a class="sample-product" href="#" style="background: url('images/tampilin_white_red.png') no-repeat center center; background-size: contain;"></a>
						<p class="desc top-space">
							Free-writings, mostly about writing tips and technology (in English)
						</p>
					</div>
				</div>
			</div>
		</div>
		</div>
					
				
		<div id="contact" class="page content-page" style="background: linear-gradient(rgba(47,47,59,0.8), rgba(47,47,59,0.8)),  url('images/cover2.jpg') no-repeat bottom right; background-size: cover; color: #FFFFFF">
			<div class="page-content">
				<h1 class="content-title">CONTACT</h1>
				<div class="box-container">
				<div class="box-2 input-box">
				<div class="item-with-icon">
					<div class="icon-wrapper">
						<div class="icon" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></div>
					</div>
					<div class="caption-wrapper">
						<p class="contact">+6281804246404/+6282225226368</p>
					</div>
				</div>
				<div class="item-with-icon">
					<div class="icon-wrapper">
						<div class="icon" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></div>
					</div>
					<div class="caption-wrapper">
						<p class="contact">sonny@tampilin.id</p>
					</div>
				</div>
				<div class="team-socmed">
					<div class="socmed-wrapper">
						<a class="socmed-item" href="#" style="background: url('images/1455227518_Facebook.png') no-repeat center; background-size: contain;"></a>
						<a class="socmed-item" href="#" style="background: url('images/1455227364_instagram.png') no-repeat center; background-size: contain;"></a>
						<a class="socmed-item" href="#" style="background: url('images/1455227348_twitter.png') no-repeat center; background-size: contain;"></a>
					</div>
				</div>
				<br/>
				<p class="desc desc-left">Or directly send me email using this form.</p>
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
						<small class="contact-input required-alert">Nama wajib diisi!</small>
					</div>
					<div class="input-group">
						<input id="order-email" class="contact-input required" type="text" placeholder="Email" />
						<small class="contact-input required-alert">Email wajib diisi!</small>
						<small class="contact-input invalid-alert">Format email tidak valid!</small>
					</div>
					<div class="input-group">
						<textarea id="order-content" rows="6" class="contact-input" placeholder="Message"></textarea>
					</div>
					<button id="order-submit" class="contact-button" >Send</button>
				</form>
				</div>
				<div class="box-2">
					&nbsp;
				</div>
			</div>
		</div>
		</div>					
		
		<div id="footer" class="page content-page" style="background-color: #005F6B; color: #FFFFFF;">
			<div class="page-content">
				<p class="foot-note">
				Copyright &copy; 2016 Robertus Sonny Prakoso, created by <a
					href="http://tampilin.id" target="_blank">tampilin.id: One Stop Online Services</a>
				</p>
			</div>
		</div>
	</div>
		
</div>

</body>
</html>