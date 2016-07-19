$( document ).ready(function() {

				$.getJSON( "php/ordini.php?type=cliente&id="+QueryString.id)
                .done(function(json){
                    

                    if(json[0].Totale!=undefined){ 
                        for(i=0;i<json.length;i++)
                        {
                        var div="<div class=\"col-lg-6 col-sm-6 col-xs-6\"style=\"background: transparent\" ><H5>"+json[i].Data+"</H5></div><div class=\"col-lg-6 col-sm-6 col-xs-6\" style=\"background: transparent\" ><h5>"+json[i].Totale+"</H5></div>"
                        $("#ordine").append(div);
                                
                            }}
                        
                    else 
                    {
                        var div="<div class=\"col-lg-12 col-sm-12 col-xs-12\" style=\" padding:10px;\"><h4 style=\"color:grey;\"><b>NON HAI EFFETTUATO NESSUN ORDINE<br/><br/>Cerca il prodotto piu adatto a te nella pagina Prodotti</b></h4></div>"
                    $("#ordine").append(div)
                    }
                    
                   
                    
                          })
                .fail(function(){alert("errore")});
                });