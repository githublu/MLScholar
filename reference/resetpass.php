<?php
$email = $_POST['email'];
	require_once('./library.php');
	$con = new mysqli($SERVER, $USERNAME, $PASSWORD, $DATABASE);

	$result = mysqli_query($con, "SELECT COUNT(personid) FROM person WHERE email='$email'");
	$count = mysqli_fetch_array($result);
	if($count[0] == 0)
	{
		echo 0;
	}
else {
				$newpass = rand(100000, 999999);
			$query = mysqli_query($con, "UPDATE person SET password = '$newpass' WHERE email = '$email'");
				 $to = $email;
			 $subject = "You have reset password for Tellhappiness.com";
			 $message = "Dear Tellhappiness user, you have reset your tellhappiness.com password, your new pasword is ".$newpass." Please change your password at profile page by clicking change password. We wish you have a nice day and enjoy happiness we spread";
			 $from = "info@tellhappiness.com";
			 $headers = "From:" . $from;
			 mail($to,$subject,$message,$headers);
			 echo 1;}


?>