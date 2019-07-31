<?php
	include(dirname(__FILE__)."/../models/absences.php");
	$login=$_POST['login'];
	$password=$_POST['password'];
	$mailbox=check_woodien($login,$password)[0];
	$result=(!empty($mailbox))?'ok':'nook';
	echo($result);
	
	
?>