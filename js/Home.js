$( document ).ready(function() {

				$.getJSON( "php/home.php?type=home")
                .done(function(json){
                	var cod=json[0].idCliente;
                	cod++;
                    var codice="<span class=\"input-group-addon\" id=\"basic-addon1\">ID Cliente:</span> <input style=\"width:60px;\" class=\"form-control\" aria-describedby=\"basic-addon1\" type=\"text\" name=\"idCliente\" id=\"idCliente\" value=\""+cod+"\" readonly/>"
                    $("#codice").append(codice);
                
                   
                          })
                .fail(function(){alert("errore in home.js")});
                });