$(document).ready(function(){

	$('#bouton_connexion').click(function(){
		
		$.post(
			'index.php?page=login',
			{
				login:$('#login').val(),
				password:$('#password').val(),
			},
			
			function(data){
				alert(data);
				
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

});