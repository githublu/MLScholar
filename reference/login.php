<?php
	require_once('./common/library.php');
	include './common/function.php';
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	$email = $_POST['email'];
	$email = replace($email);
$check = mysqli_query($con, "SELECT * FROM User WHERE email = '$email'")or die(mysqli_error());
 //Gives error if user dosen't exist

 $check2 = mysqli_num_rows($check);
 if($check2 == 0)
 {
 	echo 0; //username wrong
 }
 else{
	 	 $info = mysqli_fetch_array( $check );
		 	$tmpass = $_POST['password'];
		 	if ($tmpass != $info['password']) {
		 		echo 1; //password wrong
			}
			else {
			 	 $hour = time() + 36000; 
				$usr = $_POST['email'];
				$pass = $_POST['password'];
				 setcookie(ID_my_site, $usr, $hour);
				 setcookie(Key_my_site, $pass, $hour);	 
				if($_POST['rememberMe'] ==1)
				{
					$year = time() + 31536000;
				setcookie(remember_me, $usr, $year);
				 setcookie(Key_my_site, $pass, $year);	
				}
				echo 2; // all right
			}
		 
 	}
?>