			$( document ).ready(function() {

				$.getJSON( "php/AllOfferte.php?type=alloff")
                .done(function(json){
                    
                    for(i=0;i<4;i++)
                    {
                        var evidenza= "<div class=\"col-lg-3 col-sm-6 col-xs-6\" style=\"background: transparent; margin-bottom:20px\" ><a href=\"/SmartLife.html?type=offerta&offerta="+json[i].idOfferta+"\"><img class=\"zoom2\" src=\"img/SmartLife/"+json[i].imgSL+"\"></a></div>"
                        $("#1").append(evidenza);
                    }
                    
                    
                    
                    for(i=0;json.length;i++){
                        if(json[i].Categoria==1)
                        {
                            var cat1= "<div class=\"col-lg-3 col-sm-6 col-xs-6\" style=\"background: transparent; margin-bottom:20px\" ><a href=\"/SmartLife.html?type=offerta&offerta="+json[i].idOfferta+"\"><img class=\"zoom2\" src=\"img/SmartLife/"+json[i].imgSL+"\"></a></div>"
                            $("#home").append(cat1);
                        }
                        else
                        {
                            if(json[i].Categoria==2)
                        {
                            var cat2= "<div class=\"col-lg-3 col-sm-6 col-xs-6\" style=\"background: transparent; margin-bottom:20px\" ><a href=\"/SmartLife.html?type=offerta&offerta="+json[i].idOfferta+"\"><img class=\"zoom2\" src=\"img/SmartLife/"+json[i].imgSL+"\"></a></div>"
                            $("#menu1").append(cat2);
                        }
                            else
                            {
                               if(json[i].Categoria==3)
                        {
                            var cat3= "<div class=\"col-lg-3 col-sm-6 col-xs-6\" style=\"background: transparent; margin-bottom:20px\" ><a href=\"/SmartLife.html?type=offerta&offerta="+json[i].idOfferta+"\"><img class=\"zoom2\" src=\"img/SmartLife/"+json[i].imgSL+"\"></a></div>"
                            $("#menu2").append(cat3);
                        } 
                                else
                                {
                                    var cat4= "<div class=\"col-lg-3 col-sm-6 col-xs-6\" style=\"background: transparent; margin-bottom:20px\" ><a href=\"/SmartLife.html?type=offerta&offerta="+json[i].idOfferta+"\"><img class=\"zoom2\" src=\"img/SmartLife/"+json[i].imgSL+"\"></a></div>"
                            $("#menu3").append(cat4);
                                    
                                }
                            }
                        }
                    }
  	
                    

                   
                          })
                .fail(function(){alert("errore")});
                });
