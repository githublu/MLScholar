

<!DOCTYPE html> 
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Discussion Secion</title>

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
<link rel="stylesheet" type="text/css" href="css/index_mobile.css" />


<!--[if IE 8]>
<link href="css/style_IE.css" rel="stylesheet" type="text/css">
<![endif]-->
<script type="text/javascript" src="js/ie.html5.js"></script>


<!-- JQUERY -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- JQUERY_UI -->
<script type="text/javascript" src="js/jquery.ui.core.js"></script>

<!-- SLIDER -->
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		$("#scroller .items").cycle({ 
    		fx: 'scrollUp' 	
		});
	});
</script>
<?php
 if(isset($_COOKIE['ID_my_site']) || isset($_COOKIE['remember_me']))
 //if there is, it logs you in and directes you to the members page

 {
 	$username = $_COOKIE['ID_my_site']; 
 	$pass = $_COOKIE['Key_my_site'];
	// 	echo $pass;
		require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
 	 	$check = mysqli_query($con, "SELECT * FROM person WHERE email = '$username'")or die(mysqli_error());
 	while($info = mysqli_fetch_array( $check )) 	
 		{
 		if ($pass == $info['Password'])
 			{
			header("Location: blog.php");
 			}
 		}

 }

?>
<!-- SLIDER_NIVO 
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.nivo_slider').nivoSlider({
			manualAdvance: true,
			directionNavHide:true});
    });
</script>
-->

<!-- SLIDER_PIECEMAKER
<script type="text/javascript" src="js/swfobject.js"></script>
 -->
 
<!-- SLIDER_ROUNDABOUT 
<script type="text/javascript" src="js/jquery.featureCarousel.min.js"></script>
-->

<!-- MENU -->
<script type="text/javascript" src="js/menu.js"></script> 	
<script type="text/javascript" src="js/jquery.iconmenu.js"></script>

<!-- SERVICES 
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/services.js"></script>
-->
<!-- HOVER_BUTTON -->
<script type="text/javascript" src="js/hover.js"></script>
<script type="text/javascript" src="js/buttons.js"></script>


<!-- IMAGE -->
<script src="js/image.js" type="text/javascript"> </script>
<script src="js/lightbox.js" type="text/javascript"></script>
<script src="js/jquery.capSlide.js" type="text/javascript"></script>

<!-- GALLERY 
<script src="js/lazyload.js" type="text/javascript"></script>
<script src="js/gallery.js" type="text/javascript"> </script>
<script src="js/jquery.masonary.js" type="text/javascript"> </script>
-->




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>


<body>

<!-- BEGIN middle_silver_background with icons  -->
		<div class="container">
			<div class="inner-wrapper">
				<div class="logo-wrapper">
					<h1>Discussion Section</h1><br>
					<h2>Share your happy moment with others</h2>
					<h2>Enjoy happiness from others</h2>
				</div>
				<div class="form-wrapper">
							<div class="tabs">
			<ul class="tabs-nav">
				<li style="width: 98px;"><a href="#tab1">Sign Up</a></li>
				<li style="width: 98px;"><a href="#tab2">Log In</a></li>
			</ul>
			<style>
				h1, h2{
					color:#FFF;
					margin:0px;
				}
				.logo-wrapper{
					margin-top: 40px;
					position: relative;
					float: left;
					width: 400px;
				}
			</style>
			<div class="clear"></div>
			
			<div class="tabs-container">
				<div class="tab-content" id="tab1">
					<div class="input-wrapper">
						<input class="input" name="name" placeholder="Name" id="name" autocomplete="off"/>
					</div>
					<div class="input-wrapper">
						<input class="input" name="name" placeholder="Email" id="email" autocomplete="off"/>
					</div>
					<div class="input-wrapper">
						<input class="input" name="name" placeholder="Password" type="password" id="password" autocomplete="off"/>
					</div>
					<div class="input-wrapper fail" id="failr" style="display: none;">
						
					</div>
					<div class="input-wrapper">
						<button class="submit input" name="name" type="submit" onclick="register()"/>Sign Up</button>
					</div>
				</div>
	
				<div class="tab-content" id="tab2" style="display: none">
						<div class="input-wrapper">
							<input class="input" name="email" id = "username" placeholder="Email"/>
						</div>
						<div class="input-wrapper">
							<input class="input" name="password" id="pass" type="password" placeholder="Password"/>
						</div>
						<div class="input-wrapper fail" id="fail" style="display:none;">
						</div>
						<br>
										<a href='forgetpassword.php'>Forget password?</a>
						<div class="input-wrapper">
							<button class="submit input" type="submit" onclick="login()">Log In</button>
						</div>
				</div>
			</div>
		</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<script>
	function login()
	{
		var username = $("#tab2 #username").attr("value");
		var pass = $("#tab2 #pass").attr("value");
		$.post('login.php',{email: username, password: pass}, 
		function(data)
		{
			if(data == 0)
			{
				$('#fail').show(function(){
				document.getElementById("fail").innerHTML="username wrong";
				});

			}
			if(data == 1)
			{
				$('#fail').show(function(){
				document.getElementById("fail").innerHTML="password wrong";
				});
			}
			if(data == 2)
			{
				window.location = "latest.php";
			}
		});
		
	}
	function notlogin(){
		window.location = "latest.php";
	}
	function register()
	{
		var name = $("#tab1 #name").attr("value");
		var email = $("#tab1 #email").attr("value");
		var pass = $("#tab1 #password").attr("value");
		if(name ==""){
			$('#failr').show(function(){
			document.getElementById("failr").innerHTML="Name is required";
			});
		}
		else if(email=="") {
			$('#failr').show(function(){
			document.getElementById("failr").innerHTML="Email is required";
			});
		}
		else if(pass =="") {
			$('#failr').show(function(){
			document.getElementById("failr").innerHTML="password is required";
			});
		}
		else{
		$.post('register.php',{name: name, email:email, password:pass}, function(data)
		{
			if(data == 0)
			{
				$('#failr').show(function(){
				document.getElementById("failr").innerHTML="email exists";
				});

			}
			if(data == 1)
			{
				window.location = "latest.php";
			}
		});
	}}
