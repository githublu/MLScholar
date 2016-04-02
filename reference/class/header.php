<?php
class headtop{


	public function render(){
echo <<<EOD
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
	 	<li><a href="profile.php">{$name}</a>
	 	</li      
	</ul>
	</div>
	<div class="clear"></div>
    </div> 
</header>
EOD;


	}
}
?>


