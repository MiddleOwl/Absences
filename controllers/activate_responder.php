<?php
	
	include(dirname(__FILE__)."/../models/absences.php");
	
	
	$domain='mobilwood.com';	
	$login=$_POST['login'];
	$content=$_POST['content'];
	$startDate=$_POST['startdate'];
	$endDate=$_POST['enddate'];
	
	
		
	activateResponder($domain,$login,$content,$startDate);
	deactivateResponder($domain,$login,$endDate);
	
	echo('Ton répondeur est activé!');
	
	
	
?>

