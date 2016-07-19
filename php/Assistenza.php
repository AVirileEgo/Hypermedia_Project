<?php
    
#cerca specifica asssitenza
	if ($_GET["type"]=="assistenza")
    {
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
        // Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
     
    else { 
    	//Offerte con prodotti
    	$sql = "SELECT idAssistenza,Titolo,assistenza.Descrizione,IMG_front FROM prodotto,assistenza_has_prodotto,assistenza WHERE idAssistenza=Assistenza_idAssistenza AND idProdotto=Prodotto_idProdotto AND idAssistenza=".$_GET["codice"];
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
            $sql = "SELECT idAssistenza,Titolo, assistenza.Descrizione FROM assistenza WHERE idAssistenza=".$_GET["codice"];
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