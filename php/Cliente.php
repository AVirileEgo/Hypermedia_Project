<?php
    
#cerca specifico cliente
	if ($_GET["type"]=="cliente")
    {
		$conn = new mysqli('localhost', 'utente', 'password', 'my_rivatardinizizzari');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
     
    else { 
    	//cliete+offerta+ordine
    	$sql = "SELECT cliente.idCliente,Nome1,Cognome,Sesso,Nascita,Luogo_nascita,Telefono,Indirizzo, CAP,Comune, Provincia, Mail, Fattura, Data, Totale, imgSL, Data_attivazione, offerta.Nome FROM cliente,ordine,offerta,offerta_has_cliente WHERE idCliente=ordine.Cliente_idCliente AND idCliente=offerta_has_cliente.Cliente_idCliente AND Offerta_idOfferta=idOfferta AND  idCliente=".$_GET["id"];
        $result = $conn->query($sql);
    	if ($result->num_rows > 0) 
    		{
            $categories= array();
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $categories[]= array_map('utf8_encode',$row);
            	}
        	} 
    	else
    		{
            //Clienti con soli ordini
            $sql = "SELECT cliente.idCliente,Nome1,Cognome,Sesso,Nascita,Luogo_nascita,Telefono,Indirizzo, CAP,Comune, Provincia, Mail, Fattura, Data, Totale FROM cliente,ordine WHERE idCliente=Cliente_idCliente AND idCliente=".$_GET["id"];
        $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                    $categories= array();
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $categories[]= array_map('utf8_encode',$row);
                            }
            } 
		 
    			else
    				{
    					//clienti con offerte ma senza ordini
                        $sql = "SELECT cliente.idCliente,Nome1,Cognome,Sesso,Nascita,Luogo_nascita,Telefono,Indirizzo, CAP,Comune, Provincia, Mail, Fattura, imgSL, Data_attivazione, offerta.Nome FROM cliente,offerta_has_cliente,offerta WHERE idCliente=Cliente_idCliente AND idOfferta=Offerta_idOfferta AND idCliente=".$_GET["id"];
    					$result = $conn->query($sql);
    					if ($result->num_rows > 0) {
            			$categories= array();
            			// output data of each row
            				while($row = $result->fetch_assoc()) {
                			$categories[]= array_map('utf8_encode',$row);
            				}
        				} 
    					else
    					{
    						//Solo Cliente
            				$sql = "SELECT * FROM Cliente WHERE idCliente=".$_GET["id"];
           					$result = $conn->query($sql);
            				if ($result->num_rows > 0) {
            				$categories= array();
            				// output data of each row
            					while($row = $result->fetch_assoc()) {
               					$categories[]= array_map('utf8_encode',$row);
            					}
       			 			} 
    					}
    				}
    		}
        
        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}

?>