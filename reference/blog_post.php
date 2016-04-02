
<!-- # ------------------------------------------------------------------
# kickassGFX.net - Best Graphic Source - Free Themes, Scripts & Plugins 
# -----------------------------------------------------------------------
# This file has been downloaded from KickassGFX.net
# Homepage: http://www.kickassgfx.net/
# -----------------------------------------------------------------------
# You'll find your Updates everyday at KickassGFX.net
# -----------------------------------------------------------------------
# If you need support with this template you can
# contact us at   http://www.kickassgfx.net/
# ------------------------------------------------------------------- -->
<?php
 	include "./function.php";
 	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
     if(isset($_COOKIE['ID_my_site']) || isset($_COOKIE['remember_me']) )
 {

// userid
$email = $_COOKIE["ID_my_site"];
//$userid = getuserid($email);
$query = mysqli_query($con, "SELECT * FROM person WHERE email = '$email'");
$row = mysqli_fetch_array($query);
$userid = $row['personid'];
$name = $row['name'];
 }
	 else{
	 	$userid = 0;
		 $name = "anonymous user";
	 }
	//post
$topic = $topic = $_POST['topic'];
$content = $_POST['content'];
$topic = replace($topic);
$content = replace($content);


?>
<!DOCTYPE html> 
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Happy moment</title>

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

<link rel="stylesheet" type="text/css" href="css/blog_post.css" />


<!--[if IE 8]>
<link href="css/style_IE.css" rel="stylesheet" type="text/css">
<![endif]-->
<script type="text/javascript" src="js/ie.html5.js"></script>


<!-- JQUERY -->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<!-- JQUERY_UI -->
<script type="text/javascript" src="js/jquery.ui.core.js"></script>

<!-- SLIDER 
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#scroller .items").cycle({ 
    		fx: 'scrollUp' 	
		});
	});
</script>
-->

<!-- SLIDER_NIVO --> 
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.nivo_slider').nivoSlider({
			manualAdvance: true,
			directionNavHide:true});
    });
</script>


<!-- SLIDER_PIECEMAKER 
<script type="text/javascript" src="js/swfobject.js"></script>
-->
<!-- SLIDER_ROUNDABOUT 
<script type="text/javascript" src="js/jquery.featureCarousel.min.js"></script>
-->

<!-- MENU -->
<script type="text/javascript" src="js/menu.js"></script>

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


<!-- BEGIN menu -->
<header class="header_silverbackground">
	<div class="menu">
			<div style="width: 200px;position: absolute;font-size: 30px;color: #FFF;padding: 20px;"><a href="blog.php" style="color: #FFF">Tell Happiness</a></div>
	<div class="blockeasing-wrapp">
	<h6 class="blockeasing-header">Menu</h6>
	<ul class="blockeasing">
		<li class="current"><a href="blog.php">Moment</a>
						<ul>
				<li><a href="latest.php">Lastest</a>
				</li>
				<li><a href="popular.php">Popular</a>
				</li>
	    		<li><a href="blog.php">happiest</a>
				</li>
	 	</ul>
		</li>		      
        <li><a href="logout.php">Log Out</a></li>
		<li><a href="profile.php"><?php echo $name ?></a></li>
	</ul>
	</div>
	<div class="clear"></div>
    </div> 
</header>
<!-- /END menu -->

<!-- BEGIN middle part -->
<section id="content">
<div class="href_path_link"><h6>YOU ARE HERE: <a href="blog.php">HOME</a>>Happy moment</h6></div>
<div class="href_path_about"><h2>Happy Moment</h2></div>
	

<!-- BEGIN blog left -->
<div class="blog_left">
<?php

