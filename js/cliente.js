$( document ).ready(function() {

				$.getJSON( "php/Cliente.php?type=cliente&id="+QueryString.id)
                .done(function(json){
                    

                    var Codice=json[0].idCliente;
                    $("#1codice").append(Codice);
                    var nome1=json[0].Nome1;
                    $("#1nome1").append(nome1);
                    var Cognome=json[0].Cognome;
                    $("#1Cognome").append(Cognome);
                    var Sesso=json[0].Sesso;
                    $("#1Sesso").append(Sesso);
                    var Data=json[0].Nascita;
                    $("#1Data").append(Data);
                    var Luogo=json[0].Luogo_nascita;
                    $("#1Luogo").append(Luogo);
                    var Telefono=json[0].Telefono;
                    $("#1Telefono").append(Telefono);
                    var mail=json[0].Mail;
                    $("#1mail").append(mail);
                    var Indirizzo=json[0].Indirizzo;
                    $("#1Indirizzo").append(Indirizzo);
                    
                    var CAP=json[0].CAP;
                    $("#1CAP").append(CAP);
                    var Comune=json[0].Comune;
                    $("#1Comune").append(Comune);
                    var Provincia=json[0].Provincia;
                    $("#1Provincia").append(Provincia);
                    var Fattura="<embed class=\"flex\" width=\"600\" height=\"400\" src=\"img/myarea/"+json[0].Fattura+".pdf\">";
                    $("#1Fattura").append(Fattura);

                    
                    
                    if(json[0].imgSL!=undefined){
                        var div="<div class=\"col-lg-4 col-sm-4 col-xs-12\" style=\"background: transparent; min-height:300px;\" ><img class=\"flex\" src=\"img/SmartLife/"+json[0].imgSL+"\" style=\"border:0px; margin:0px;\"></div><div class=\"col-lg-8 col-sm-8 col-xs-12\" style=\"background: transparent; height:300px;\" ><div class=\"row\" style=\"padding-left:10px; padding-right:10px;\"><div class=\"col-lg-6 col-sm-6 col-xs-12\" style=\"background: trasparent\" ><div style=\"background: #E8E8E8; height:50px; padding-top:15px;\"><b>Nome Offerta</b></div><div style=\"border: 2px solid #e8e8e8; height:50px; padding-top:15px;\">"+json[0].Nome+"</div></div><div class=\"col-lg-6 col-sm-6 col-xs-12\" style=\"background: trasparent\" ><div style=\"background: #E8E8E8; height:50px; padding-top:15px;\"><b>Data attivazione</b></div><div style=\"border: 2px solid #e8e8e8; height:50px; padding-top:15px;\">"+json[0].Data_attivazione+"</div></div></div></div>"
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
                                var div="<div class=\"col-lg-4 col-sm-4 col-xs-12\" style=\"background: transparent; min-height:300px;\" ><img class=\"flex\" src=\"img/SmartLife/"+json[y].imgSL+"\" style=\"border:0px; margin:0px;\"></div><div class=\"col-lg-8 col-sm-8 col-xs-12\" style=\"background: transparent; height:300px;\" ><div class=\"row\" style=\"padding-left:10px; padding-right:10px;\"><div class=\"col-lg-6 col-sm-6 col-xs-12\" style=\"background: trasparent\" ><div style=\"background: #E8E8E8; height:50px; padding-top:15px;\"><b>Nome Offerta</b></div><div style=\"border: 2px solid #e8e8e8; height:50px; padding-top:15px;\">"+json[y].Nome+"</div></div><div class=\"col-lg-6 col-sm-6 col-xs-12\" style=\"background: trasparent\" ><div style=\"background: #E8E8E8; height:50px; padding-top:15px;\"><b>Data attivazione</b></div><div style=\"border: 2px solid #e8e8e8; height:50px; padding-top:15px;\">"+json[y].Data_attivazione+"</div></div></div></div>"
                                $("#cicloofferte").append(div);
                                appoggio.push(json[y].imgSL);
                            }
                        }
                        
                        }
                        
                        }
                    else 
                    {
                        var div="<div class=\"col-lg-12 col-sm-12 col-xs-12\" style=\" padding:10px;\"><h4 style=\"color:grey;\"><b>NON HAI OFFERTE ATTIVE<br/><br/>Scegli quella piu adatta a te nella pagina delle offerte</b></h4></div>"
                    $("#cicloofferte").append(div)
                    }
                    
                    
                    
                    
                   
                    
                          })
                .fail(function(){alert("errore")});
                });