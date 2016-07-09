$( document ).ready(function() {

				$.getJSON( "php/Allassistenze.php?type=allass")
                .done(function(json){
                    
                    for(i=0;i<json.length;i++){
                    
                        
                        
                   var elenco= "<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a style=\"text-decoration:none;\" href=\"/assistenza.html?type=assistenza&codice="+json[i].idAssistenza+"\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[i].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                    $("#allass").append(elenco);
                    }
                   
                          })
                .fail(function(){alert("errore")});
                });