if($topic != "" && $content != "")
{
	$result = mysqli_query($con,"INSERT INTO Notes (userid, topic, text, pro, path, date)
	VALUES 
		('$userid', '$topic', '$content', 0, '', (select NOW()))");
	$noteid = mysqli_insert_id($con);
			echo "asd";
	//file upload--start
	if($_FILES["file"] != NULL)
	{
	                    $allowedExts = array("jpg", "jpeg", "gif", "png","tif","pjepg");
                        $extension = end(explode(".", $_FILES["file"]["name"]));
						$extension=strtolower($extension);
                        if ((($_FILES["file"]["type"] == "image/gif")
                        || ($_FILES["file"]["type"] == "image/jpeg")
                        || ($_FILES["file"]["type"] == "image/png")
                        || ($_FILES["file"]["type"] == "image/pjpeg")
                        || ($_FILES["file"]["type"] == "image/jpg")
                        || ($_FILES["file"]["type"] == "image/tif"))
                        && ($_FILES["file"]["size"] < 20000000)
                        && in_array($extension, $allowedExts))
                          {
                          if ($_FILES["file"]["error"] > 0)
                            {
                            	echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
                            }
                          else
                            {
                            if (file_exists("pic/" . $userid."-".$_FILES["file"]["name"]))
                              {
                              	echo "file existed";
                              }
                            else
                              {
                              move_uploaded_file($_FILES["file"]["tmp_name"],
                              "pic/" . $userid."-".$_FILES["file"]["name"]);
                             $path = "pic/" . $userid."-".$_FILES["file"]["name"];
							$result2 = mysqli_query($con, "UPDATE Notes SET path = '$path' WHERE note_id = '$noteid'");
                             }
                            }
                          }
   }

//file  upload --end
}
else{
$noteid= $_GET['id'];
	}
    $result = mysqli_query($con, "SELECT * FROM 
    (SELECT COUNT(l.userid) ct, n.note_id, n.userid, n.topic, n.text, n.path, n.date 
    FROM Notes n LEFT JOIN likenote l ON n.note_id = l.noteid 
    GROUP BY n.note_id ORDER BY ct DESC) AS t1 
    JOIN person p ON t1.userid = p.personid WHERE t1.note_id = $noteid");
	$row = mysqli_fetch_array($result);
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
		<div class="blog_left_content">
			<div class="blog_content_info">
				<div class="blog_content_date">{$date}<br />
					<span>{$array[$month]}</span>
				</div>
				<div class="blog_content_author">
					<span>Author</span><br />{$row['name']}
					</div>
			</div>
			<div class="blog_content_inner">
EOD;
if($row['path'] != "")
{
	echo <<<EOD
		<div class="theme-default">
			<img src="{$row['path']}" alt="" />
	</div>
EOD;
}
				echo <<<EOD
				<h3>{$row['topic']}</h3>
				<div class="blog" style="color:#616060">
				{$row['text']}
				</div>
			<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
				
EOD;
	$result2 = mysqli_query($con, "SELECT COUNT(id) FROM comment WHERE noteid = $noteid");
	$row2 = mysqli_fetch_array($result2);
	$num = $row2[0];

	echo <<<EOD
	<div class="comment_cont">
		<h3>{$num} RESPONSES</h3>
	</div>
	<div id="append">
	</div>
EOD;
		$result3 = mysqli_query($con, "SELECT * FROM comment c JOIN person p ON c.commenter = p.personid WHERE c.noteid = $noteid ORDER BY c.date");
	while($row3 = mysqli_fetch_array($result3))
	{
		$noteid = $row3['noteid'];
		$comment = mysqli_query($con, "SELECT COUNT(re),SUM(re) FROM likecomment WHERE noteid = $noteid");
		$outcomment = mysqli_fetch_array($comment);
		$up = $outcomment[1];
		$down = $outcomment[0] - $up;
		if($up == 0) {$up = "";}
		if($down == 0) {$down = "";}
		$position = array(
		0 => "",
		1 => "_reply1",
		2 => "_reply2"
		 );
		echo <<<EOD
	<div class="comment_cont{$position[$row3['re']]}">
		<div class="com_image">
	  		<img src="images/blog/avatar.jpg" alt="avatar" />
		</div>
	 	<div class="com_inf">
	 		<ul class="ul_information no-marg-top padd-left name">
	        	<li class="bebas">{$row3['name']}</li>
	        	<li>{$row3[date]}</li>
	   		</ul>
	   		<div class="vote">
			<button class="up" aria-pressed="false" title="Agree">
			<i class="voteup"></i>
			<span class="label" style="display: inline-block;">Yes</span>
			<span class="count" style="display: inline-block;">{$up}</span>
			</button>
			<button class="down" aria-pressed="false" title="Disagree">
			
			<span class="label" style="display: inline-block; width: 100%;">No</span>
			<span class="count" style="display: inline-block;">{$down}</span>
			<i class="votedown"></i>
			</button>
			</div>
	 	</div>
	 	<div class="clear"></div>
			<div class="blogcomment" style="color:#616060">
				{$row3['comment']}
			</div>
	</div>
EOD;
	}
?>

<!-- BEGIN TABLE POST COMMENT-->
<div class="comment_cont border_none">
<h3>LEAVE A COMMENT</h3>
<div class="border"></div>
<div class="padd-left">
  <label>MESSAGE</label><br/>
	  <textarea id="comment" class="text_area" name="message" rows="8" cols="30"></textarea><br />
	  <a class="con_button con_button2 right marg-bott" id="postcomment">
	  	<span class="con_button_text">POST COMMENT</span><span class="con_button_arrow">
	  		<span>POST COMMENT</span>
	  		</span>
	  </a>
</div>
<div class="clear"></div>
<script>
	$(document).ready(function(){
		document.getElementById('postcomment').onclick = comment;
		function comment(replyto)
		{
			var noteid = <?php echo $noteid;?>;
			var userid = "<?php echo $userid;?>";
			var comment = $(".padd-left #comment").attr("value");
			$.post('comment.php',{noteid: noteid, commenter: userid, comment: comment}, 
			function(data)
			{
				$("#append").append(data);
			});
		}
	});
</script>
</div>
<!-- /END TABLE POST COMMENT-->


</div>
<!-- /END blog left -->



<!-- BEGIN blog right -->
<div class="blog_right">
    
<?php
	echo <<<EOD
	    <div class="widget widget-tabs-wrapper tabs">
           
	<ul class="widgetTabs tabs-nav">
		<li class="popular"><a href="#tab-pop">LATEST</a></li>
		<li class="latest"><a href="#tab-latest">POPULAR</a></li>
	</ul>
            
	<div class="clear"></div>
	<div class="widget-tabs-inside tabs-container">
EOD;
echo "	<ul id='tab-pop' class='widget_recent_posts tab-content'> ";
	    $result = mysqli_query($con, "SELECT * FROM Notes n JOIN person p ON n.userid = p.personid ORDER BY n.date DESC LIMIT 5");
	while($row = mysqli_fetch_array($result)){
		echo <<<EOD
           
             <li class="tumbnail_post">
				
				<a class="post_name" href="blog_post.php?id={$row['note_id']}">{$row['topic']}</a>
				<div class="clear"></div>
				{$row['text']}
				<br /><span>{$row['date']}</span>
				<div class="clear"></div>
			</li>     
EOD;

	}
	echo "</ul>";
		echo "<ul id='tab-latest' class='widget_recent_posts tab-content'>";
	$result = mysqli_query($con, "SELECT * FROM (SELECT COUNT(c.id) ct, n.date, n.note_id, n.topic, n.text FROM Notes n LEFT JOIN comment c ON n.note_id = c.noteid) AS t1 ORDER BY ct DESC LIMIT 5;");
	while($row = mysqli_fetch_array($result)){
            echo <<<EOD
			<li class="tumbnail_post">
				
				<a class="post_name" href="blog_post.php?id={$row['note_id']}">{$row['topic']}</a>
				<div class="clear"></div>
				{$row['text']}
				<br /><span>{$row['date']}</span>
				<div class="clear"></div>
			</li>                
EOD;
        
}
	echo "</ul></div><!-- /.boxes --></div>" ;  
?><!-- /widgetTabs -->

					
<div class="clear"></div>
</div><!-- /END blog right -->


<div class="clear_both"></div>
<!-- /END blog container -->
   
</section>
<!-- /END middle part -->
<div class="clear"></div>


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
			    <li><a href="meighbor.com">Meighbor.com</a></li>
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

  </footer>

  <div class="clear"></div>


<?php
$result = mysqli_query($con, "SELECT COUNT(note_id) FROM Notes WHERE note_id = '$noteid' AND userid = '$userid'");
$row1 = mysqli_fetch_array($result);
if($row1[0] != 0)
{
	$update = mysqli_query($con, "UPDATE likenote SET re = 1 WHERE noteid = '$noteid'");
	$update = mysqli_query($con, "UPDATE comment SET re = 1 WHERE noteid = '$noteid'");
}

?>

</body>
</html>
