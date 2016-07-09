$( document ).ready(function() {

				$.getJSON( "php/Prodotto.php?type=smartphone&prodotto="+QueryString.prodotto)
                .done(function(json){
                    

                    var Nome=json[0].Nome;
                    $("#Nome").prepend(Nome);
                    var Percorso=json[0].Nome;
                    $("#Percorso").prepend(Percorso);
                    var Marca=json[0].Marca;
                    $("#Marca").prepend(Marca);
                    var Prezzo=json[0].Prezzo;
                    $("#Prezzo").prepend(Prezzo);
                    var Descrizione=json[0].Descrizione;
                    $("#Descrizione").prepend(Descrizione);
                    var Caratteristiche=json[0].Caratteristiche;
                    $("#Caratteristiche").prepend(Caratteristiche);
                    var Specifiche=json[0].Specifiche;
                    $("#Specifiche").prepend(Specifiche);
                    var titolopag="Prodotti | "+json[0].Marca+" "+json[0].Nome;
                    $("#titolopag").prepend(titolopag);

                    
                    if(json[0].imgSL!=undefined){
                        var div="<div class=\"col-lg-4 col-sm-4 col-xs-12\" style=\" padding:10px;\"><img class=\"zoom2 flex\" src=\"img/SmartLife/"+json[0].imgSL+"\"></div>"
                        $("#cicloofferte").append(div);
                        appoggio= new Array();
                        appoggio.push(json[0].imgSL);
                        
                        
                        if(json.length>0){
                        for(i=1;i<json.length;i++)
                        {
                            verifica=1;
                            for (y=0;y<i;y++)
                            {
                                if(json[i].imgSL==appoggio[y])
                                {
                                    verifica=0;
                                }
                            }
                            if (verifica!=0){
                                var div="<div class=\"col-lg-4 col-sm-4 col-xs-12\" style=\" padding:10px;\"><img class=\"zoom2 flex\" src=\"img/SmartLife/"+json[y].imgSL+"\"></div>"
                                $("#cicloofferte").append(div);
                                appoggio.push(json[y].imgSL);
                            }
                        }
                        
                        }
                        
                        }
                    else 
                    {
                        var div="<div class=\"col-lg-12 col-sm-12 col-xs-12\" style=\" padding:10px;\"><h4 style=\"color:grey;\"><b>CI DISPIACE!!<br/><br/>Al momento esistono offerte abbinabili all'acquisto di questo prodotto</b></h4></div>"
                    $("#cicloofferte").append(div)
                    }
                    
                    
                    
                    var Immagine1="<img src=\"img/Prodotti/"+json[0].IMG_front+"\" alt=\"errore caricamento img\">";
                    $("#Immagine1").append(Immagine1);
                    
                    var Immagine2="<img src=\"img/Prodotti/"+json[0].IMG_side+"\" alt=\"errore caricamento img\">";
                    $("#Immagine2").append(Immagine2);
                    
                    var Immagine3="<img src=\"img/Prodotti/"+json[0].IMG_back+"\" alt=\"errore caricamento img\">";
                    $("#Immagine3").append(Immagine3);
                    
                   
                    
                    
                    
                    if(json[0].Titolo!=undefined){
                        var div1="<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a href=\"assistenza.html\" style=\"text-decoration: none\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[0].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                        $("#cicloassistenza").append(div1);
                        appoggio1= new Array();
                        appoggio1.push(json[0].Titolo);
                        
                        
                        if(json[1].Titolo!=undefined){
                        for(i=1;i<json.length;i++)
                        {
                            verifica=1;
                            for (y=0;y<i;y++)
                            {
                                if(json[i].Titolo==appoggio1[y])
                                {
                                    verifica=0;
                                }
                            }
                            if (verifica!=0){
                                var div1="<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a href=\"assistenza.html\" style=\"text-decoration: none\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[y].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                                $("#cicloassistenza").append(div1);
                                appoggio1.push(json[y].Titolo);
                            }
                        }
                        
                        }
                        
                        }
                    else 
                    {
                        var div1="<div class=\"col-lg-12 col-sm-12 col-xs-12\" style=\" padding:10px;\"><h4 style=\"color:grey;\"><b>CI DISPIACE!!<br/><br/>Al momento esistono pagine di assistenza per questo prodotto</b></h4></div>"
                        $("#cicloassistenza").append(div1)
                    }
                    
                    
                          })
                .fail(function(){alert("errore")});
                });