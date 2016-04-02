<?php
$userid = $_POST['userid'];
$nid = $_POST['noteid'];

	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	$result = mysqli_query($con, "INSERT INTO likenote (noteid, userid) 
												VALUES ('$nid', '$userid')");
?>