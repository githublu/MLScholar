
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
$class = 0;
$email = $_COOKIE["ID_my_site"];
//$userid = getuserid($email);
$query = mysqli_query($con, "SELECT * FROM person WHERE email = '$email'");
$row = mysqli_fetch_array($query);
	$userid = $row['personid'];
	$name = $row['name'];

		}
else{
	 require "./class/headerfile.php";
 	$header = new headerfile(); $header->render();
	$userid = 0;
	$name = "anonymous user";
}
	?>
<body>
<script>
	$( document ).ready(function() {
		$('.listbox').hide();
	     $("#search").keyup(function () {
	      var value = $(this).val();
	      var class_num = "<?php echo $class;?>";
	       $.post('check.php',{word:value, classnum: class_num},function(data){
	       	if(data != "")
	       	{
	       		document.getElementById('show').innerHTML = data;
	       		$('.listbox').show();
	       	}
	       
	       })
	    }).keyup();
	      });
	
</script>


<!-- BEGIN menu -->
<header class="header_silverbackground">
	<div class="menu">
		<!-- BEGIN logo -->
		<!-- /END logo -->
		<div class="postposition">
			<div class="logo"<a href="blog.php" style="color: #FFF">Tell Happiness</a></div>
			<div class="middlebox">
				<input class="postbtn searchtext" id = "search" type="text" placeholder="search questions">	
				<input id="loc" class="postbtn" style="width:80px" type="submit" value = "Ask">
				<div class="listbox" id = "show">

				</div>
			</div>
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

<div class="href_path_link"><h6>YOU ARE HERE: <a href="blog.php">HOME</a>>Latest</h6></div>
<div class="href_path_about"><h2>Most recent Happy Moment</h2></div>
<!-- BEGIN blog left -->
<div class="blog_left">
<?php
	$page = $_GET['page'];
	$page = (int) $page;
	if($page == NULL)
	{
		$page = 0;
	}
else
{
	$page = ($page-1) *20;
}
    $result = mysqli_query($con, "SELECT * FROM 
    (SELECT COUNT(l.userid) ct, n.note_id, n.userid, n.topic, n.text, n.path, n.date 
    FROM Notes n LEFT JOIN likenote l ON n.note_id = l.noteid 
    GROUP BY n.note_id ORDER BY ct DESC) AS t1 
    JOIN person p ON t1.userid = p.personid ORDER BY note_id DESC LIMIT $page, 20");
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
		if($row['path'] == "")
		{
			$path = '';
		}
		else
			{
				$path = "http://tellhappiness.com/".$row['path'];
			}
		echo <<<EOD
		<div class="blog_left_content">
			<div class="blog_content_info">
				<div class="blog_content_date">{$date}<br /><span>{$array[$month]}</span></div>
				<div class="blog_content_author"><span>Author</span><br />{$row['name']}</div>
				<div class="fb-share-button" data-href="http://tellhappiness.com/blog_post.php?id={$row['note_id']}" data-type="button_count"></div>

				<script type="text/javascript" src="http://widget.renren.com/js/rrshare.js"></script>
				<a name="xn_share" onclick="shareClick('http://tellhappiness.com/blog_post.php?id={$row['note_id']}', 'http://tellhappiness.com/blog_post.php?id={$row['note_id']}', '{$path}', '{$row['topic']}', '{$row['text']}')" type="icon_medium" href="javascript:;"></a>
			
			</div>
			<div class="blog_content_inner">
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
				<a href='blog_post.php?id={$row['note_id']}' style='color:#807f7f'>
				<h3>{$row['topic']}</h3>
				<div class="blog" style="text-overflow:ellipsis;overflow:hidden;">
				{$row['text']}
				</div>
				</a>
				<div class="blog answer">
				here is a sample answer
				</div>
				<div class="padd-left">
					  <textarea id="comment" class="text_area" style="	width: 84%;height:30px;padding: 5px 0px 0px 10px;font-size: 12pt;" name="message" rows="8" cols="30" placeholder="quick answer"></textarea>
					  <a class="con_button con_button2 right marg-bott quick_btn" id="postcomment">
					  	<span class="con_button_text" style="margin-left: 0px; padding: 6px 10px 3px;">POST</span><span class="con_button_arrow" style="left: 99px;">
					  		<span>POST</span>
					  		</span>
					  </a>
				</div>
				<div class="clear"></div>
			</div>
				<div class="clear"></div>
		</div>
EOD;
	}
$query = mysqli_query($con, "SELECT COUNT(note_id) cn FROM Notes");
	$count = mysqli_fetch_array($query);
	$page = $count['cn']/20 + 1;
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


<!-- BEGIN blog right -->
<div class="blog_right">
    
<?php
	echo <<<EOD
	    <div class="widget widget-tabs-wrapper tabs">
           
	<ul class="widgetTabs tabs-nav">
		<li class="popular"><a href="#tab-pop">Happiest</a></li>
		<li class="latest"><a href="#tab-latest">POPULAR</a></li>
	</ul>
            
	<div class="clear"></div>
	<div class="widget-tabs-inside tabs-container">
EOD;
echo "	<ul id='tab-pop' class='widget_recent_posts tab-content'> ";
	    $result = mysqli_query($con, "SELECT * FROM 
    (SELECT COUNT(l.userid) ct, n.note_id, n.userid, n.topic, n.text, n.path, n.date 
    FROM Notes n LEFT JOIN likenote l ON n.note_id = l.noteid 
    GROUP BY n.note_id ORDER BY ct DESC) AS t1 
    JOIN person p ON t1.userid = p.personid ORDER BY ct DESC LIMIT 5");
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
	$result = mysqli_query($con, "SELECT COUNT(c.id) ct, n.date, n.note_id, n.topic, n.text FROM Notes n LEFT JOIN comment c ON n.note_id = c.noteid GROUP BY n.note_id ORDER BY ct DESC LIMIT 5;");
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

<!-- /END footer -->
	<script type="text/javascript">
					function shareClick(rurl,surl, pic, title, descr) {
						var rrShareParam = {
							resourceUrl : rurl,
							srcUrl : surl,
							pic : pic,
							title : title,
							description : descr
						};
						rrShareOnclick(rrShareParam);
					}
</script>
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