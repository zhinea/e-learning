(function(window, $){

	$(document).ready(function(){
		
		const password = $('[type="password"]').val();

		if(password !== " "){
			$('.form-password-toggle').removeClass('is-invalid');
		}

	});


})(window, jQuery);