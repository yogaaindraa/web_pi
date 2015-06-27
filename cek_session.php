<?
		   session_start();
		   if(!session_is_registered(user)){
			
			header ("location:login.php");
			exit();
		}
?>