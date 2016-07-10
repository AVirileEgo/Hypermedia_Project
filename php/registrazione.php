<?php
# cerca prodotti in outlet
	
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    $query="INSERT INTO cliente (idCliente,Nome1,Cognome,Sesso,Nascita,Luogo_Nascita,Telefono,Mail,Indirizzo,CAP,Comune,Provincia,Password,Fattura) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    
    $st =$conn->stmt_init();
    if ($st->prepare($query))
    {
        $codice = ""; 
        if (isset($_POST['idCliente']))
            { 
                $idCliente = $_POST['idCliente']; 
            }  
        if (isset($_POST['Nome1']))
            { 
                $Nome1=$_POST['Nome1'];
            }  
        if (isset($_POST['Cognome']))
            { 
                $Cognome=$_POST['Cognome']; 
            }  
        if (isset($_POST['Sesso']))
            { 
                $Sesso=$_POST['Sesso']; 
            }  
        if (isset($_POST['Nascita']))
            { 
                $Nascita=$_POST['Nascita']; 
            }  
        if (isset($_POST['Luogo_Nascita']))
            { 
                $Luogo_Nascita=$_POST['Luogo_Nascita']; 
            }  
        if (isset($_POST['Telefono']))
            { 
                $Telefono=$_POST['Telefono']; 
            }  
        if (isset($_POST['Mail']))
            { 
                $Mail=$_POST['Mail']; 
            }  
        if (isset($_POST['Indirizzo']))
            { 
                $Indirizzo=$_POST['Indirizzo']; 
            }  
        if (isset($_POST['CAP']))
            { 
                $CAP=$_POST['CAP']; 
            }  
        if (isset($_POST['Comune']))
            { 
                $Comune=$_POST['Comune']; 
            }  

        if (isset($_POST['Provincia']))
            { 
                $Provincia=$_POST['Provincia']; 
            }  

        if (isset($_POST['Password']))
            { 
                $Password=$_POST['Password']; 
            }  
        if (isset($_POST['Fattura']))
            { 
                $Fattura=$_POST['Fattura']; 
            }  

        

    	$st->bind_param('ssssssssssssss',$idCliente,$Nome1,$Cognome,$Sesso,$Nascita,$Luogo_Nascita,$Telefono,$Mail,$Indirizzo,$CAP,$Comune,$Provincia,$Password,$Fattura);
    	$st->execute();
    }
    if ($st)
    {
    	echo "registrazione avvenuta";
    }
    else
    {
    echo "registrazione fallita";
    }
    
?>
