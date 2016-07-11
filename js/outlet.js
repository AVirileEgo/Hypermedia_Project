$( document ).ready(function() {

				$.getJSON( "php/outlet.php?type=outlet")
                .done(function(json){
                    
                    for(i=0;i<json.length;i++){
                    
                    var div="<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\"><div class=\"bordo\" style=\"padding-top:10px; margin:5px; min-height:340px;\"><div class=\"immagine\" style=\"padding:10px;\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\" src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p id=\"Prezzo\">"+json[i].Nome+" €</p><p class=\"prezzo\">"+json[i].Prezzo+"</p></div></div>";
                    $("#outlet").append(div);
                    }
                
                    

                   
                          })
                .fail(function(){alert("errore")});
                });