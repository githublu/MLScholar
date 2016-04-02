<?php
	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	$commenter = $_POST['commenter'];
	$noteid = $_POST['noteid'];
	$comment = $_POST['comment'];
	$replyto = $_POST['replyto'];
	$position = $_POST['position'];
	$result = mysqli_query($con,"INSERT INTO comment (noteid, commenter, comment, date, replyto, position)
	VALUES 
		('$noteid', '$commenter', '$comment',(select NOW()), '$replyto', '$position')");
	$query = mysqli_query($con, "SELCT * FROM person WHERE personid = $commenter");
	$row = mysqli_fetch_array($query);
			echo <<<EOD
	<div class="comment_cont">
		<div class="com_image">
	  		<img src="images/blog/avatar.jpg" alt="avatar" />
		</div>
	 	<div class="com_inf">
	 		<ul class="ul_information no-marg-top padd-left">
	        	<li class="bebas">{$row['name']}</li>
	        	<li>today</li>
	   		</ul>
	 	</div>
	 	<div class="clear"></div>
			<div class="blogcomment">
				{$comment}
			</div>
		<ul id="filterOptionsComm">
	    	<li><a href="#">REPLY TO THIS COMMENT</a></li>
	   </ul>
	</div>
EOD;

?>