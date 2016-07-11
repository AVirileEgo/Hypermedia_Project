$( document ).ready(function() {

				$.getJSON( "php/login.php")
                .done(function(json){
                    
                    if(json.length==1){
                    
                    var div="<div> ok</div>";
                    $("#risultato").append(div);
                    }
                
                    

                   
                          })
                .fail(function(){alert("errore")});
                });