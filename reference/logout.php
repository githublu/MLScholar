<?php
ob_start(); 
   				//$userid = $_GET['userid'];
//					updatePerson($userid,'online',0);
//					updatePersonLoc($userid,$_SESSION['lat'],$_SESSION['lng'],$address);
					   $con = mysql_connect("127.0.0.1","root","422501");
        if (!$con)
        {
        die('Could not connect: ' . mysql_error());
         }
    
    mysql_select_db("neiborhoos", $con);
    
    mysql_query("UPDATE Person SET online=0
    WHERE id= '$userid'");
//				      session_destroy(); 
					$past = time() - 100; 
					//this makes the time in the past to destroy the cookie 
				       
					setcookie(ID_my_site, gone, $past); 
					setcookie(Key_my_site, gone, $past);
					setcookie(remember_me, gone, $past);
					 
					header("Location: index.php"); 
					ob_flush();
?>