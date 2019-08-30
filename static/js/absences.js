$(document).ready(function(){

	$('#bouton_connexion').click(function(){
		
		$.post(
			'index.php?page=login',
			{
				login:$('#login').val(),
				password:$('#password').val(),
			},
			
			function(data){
								
				if(data==1){
					
					location='index.php?page=responder_scheduler';
				}
				else{
					
					alert('login/pass incorrect!');
				}
			},
			"text"
		);
		
	});
	
	
	$('#activateResponder').click(function(){
		var startDate = $('#start_date').val();
		var endDate = $('#end_date').val();
		var friendlyStartDate = startDate.split('-')[2]+'/'+startDate.split('-')[1]+'/'+startDate.split('-')[0];
		var friendlyEndDate = endDate.split('-')[2]+'/'+endDate.split('-')[1]+'/'+endDate.split('-')[0];
		var mailbox=$('#mailbox').val();
		var content = $('#content').val();
		//alert (mailbox);
		
		if(startDate>endDate){
			alert('Tu devrais choisir une date de fin postérieure à date de début!');
		}
		else if(startDate=="" && endDate==""){
			alert('Les dates de début et de fin ne devraient pas être vides');
		}
		else if(content="" || content.length<5){
			alert('Tu es invité à saisir un message d\'absence!');
		}
		else{
			if(confirm('Tu t\'apprêtes à activer ton répondeur pour la période du '+friendlyStartDate+' au '+friendlyEndDate+'. Souhaites tu poursuivre?')){		
				$.post(
					'index.php?page=activate_responder',
					{
						login:mailbox,
						content:content,
						startdate:startDate,
						enddate:endDate
					},
					
					function(data){
						alert(data);
						location='http://ulteria.fr'
					},
					"text"
				)
			}
		}
		
	});

});