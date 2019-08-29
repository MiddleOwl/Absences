<?php $title="Absences - Programmer un message";?>
<?php ob_start();?>

	<p id="exergue">Hello <span id="prenom_user"><?php echo($prenom_user) ?></span> ! Pour programmer ton message d'absence, c'est ici: </p>
	
	<div id="formulaire_scheduler">
		<p id="ta_mailbox"><label for = "mailbox">Ta mailbox:</label>
			<input id="mailbox" value= <?php echo($mailbox)?> disabled="disabled"/>
		</p>
		
		<div id="bloc_message">
			<p id="ton_message"><label for = "message">Ton message d'absence: </label>
				<p><textarea id="content" rows="5" cols="70"></textarea></p>
			</p>
		</div>
		
		<p id="debut"><label for = "startDate">Date de début: </label>
			<input id="start_date" type="date"/>
		</p>
		
		<p id="fin"><label for = "endDate">Date de fin: </label>
			<input id="end_date" type="date"/>
		</p>
		
		<p id="activate"><input id="activateResponder" type="button" value = "Activer mon répondeur!"/></p>
	</div>

<?php $content=ob_get_clean();?>
<?php include(dirname(__FILE__)."/../template/template.php");?>