$( document ).ready(function() {

				$.getJSON( "php/carrello.php?type=carrello&cliente=1")
                .done(function(json){
                    
                    for(i=0;i<json.length;i++){
                    
                     var div="<div class=\"col-lg-3 col-sm-3 col-xs-3\" ><img src=\"img/Prodotti/"+json[i].IMG_FRONT+"\" style=\"height:100px;\"/></div><div class=\"col-lg-3 col-sm-3 col-xs-3\" style=\"height:100px;padding-top:25px;\" ><h5>"+json[i].Nome+"</h5></div><div class=\"col-lg-3 col-sm-3 col-xs-3\" style=\"height:100px;padding-top:25px;\"><h5 style=\"color:red;\">"+json[i].Prezzo+"</h5></div><div class=\"col-lg-3 col-sm-3 col-xs-3\" style=\"height:100px;padding-top:35px;\" ><span class=\"glyphicon glyphicon-remove-sign\" style=\"font-size:20px; color:red;\"></span> </div>"
                    $("#elenco").append(div);
                        
                    }
                
                    
  	
                    

                   
                          })
                .fail(function(){alert("errore")});
                });