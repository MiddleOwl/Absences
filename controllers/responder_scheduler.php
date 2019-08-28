<?php

	session_start();
	
	$prenom_user=$_SESSION['prenom'];
	$mailbox=$_SESSION['mailbox'];
	
	include(dirname(__FILE__)."/../views/responder_scheduler.php");

?>