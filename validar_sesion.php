<?php
	session_start();
	//var_dump($_SESSION);
	if( isset($_SESSION['username']) == false ){
		header("location: logueo.php");
	}
	
?>