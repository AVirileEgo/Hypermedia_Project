$(function()
     {
         $('#submit').click(function(){
             
             var idCliente=$('#idCliente').val();
             var Nome1=$('#Nome1').val();
             var Cognome=$('#Cognome').val();
             var Sesso=$('#Sesso').val();
             var Nascita=$('#Nascita').val();
             var Luogo_Nascita=$('#Luogo_Nascita').val();
             var Telefono=$('#Telefono').val();
             var Mail=$('#Mail').val();
             var Indirizzo=$('#Indirizzo').val();
             var CAP=$('#CAP').val();
             var Comune=$('#Comune').val();
             var Provincia=$('#Provincia').val();
             var Password=$('#Password').val();
             var Fattura=$('#Fattura').val();
             
         $.ajax({
                            url:'php/registrazione.php',
                            type:'POST',
                            data: 'idCliente='+idCliente+'&Nome1='+Nome1+'&Cognome='+Cognome+'&Sesso='+Sesso+'&Nascita='+Nascita+'&Luogo_Nascita='+Luogo_Nascita+'&Telefono='+Telefono+'&Mail='+Mail+'&Indirizzo='+Indirizzo+'&CAP='+CAP+'&Comune='+Comune+'&Provincia='+Provincia+'&Password='+Password+'&Fattura='+Fattura,
                            success: function(res) {
                                $('risposta').remove();
                                $('#form').append('<p id="risposta">'+res+'</p>');
                                window.location.href='http:MYSTIM.html?type=codice&id='+idCliente;
                                
                                    
                                    
                                })
                                
                            }
                            })
         
         
         
         
         return false;
         });
     });
