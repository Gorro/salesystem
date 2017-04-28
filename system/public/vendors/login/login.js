$(document).ready(function() {
	var login = $('#login');
	var token = $('#token').val();
	login.submit(function(e) {
		e.preventDefault();
		
		$.ajax({
			url: 'admin',
			headers: {'X-CSRF-TOKEN': token} ,
			type: 'POST',
			dataType: 'json',
			data: login.serialize()
		})
		.done(function(response) {
			if(response.msg){
				window.location.href = response.ruta;
			}else{
				console.log(response.resp);
			}
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
});