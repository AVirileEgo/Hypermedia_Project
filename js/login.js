
$(function() {

	$('#login').submit(function(event) {
	
		var $form = $(this);
		var url = $form.attr('action');
		var email = $('#Telefono1', $form).val();
		var pwd = $('#Password1', $form).val();
        var idCliente = $('#idCliente1', $form).val();
		var data ='idCliente1=' + idCliente + '&Telefono1=' + email + '&Password1=' + pwd;
		
		$.ajax({
			type: 'POST',
			dataType: 'html',
			url: url,
			data: data,
			success: function(html) {
                $('div.message', $form).remove();
			
				$(html).prependTo($('ul', $form));
			if(html=='<div class="success message">Login effettuato con successo</div>'){
				 window.location.href='http:MYSTIM.html?type=codice&id='+idCliente;}
			}
			
		});
		
	
		event.preventDefault();
	
	});

});