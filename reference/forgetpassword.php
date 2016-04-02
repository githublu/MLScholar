<!DOCTYPE html> 
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<link href="css/slider.css" rel="stylesheet" type="text/css" />
<link href="css/css_slider1/default.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/css_slider1/nivo-slider.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/hover.css" rel="stylesheet" type="text/css" />
<link href="css/columns.css" rel="stylesheet" type="text/css" />
<link href="css/hover_image.css" rel="stylesheet" type="text/css" />
<link href="css/lightbox.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link href="css/widgets.css" rel="stylesheet" type="text/css" />
<link href="css/light.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/stimenu.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<title>Reset Password</title>
</head>
<?php
 require "./class/headerfile.php";
 $header = new headerfile(); $header->render();
$newpass = rand(100000, 999999);
?>

<body style="background: #000">
		<div class="wrapper-reset">
			<h3>Tellhappiness.com</h3>
			<div class="failure" id='fail'>
				<ul>
				<li><span>User does not exist</span></li>
				</ul>
			</div>
			<div class="input-wrapper" style="margin-top: 16px;">
				<input type="text" placeholder="Email" id="email">
			</div>
			<div class="failure" id="success">
				<ul>
				<li><span>sent new password to your email address</span></li>
				</ul>
			</div>
			<div class="button-wrapper">
				<button class="sign-button" id="reset" type="submit" onclick="reset()">reset password</button>
			</div>
			<a href="index.php">Return to home page</a>
		</div>
</body>
<script>
	function reset(){
		var email = $('#email').attr('value');
			$.post('resetpass.php',{email:email}, function(data){
				if(data == 0)
				{
					$('#fail').show();
				}
				if(data == 1)
				{
					$('#success').show();
				}
			});
	};
</script>
	</html>
