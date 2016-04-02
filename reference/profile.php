
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
<!DOCTYPE html> 
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Happy Moment</title>

<?php
	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
     if(isset($_COOKIE['ID_my_site']) || isset($_COOKIE['remember_me']) )
 {

//include('./function.php');

 require "./class/headerfile.php";
 $header = new headerfile(); $header->render();

// userid
$email = $_COOKIE["ID_my_site"];
//$userid = getuserid($email);
$query = mysqli_query($con, "SELECT * FROM person WHERE email = '$email'");
$row = mysqli_fetch_array($query);
	$userid = $row['personid'];
	$name = $row['name'];
	$email = $row['email'];
		}
else{
	 require "./class/headerfile.php";
 	$header = new headerfile(); $header->render();
	$userid = 0;
	$name = "anonymous user";
}
	?>
<body>


<!-- BEGIN menu -->
<header class="header_silverbackground">
	<div class="menu">
		<!-- BEGIN logo -->
		<div style="width: 200px;position: absolute;font-size: 30px;color: #FFF;padding: 20px;"><a href="blog.php" style="color: #FFF">Tell Happiness</a></div>
		<!-- /END logo -->
		<div class="postposition">
	<input id="loc" style="color: #383838;margin-top: 20px;margin-left: 20px;"class="postbtn" type="submit" value = "Share your happy moment">
	</div>
	<div class="blockeasing-wrapp">
	<h6 class="blockeasing-header">Menu</h6>
	<ul class="blockeasing">
		<li class="current"><a href="blog.php">Moment</a>
			<ul>
				<li><a href="latest.php">Latest</a>
				</li>
				<li><a href="popular.php">Popular</a>
				</li>
	    		<li><a href="blog.php">happiest</a>
				</li>
	 	</ul>
		</li>		
		<li><a href="logout.php">Log Out</a>
	 	</li>
	 	<li><a href="profile.php"><?php echo $name;?></a>
	 	</li>
	</ul>
	</div>
	<div class="clear"></div>
    </div> 
</header>
<script>
	$(document).ready(function(){
		$('#loc').click(function(){
		$('#postbox').slideDown("fast");
	});
	$('#cancel').click(function(){
		$('#postbox').slideUp("fase");
	});
});
</script>
<div class="postbox" id="postbox">
	<div class="dialog-title">
		<span class="dialog-title-left"></span>
		<span class="dialog-title-close"></span>
	</div>
	<form name="post" action="blog_post.php" method="post" enctype="multipart/form-data">
		<div class="topic">
			<textarea name="topic" class="small txt" placeholder="The topic of your story" autocomplete="off"></textarea>
		</div>
		<span style="margin-left:22px;"><?php echo "Author: $name";
		 if($userid ==0 )
		echo "<span style='margin-left:22px;'><a href='index.php'>sign in and enjoy more</a></span>";?></span><br><br>

		<span style="margin-left:22px;">Share your happy moment with us</span>
		<div class="topic">
			<textarea name="content" class="large txt" placeholder="Share your story more specifically" autocomplete="off"></textarea>
		</div>
		<span style="margin-left:22px;">Add a picture for your story</span>
			<input style="height: 15px; margin-left: 5px;margin-top: 3px;" type="file" name="file" id="file">
			<input class="poststory" type="submit" value="Post">
		<a id="cancel"style="position: relative;float: right;margin: 12px;font-size: 15px;cursor: pointer;">Cancel</a>
	</form>
</div>
<!-- /END menu -->

<!-- BEGIN middle part -->
<section id="content">

