
			$( document ).ready(function() {

				$.getJSON( "php/allcat.php?type=allcat")
                .done(function(json){
                    
                    for(i=0;i<4;i++){
                    
                     var div= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\" ><div class=\"bordo\"><div class=\"immagine\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\"src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p class=\"nome\"><b>"+json[i].Nome+"</b></p><p class=\"prezzo\">"+json[i].Prezzo+" €</p></div></div>"
                    $("#elenco").append(div);
                    }
                
                    
                    for(i=4;i<8;i++){
                    
                     var div= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\" ><div class=\"bordo\"><div class=\"immagine\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\"src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p class=\"nome\"><b>"+json[i].Nome+"</b></p><p class=\"prezzo\">"+json[i].Prezzo+" €</p></div></div>"
                    $("#elenco2").append(div);
                    }
                    
                    for(i=8;i<12;i++){
                    
                     var div= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\" ><div class=\"bordo\"><div class=\"immagine\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\"src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p class=\"nome\"><b>"+json[i].Nome+"</b></p><p class=\"prezzo\">"+json[i].Prezzo+" €</p></div></div>"
                    $("#elenco3").append(div);
                    }
                    
                    
                    for(i=12;i<16;i++){
                    
                     var div= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\" ><div class=\"bordo\"><div class=\"immagine\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\"src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p class=\"nome\"><b>"+json[i].Nome+"</b></p><p class=\"prezzo\">"+json[i].Prezzo+" €</p></div></div>"
                    $("#elenco4").append(div);
                    }
  	
                    

                   
                          })
                .fail(function(){alert("errore")});
                });

    

			$( document ).ready(function() {

				$.getJSON( "php/AllProd.php?type=allprod")
                .done(function(json){
                    
                    for(i=0;json.length;i++){
                        if(json[i].Categoria==1)
                        {
                            var cat1= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\"><div class=\"bordo\" style=\"padding-top:10px; margin:5px;\"><div class=\"immagine\" style=\"padding:10px;\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\" src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p id=\"Prezzo\">"+json[i].Nome+"</p><p class=\"prezzo\">"+json[i].Prezzo+" € </p></div></div>"
                            $("#home").append(cat1);
                        }
                        else
                        {
                            if(json[i].Categoria==2)
                        {
                            var cat2= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\"><div class=\"bordo\" style=\"padding-top:10px; margin:5px;\"><div class=\"immagine\" style=\"padding:10px;\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\" src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p id=\"Prezzo\">"+json[i].Nome+" </p><p class=\"prezzo\">"+json[i].Prezzo+" €</p></div></div>"
                            $("#menu1").append(cat2);
                        }
                            else
                            {
                               if(json[i].Categoria==3)
                        {
                            var cat3= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\"><div class=\"bordo\" style=\"padding-top:10px; margin:5px;\"><div class=\"immagine\" style=\"padding:10px;\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\" src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p id=\"Prezzo\">"+json[i].Nome+" €</p><p class=\"prezzo\">"+json[i].Prezzo+"</p></div></div>"
                            $("#menu2").append(cat3);
                        } 
                                else
                                {
                                    var cat4= "<div class=\"col-lg-3 col-sm-3 col-xs-6\" style=\"background: transparent\"><div class=\"bordo\" style=\"padding-top:10px; margin:5px;\"><div class=\"immagine\" style=\"padding:10px;\"><a href=\"/Prodotto.html?type=smartphone&prodotto="+json[i].idProdotto+"\"><img class=\"flex zoom2\" style=\"border:0px;\" src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" ></a></div><p id=\"Prezzo\">"+json[i].Nome+" €</p><p class=\"prezzo\">"+json[i].Prezzo+"</p></div></div>"
                            $("#menu3").append(cat4);
                                    
                                }
                            }
                        }
                    }
  	
                    

                   
                          })
                .fail(function(){alert("errore")});
                });
