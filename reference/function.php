<?php
 	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	
function replace($text){
$last = addslashes($text);
$last = htmlspecialchars($last);
$last = trim($last);
return $last;
}

function updatepath ($question)
{
	$query = "";
	$result = mysqli_query($con, $query);
}


?>