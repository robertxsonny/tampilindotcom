<?php
	//if (!isset($_REQUEST['token']))
	//{
	//	header("Location: https://api.instagram.com/oauth/authorize/?client_id=7c6d879f4d55404ebccd12771ae3b7d1&redirect_uri=http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."&response_type=token");
	//}
	//die();
	?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>tampilin.id</title>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var token = window.location.hash;
	if (token)
	{
		var token_title = token.split("=")[0];
		var token_value = token.split("=")[1];
		if (!(token_title == 'token' && token_value)) {<?php
			echo "window.location.href = 'https://api.instagram.com/oauth/authorize/?client_id=7c6d879f4d55404ebccd12771ae3b7d1&redirect_uri=http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."&response_type=token';";
			?>
		}
		else
			return false;
	}
	else{<?php
			echo "window.location.href = 'https://api.instagram.com/oauth/authorize/?client_id=7c6d879f4d55404ebccd12771ae3b7d1&redirect_uri=http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."&response_type=token';";
	?>
	}
});


</script>
</head>
<body>


</body>
</html>
