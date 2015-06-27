<?php
	session_start();
	if($user =="A11.2012.07271" & $password=="admin")
	{

	session_register("user");
	header("location: index.php");
	exit();
	}
	else 
	{
		echo "anda tidak terdaftar" ;

	}

?>