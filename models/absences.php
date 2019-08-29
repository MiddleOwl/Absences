<?php

	function check_woodien($login,$password){
		
		include(dirname(__FILE__)."/../hidden/connexion.php");
		$query = $bdd->query('select mailboxGandi,prenom,nom FROM woodiens WHERE login="'.$login.'" AND password="'.$password.'"');
		$mailbox = $query->fetch();
		$query->closeCursor();
		return($mailbox);		
	}
	
	function activateResponder($domain,$login,$content,$startDate){
		
		require_once 'XML/RPC2/Client.php';
	
		$apikey='8wzb8pbpOkqpzJs6L14jKOXE';
		$api = XML_RPC2_Client::create(
			'https://rpc.gandi.net/xmlrpc/',
			array( 'prefix' => 'domain.','sslverify=>False')
		);
		$params=[
			'content'=>$content,
			'date'=>$startDate,
		];
		$result = $api->__call('mailbox.responder.activate',array($apikey,$domain,$login,$params));
		//print_r($result);
		
	}	
	
	function deactivateResponder($domain,$login,$endDate){
		
		require_once 'XML/RPC2/Client.php';
		
		$apikey='8wzb8pbpOkqpzJs6L14jKOXE';
		$api = XML_RPC2_Client::create(
			'https://rpc.gandi.net/xmlrpc/',
			array( 'prefix' => 'domain.','sslverify=>False')
		);
		$params=[
			
			'date'=>$endDate,
		];
		$result = $api->__CALL('mailbox.responder.deactivate',array($apikey,$domain,$login,$params));
		
	}

?>