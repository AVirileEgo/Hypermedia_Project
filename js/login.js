
$(function() {

	$('#login').submit(function(event) {
	
		var $form = $(this);
		var url = $form.attr('action');
		var email = $('#Telefono1', $form).val();
		var pwd = $('#Password1', $form).val();
		var data = 'Telefono1=' + email + '&Password1=' + pwd;
		
		$.ajax({
			type: 'POST',
			dataType: 'html',
			url: url,
			data: data,
			success: function(html) {
			
				$('div.message', $form).remove();
			
				$(html).prependTo($('ul', $form));
			if($(html)!='Password errata')
                {
                    window.location.href='www.google.com';
                }
			}
			
		});
		
	
		event.preventDefault();
	
	});

});