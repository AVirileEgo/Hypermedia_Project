$( document ).ready(function() {

				$.getJSON( "php/allOfferte.php?type=alloff")
                .done(function(json){
                    
                    for(i=0;i<json.length;i++){
                    
                        
                        
                    var elenco="<div class=\"col-lg-3 col-sm-6 col-xs-12\" style=\"background: transparent; margin-bottom:20px\" ><a href=\"/SmartLife.html?type=offerta&offerta="+json[i].idOfferta+"\"><img class=\"zoom2\" src=\"img/SmartLife/"+json[i].imgSL+"\"></a></div>"
                    $("#alloff").append(elenco);
                    }
                
                    

                   
                          })
                .fail(function(){alert("errore")});
                });