</script>
<!-- /END middle_silver_background with icons -->
<!-- BEGIN Slider -->
	<div id="scroller">
		<div class="items">
			<a class="item" href="#"><img src="images/Slider/slide-1.png" alt="slide-1" /></a>
			<a class="item" href="#"><img src="images/Slider/slide-2.png" alt="slide-2" /></a>
			<a class="item" href="#"><img src="images/Slider/slide-3.png" alt="slide-3" /></a>
		</div>
	</div>
<!-- /END Slider -->



<!-- BEGIN middle part -->
<section id="content">



<!-- second part -->
<?php
 	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
echo "<h3 class='marg-top40'>OUR POPULAR POSTS</h3><div class='con_border'></div>";
    $result = mysqli_query($con, "SELECT * FROM 
    (SELECT COUNT(l.userid) ct, n.note_id, n.userid, n.topic, n.text, n.path, n.date 
    FROM Notes n LEFT JOIN likenote l ON n.note_id = l.noteid 
    GROUP BY n.note_id ORDER BY ct DESC) AS t1 
    JOIN person p ON t1.userid = p.personid LIMIT 2");
	while($row = mysqli_fetch_array($result))
	{
		$date = $row['date'];
		$year = substr($date, 0,4);
		$month = substr($date, 5, 2);
		$date = substr($date, 8, 2);
		$array = array(
			"01"=>"Jan",
			"02"=>"Feb",
			"03"=>"Mar",
			"04"=>"Apr",
			"05"=>"May",
			"06"=>"Jun",
			"07"=>"Jul",
			"08"=>"Aug",
			"09"=>"Sep",
			"10"=>"Oct",
			"11"=>"Nov",
			"12"=>"Dec"
		);
		echo <<<EOD
		
		<div class="column column-1-3  marg-top">
			<div class="blog_content_info con_borderGray">
				<div class="blog_content_date">{$date}<br /><span>{$month}</span></div>
				<a href="" class="comment_number">{$row['ct']}</a>
				<div class="clear"></div>
			</div>
			<div class="blog_content_excerpt">
				<div class="padd-bott5 bold colorBlack">{$row['topic']}</div>
				{$row['text']}
				</div>
			</div>
		
EOD;
}

    $result = mysqli_query($con, "SELECT * FROM 
    (SELECT COUNT(l.userid) ct, n.note_id, n.userid, n.topic, n.text, n.path, n.date 
    FROM Notes n LEFT JOIN likenote l ON n.note_id = l.noteid 
    GROUP BY n.note_id ORDER BY ct DESC) AS t1 
    JOIN person p ON t1.userid = p.personid LIMIT 2, 1");
	while($row = mysqli_fetch_array($result))
	{
		$date = $row['date'];
		$year = substr($date, 0,4);
		$month = substr($date, 5, 2);
		$date = substr($date, 8, 2);
		$array = array(
			"01"=>"Jan",
			"02"=>"Feb",
			"03"=>"Mar",
			"04"=>"Apr",
			"05"=>"May",
			"06"=>"Jun",
			"07"=>"Jul",
			"08"=>"Aug",
			"09"=>"Sep",
			"10"=>"Oct",
			"11"=>"Nov",
			"12"=>"Dec"
		);
		echo <<<EOD
		
		<div class="column column-1-3 column-last  marg-top">
			<div class="blog_content_info con_borderGray">
				<div class="blog_content_date">{$date}<br /><span>{$month}</span></div>
				<a href="" class="comment_number">{$row['ct']}</a>
				<div class="clear"></div>
			</div>
			<div class="blog_content_excerpt">
				<div class="padd-bott5 bold colorBlack">{$row['topic']}</div>
				{$row['text']}
				</div>
			</div>
		
EOD;
}
?>
<!-- /second part -->





<div class="clear"></div>
</section>
<!-- /END middle part -->


<!-- BEGIN footer -->
<footer id="footer"> 
  <div id="footer-wrapper">
	  <div class="footer-column">
		  <div class="widget"> 
			  <h5>CONTACT US</h5>
			  <ul>
			    <li>Founder Name: </li>
			    <li>Yi Lu</li>
			    <li>yl4px@virginia.edu</li>
			  </ul>
		  </div> 
	  </div>
	  
	  <div class="footer-column">
		  <div class="widget"> 
			  <h5>LATEST WORK</h5>
			  <ul>
			    <li><a href="http://www.meighbor.com">Meighbor.com</a></li>
			    <li>Meighbor.com is a new social network that connects people near you</li>
			  </ul>
		  </div> 
	  </div>
  
	  <div class="footer-column last">
		  <div class="widget"> 
			  <h5>FOLLOW US</h5>
			  <div class="clear"></div>
			    <p>Keep in touch with us. Contact us if interested in our works</p>

		  </div>      
	  </div>
  
  <div class="footer-border padd-top15"></div>



  <div class="clear"></div>

	</div>

 </footer>^

<!-- /END footer -->

</body>
</html>
