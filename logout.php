<?php
   session_start();
   if($_SESSION['customer_login_status']!="loged in" and ! isset($_SESSION['email']) )
    header("Location:homepage.php");
   
   if(isset($_GET['sign']) and $_GET['sign']=="out") {
	$_SESSION['customer_login_status']="loged out";
	unset($_SESSION['email']);
   header("Location:../homepage.php");    
   }
?>

