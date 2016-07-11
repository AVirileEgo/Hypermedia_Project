<?php
    #cerca specifica offerta
	if ($_GET["type"]=="offerta")
    {
		$conn = new mysqli('localhost', 'utente', 'password', 'my_rivatardinizizzari');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
     
    else { 
    	//Offerte con prodotti
    	$sql = "SELECT idOfferta, offerta.nome,IMG_front,Offerta_idOfferta,imgSL,Offerta.Descrizione,Attivazione_Regole,FAQ,copertura FROM Prodotto,offerta_has_prodotto,offerta WHERE idOfferta=Offerta_idOfferta AND idProdotto=Prodotto_idProdotto AND idOfferta=".$_GET["offerta"];
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
            //Per le offerte senza prodotti
            $sql = "SELECT idOfferta, offerta.nome,imgSL,Offerta.Descrizione,Attivazione_Regole,FAQ,copertura FROM Offerta WHERE idOfferta=".$_GET["offerta"];
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                    $categories= array();
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $categories[]= array_map('utf8_encode',$row);
                            }
            } 
		 
    			
    		}
        
        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}

?>