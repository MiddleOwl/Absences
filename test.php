<?php

	require_once 'XML/RPC2/Client.php';
	
	
	$api = XML_RPC2_Client::create(
		'https://rpc.gandi.net/xmlrpc/',
		array( 'prefix' => 'domain.','sslverify=>False')
	);
	
	define('API_KEY','8wzb8pbpOkqpzJs6L14jKOXE');
	function activateResponder($api,$domain,$login,$content,$date){
		
		$params=[
			'content'=>$content,
			'date'=>$date,
		];
		$result = $api->__call('mailbox.responder.activate',array(API_KEY,$domain,$login,$params));
		print_r($result);
	}
	$domain='mobilwood.com';	
	$login='vianney.bancillon';
	$content="In vacation";
	$date='2019-07-31';
	//activateResponder($api,$domain,$login,$content,$date);
	
	
	
	
?>

