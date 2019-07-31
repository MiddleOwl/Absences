$(document).ready(function(){

	$('#bouton_connexion').click(function(){
		
		$.post(
			'index.php?page=login',
			{
				login:$('#login').val(),
				password:$('#password').val(),
			},
			
			function(data){
				alert(typeof data+' '+data.valueOf());
				if(data=='ok'){
					
					alert('ok');
					
				}
				else{
					
					alert('nook');					
				}				
			},
			"text"
		);
		
	});

});