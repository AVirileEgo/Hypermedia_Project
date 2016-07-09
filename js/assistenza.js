$( document ).ready(function() {

				$.getJSON( "php/Assistenza.php?type=assistenza&codice="+QueryString.codice)
                .done(function(json){
                    

                    var Titolo=json[0].Titolo;
                    $("#Titolo").prepend(Titolo);
                    var Descrizione=json[0].Descrizione;
                    $("#Descrizione").prepend(Descrizione);
                    var Percorso=json[0].Titolo;
                    $("#Percorso").prepend(Percorso);

                    
                    
                   if(json[0].IMG_front!=undefined){
                    var  prodotti="<div class=\"col-lg-6 col-sm-6 col-xs-12\" style=\"padding:10px;\"><div style=\"padding-top:10px; margin:5px;\"><div class=\"immagine\"><a href=\"\"><img class=\"flex zoom\"style=\"height:300px;\" src=\"img/Prodotti/"+json[0].IMG_front+"\"></a></div></div></div>"
                    $("#prodotti").append(prodotti);
                    appoggio= new Array();
                    appoggio.push(json[0].IMG_front);
                        
                        
                    if(json.length>0){
                        for(i=1;i<json.length;i++)
                        {
                            verifica=1;
                            for (y=0;y<i;y++)
                            {
                                if(json[i].IMG_front==appoggio[y])
                                {
                                    verifica=0;
                                }
                            }
                            if (verifica!=0){
                            var  prodotti="<div class=\"col-lg-6 col-sm-6 col-xs-12\" style=\"padding:10px;\"><div style=\"padding-top:10px; margin:5px;\"><div class=\"immagine\"><a href=\"\"><img class=\"flex zoom\"style=\"height:300px;\" src=\"img/Prodotti/"+json[y].IMG_front+"\"></a></div></div></div>"
                            $("#prodotti").append(prodotti);
                                appoggio.push(json[y].IMG_front);
                            }
                        }
                        
                        }
                        
                        }
                    else 
                    {
                        var prodotti="<div class=\"col-lg-12 col-sm-12 col-xs-12\" style=\" padding:10px;\"><h4 style=\"color:grey;\"><b>CI DISPIACE!!<br/><br/>Al momento esistono prodotti abbinabili a questa assistenza</b></h4></div>"
                    $("#prodotti").append(prodotti)
                    }
                    
                    
                   
                    
                          })
                .fail(function(){alert("errore")});
                });