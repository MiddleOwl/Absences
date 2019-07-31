<?php

	function check_woodien($login,$password){
		
		include(dirname(__FILE__)."/../hidden/connexion.php");
		$query = $bdd->query('select mailboxGandi FROM woodiens WHERE login="'.$login.'" AND password="'.$password.'"');
		$mailbox = $query->fetch();
		$query->closeCursor();
		return($mailbox);		
	}

?>