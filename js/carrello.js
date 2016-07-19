$( document ).ready(function() {

				$.getJSON( "php/carrello.php?type=carrello&car="+QueryString.car)
                .done(function(json){
                    
                    var totale=0;
                    
                    for(i=0;i<json.length;i++){
                    
                     var div="<div class=\"col-lg-4 col-sm-4 col-xs-4\" ><img src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" style=\"height:100px;\"/></div><div class=\"col-lg-4 col-sm-4 col-xs-4\" style=\"height:100px;padding-top:25px;\" ><h3>"+json[i].Nome+"</h3></div><div class=\"col-lg-4 col-sm-4 col-xs-4\" style=\"height:100px;padding-top:25px;\"><h3 style=\"color:red;\">"+json[i].Prezzo+"</h3></div>"
                    $("#elenco").append(div);
                        var x=parseFloat(json[i].Prezzo);
                        var totale=x+totale;
                        
                    }
                    if(totale==0)
                    {
                        var div="<div class=\"col-lg-12 col-sm-12 col-xs-12\" style=\" padding:10px;\"><h4 style=\"color:grey;\"><b>NESSUN PRODOTTO NEL CARRELL0!!<br/></h4></div>"
                    $("#elenco").append(div);
                        
                    }

                    $("#totale").append(totale);
                    

                   
                          })
                .fail(function(){alert("errore")});
                });