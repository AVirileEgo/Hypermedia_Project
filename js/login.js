$(function()
     {
         $('#submit').click(function(){
             
            
             var Telefono=$('#Telefono').val();
             var Password=$('#Password').val();
             
         $.ajax({
                            url:'php/login.php',
                            type:'POST',
                            data: 'Telefono='+Telefono+'&Password='+Password,
                            success: function(res) {
                                $('#form').append('<p id="risultato">'+res+'</p>');
                                window.location.href='http:MYSTIM.html?type=codice&id='+idCliente;
                                
                                    
                                    
                                })
                                
                            }
                            })
         
         
         
         
         return false;
         });
     });
