<?php
class panel_widget{
	public function __construct(){
	}

	public function render(){
	require_once('../library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
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
	    $result = mysqli_query($con, "SELECT * FROM Notes n JOIN person p ON n.userid = p.personid ORDER BY n.date DESC LIMIT 3");
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
	$result = mysqli_query($con, "SELECT * FROM (SELECT COUNT(c.id) ct, n.date, n.note_id, n.topic, n.text FROM Notes n LEFT JOIN comment c ON n.note_id = c.noteid) AS t1 ORDER BY ct DESC LIMIT 3;");
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
}
}
?>


