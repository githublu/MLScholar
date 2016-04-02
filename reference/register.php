<?php
require './function.php';
	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);
	$name = $_POST['name'];
	$name = replace($name);
	$email = $_POST['email'];
	$email = replace($email);
	$password = $_POST['password'];
	$password = replace($password);
 $check = mysqli_query($con, "SELECT email FROM person WHERE email = '$email'");
 $check2 = mysqli_num_rows($check);
 if ($check2 != 0) {
 	echo 0;
 				}
 else{
 	$query = mysqli_query($con, "INSERT INTO person (name, email, password)
 	VALUES ('$name', '$email', '$password')");
				 	 $hour = time() + 36000; 
				 setcookie(ID_my_site, $email, $hour);
				 setcookie(Key_my_site, $password, $hour);	 
				if($_POST['rememberMe'] ==1)
				{
					$year = time() + 31536000;
				setcookie(remember_me, $email, $year);
				 setcookie(Key_my_site, $password, $year);	
				}
	echo 1;
	 $to = $email;
	 $subject = "Thank you for registering Tellhappniess.com";
	 $message = "Dear Tellhappiness user, thank you for resigering. You can log in Tellhappiness.com by using your email account and password Now."
	            ."Welcome to "."www.tellhappiness.com";
	 $from = "info@tellhappiness.com";
	 $headers = "From:" . $from;
	 mail($to,$subject,$message,$headers);
 }

?>