<?php $title="Programmer un message d'absence";?>
<?php ob_start();?>

	<p>Hello <?php echo($prenom_user) ?> ! Pour programmer ton message d'absence, c'est ici: </p>
	
	<p><label for "mailbox">Ta mailbox:</label>
		<input id="mailbox" value= <?php echo($mailbox)?> readonly="true"/>
	</p>
	
	<p><label for "message">Ton message d'absence: </label>
		<textarea id="content" rows="5" cols="50"></textarea>
	</p>
	
	<p><label for "startDate">Début: </label>
		<input id="start_date" type="date"/>
	</p>
	
	<p><label for "endDate">Fin: </label>
		<input id="end_date" type="date"/>
	</p>
	
	<input id="activateResponder" type="submit" value = "Activer mon répondeur!"/>

<?php $content=ob_get_clean();?>
<?php include(dirname(__FILE__)."/../template/template.php");?>