<div class="href_path_link"><h6>YOU ARE HERE: <a href="blog.php">HOME</a>>Profile</h6></div>
<div class="href_path_about"><h2><?php echo $name;?></h2></div>

  <!-- BEGIN 1. team -->
  <div class="team column-2-3">
  <div class='propicbg' style="background:url('images/background-gray.png') repeat; width: 176px; height: 177px;float:left;">
  	<img src="images/team/team1.png" class="img_team" />
  </div>
  <div class="team_border"></div>
   <div class="team_content" style="width: 455px;">
      <h2><?php echo $name;?></h2>    
      <div class="team_contact">
               Gender<br />
               Home town<br />
               Age<br />
               <a href="mailto:office@companyname.com" class="footer_link"><?php echo $email;?></a>
               <a href="#" style="float: right"> Edit</a>
     </div>

       <div class="team_about"></div>
       </div>
	 </div>
	 
	 	<div class="column column-1-3 column-last" style="margin-top: -20px;">
	
		<h3>Notification</h3>
		
		<div class=".accordion">
			<!-- accodrion first -->
			<?php
			$result1 = mysqli_query($con, "SELECT COUNT(id) FROM comment ct JOIN Notes n ON ct.noteid = n.note_id JOIN person p ON p.personid = ct.commenter WHERE n.userid = '3' AND ct.re = '0'");
				$txt = mysqli_fetch_array($result1);
			if($txt[0] == 0)
				{
					echo <<<EOD
					<a class="acc-trigger" href="#" style="color:#807f7f" id="comment">Comments</a>
EOD;
				}
			else
				{
					echo <<<EOD
					<a class="acc-trigger" href="#" style="color:#f96e5b" id="comment">Comments</a>
EOD;
				}
			?>
			<div class="acc-content">
			<?php
			$result = mysqli_query($con, "SELECT n.note_id, p.name FROM comment ct JOIN Notes n ON ct.noteid = n.note_id JOIN person p ON p.personid = ct.commenter WHERE n.userid = '3' AND ct.re = '0'");
				while ($row1 = mysqli_fetch_array($result))
				{
					echo <<<EOD
					<a href="blog_post.php?id={$row1['note_id']}">[NEW] {$row1['name']} comments on you post</a><br>
EOD;

				}
			?>
			</div>
	
			<!-- accodrion second -->
			<?php
			$result = mysqli_query($con, "SELECT COUNT(noteid) FROM likenote ln JOIN Notes n ON ln.noteid = n.note_id JOIN person p ON p.personid = ln.userid WHERE n.userid = '$userid' AND ln.re = '0'");
				$tx = mysqli_fetch_array($result);
				if($tx[0] == 0)
				{
					echo <<<EOD
					<a class="acc-trigger" style="color:#807f7f" id="like">Likes</a>
EOD;

				}
				else {
					echo <<<EOD
					<a class="acc-trigger" style="color:#f96e5b" id="like">Likes</a>
EOD;
				}
			?>
			<div class="acc-content">
				<?php
							$result = mysqli_query($con, "SELECT * FROM likenote ln JOIN Notes n ON ln.noteid = n.note_id JOIN person p ON p.personid = ln.userid WHERE n.userid = '$userid' AND ln.re = '0'");
				while ($row = mysqli_fetch_array($result))
				{
					echo <<<EOD
					<a href="blog_post.php?id={$row['note_id']}">[NEW] {$row['name']} likes you post</a><br>
EOD;

				}
				if($tx[0] == 0)
				{
					echo "<a href='#'id='showrecent'>show recent</a>";
				}
				echo "<div id ='recentlike' style='display:none'>";
					$recent = mysqli_query($con, "SELECT * FROM likenote ln JOIN Notes n ON ln.noteid = n.note_id JOIN person p ON p.personid = ln.userid WHERE n.userid = '$userid' LIMIT 3");
					while($like = mysqli_fetch_array($recent))
					{
						echo <<<EOD
						<a href="blog_post.php?id={$like['note_id']}">{$like['name']} likes you post</a><br>
EOD;

					}
				echo "</div>";
				?>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#showrecent').click(function(){
				$('#recentlike').show();
				$(this).hide();
			});
		});
	</script>
<!-- /END 1. team -->   

<!-- BEGIN blog left -->
<div class="blog_left" style="border: none">
<?php
	$page = $_GET['page'];
	$page = (int) $page;
	if($page == NULL)
	{
		$page = 0;
	}
else
{
	$page = ($page-1) *10;
}
    $result = mysqli_query($con, "SELECT * FROM 
    (SELECT COUNT(l.userid) ct, n.note_id, n.userid, n.topic, n.text, n.path, n.date 
    FROM Notes n LEFT JOIN likenote l ON n.note_id = l.noteid 
    GROUP BY n.note_id ORDER BY ct DESC) AS t1 
    JOIN person p ON t1.userid = p.personid WHERE t1.userid = $userid ORDER BY note_id DESC LIMIT $page, 10");
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
		<div class="blog_left_content" style='width:960px;'>
			<div class="blog_content_info">
				<div class="blog_content_date">{$date}<br /><span>{$array[$month]}</span></div>
				<a>
					<h3 class="like" id="like" data="{$row['note_id']}">Like</h3>
					<a class="comment_number" id="like{$row['note_id']}" data = "{$row['ct']}">{$row['ct']}</a>
				</a>
				<div class="blog_content_author"><span>Author</span><br />{$row['name']}</div>
			</div>
			<div class="blog_content_inner" style='width:700px;'>
EOD;
if($row['path'] != "")
{
			echo <<<EOD
				<div class="blog_content_image theme-default">
						<img src="{$row['path']}" alt="" />
				</div>
EOD;
}
				echo <<<EOD
				<h3>{$row['topic']}</h3>
				<div class="blog" style="text-overflow:ellipsis;overflow:hidden;">
				{$row['text']}
				</div>
				<a class="con_button con_button2" href="blog_post.php?id={$row['note_id']}">
					<span class="con_button_text">Comment</span>
					<span class="con_button_arrow">
						<span>Comment</span>
					</span>
				</a>
				<div class="clear"></div>
			</div>
				<div class="clear"></div>
		</div>
EOD;
	}
	$query = mysqli_query($con, "SELECT COUNT(note_id) cn FROM Notes WHERE userid = $userid");
	$count = mysqli_fetch_array($query);
	$page = $count['cn']/10 + 1;
	if($page>2)
	{
		echo <<<EOD
		  <ul class="filterOptionsblog">
    		<li><a href="blog.php?page=1" class="all ">FIRST</a></li>
EOD;
    	for($i=1; $i<$page; $i++)
	{
		echo <<<EOD
		<li><a href="blog.php?page=$i">$i</a></li>
EOD;
	}
	echo <<<EOD
	<li><a href="blog.php?page={$page}" class="all">LAST</a></li>
	</ul>
EOD;
	}


?>

</div>
<!-- /END blog left -->


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
<!-- /END footer -->
<script>
$(document).ready(function(){
	$('.like').click(function(){
		var nid = $(this).attr('data');
		var pro = $('#like'+nid).attr('data');
		pro++;
		document.getElementById('like'+nid).innerHTML = pro;
		$.post('./likenote.php',{userid: <?php echo $userid;?>, noteid: nid});
	});
});
</script>
</body>
</html>