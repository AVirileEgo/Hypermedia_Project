			$( document ).ready(function() {

				$.getJSON("php/AllAssistenze.php?type=allass")
                .done(function(json){
                    
                    for(i=0;i<4;i++)
                    {
                         var evidenza="<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a style=\"text-decoration:none;\" href=\"/assistenza.html?type=assistenza&codice="+json[i].idAssistenza+"\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[i].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                        $("#1").append(evidenza);
                    }
                    
                    
                    
                    
                    
                    
                    for(i=0;json.length;i++){
                        if(json[i].Categoria==1)
                        {
							var cat1="<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a style=\"text-decoration:none;\" href=\"/assistenza.html?type=assistenza&codice="+json[i].idAssistenza+"\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[i].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                            $("#home").append(cat1);
                        }
                        else
                        {
                            if(json[i].Categoria==2)
                        {
							var cat2="<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a style=\"text-decoration:none;\" href=\"/assistenza.html?type=assistenza&codice="+json[i].idAssistenza+"\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[i].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                            $("#menu1").append(cat2);
                        }
                            else
                            {
                               if(json[i].Categoria==3)
                        {
							var cat3="<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a style=\"text-decoration:none;\" href=\"/assistenza.html?type=assistenza&codice="+json[i].idAssistenza+"\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[i].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                            $("#menu2").append(cat3);
                        } 
                                else
                                {
							var cat4="<div class=\"col-lg-6 col-sm-6 col-xs-12\"><a style=\"text-decoration:none;\" href=\"/assistenza.html?type=assistenza&codice="+json[i].idAssistenza+"\"><div class=\"assistenza\"><h4 class=\"prova\">"+json[i].Titolo+"<div class=\"pull-right\"><span class=\"glyphicon glyphicon-circle-arrow-right\"></span></div></h4></div></a></div>"
                            $("#menu3").append(cat4);
                                    
                                }
                            }
                        }
                    }
  	
                    

                   
                          })
                .fail(function(){alert("errore")});
                });


