<?php

	session_start();
	
	include(dirname(__FILE__)."/../models/absences.php");
	$login=$_POST['login'];
	$password=$_POST['password'];
	$mailbox=check_woodien($login,$password)[0];
	$result=(!empty($mailbox))?1:0;
	echo($result);
	
	$_SESSION['prenom']=check_woodien($login,$password)[1];
	
	$_SESSION['mailbox']=check_woodien($login,$password)[0];
	
	
?>