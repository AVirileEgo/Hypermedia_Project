$( document ).ready(function() {

				$.getJSON( "php/AllProd.php?type=allprod")
                .done(function(json){
                    
                    for(i=0;i<json.length;i++){
                    
                    var elenco="<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\" background: transparent\"><div class=\"bordo\" style=\"min-height:340px; padding-top:10px; margin:5px;\"><div class=\"immagine\" style=\"padding:10px;\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\" src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p class=\"nome\" style=\"padding-top:10px;\" id=\"Nome\">"+json[i].Nome+"</p><p class=\"prezzo\" id=\"Prezzo\">"+json[i].Prezzo+" €</p></div></div>";
                    $("#allprod").append(elenco);
                    }
                
                    

                   
                          })
                .fail(function(){alert("errore")});
                });