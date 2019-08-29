<?php $title = "Absence - Authentification"; ?>
<?php ob_start(); ?>
	
	<p id="exergue">
		Authentifie-toi pour programmer ton répondeur automatique!
	</p>
	
	<div id="bloc_connexion">
		
			<p id="identifiant"><label for = "identifiant">Ton identifiant: </label><br />
				<input type="text" name="login" id="login" size="28" placeholder="prenom.nom@mobilwood.com" required/>
			</p>
			
			<p id="pwd"><label for = "pwd">Ton pass de messagerie: </label><br />
				<input type="password" name="password" id="password" size="28" required/>				
			</p>			
			<input id="bouton_connexion" type="submit" value="Se connecter"/>
			
		
	</div>
				
	
<?php $content = ob_get_clean(); ?>


<?php include(dirname(__FILE__)."/../template/template.php");?>
