function controlla(){
    
    $.getJSON( "php/controlla.php")
                .done(function(json){
                    
                        
                        
					var prova= "<div>"+json[0].var+"</div>"
                    $("#prov").append(prova);
                    
                   
                          })
}



