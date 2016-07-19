<?php
#cerca specifico telefono
	if ($_GET["type"]=="smartphone")
    {
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
        // Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
     
    else { 
    	//prodotti+assistenza+offerte
    	$sql = "SELECT idProdotto, prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,prodotto.Descrizione,Caratteristiche,Specifiche,Offerta_idOfferta,imgSL,assistenza.Titolo,assistenza_has_prodotto.Assistenza_idAssistenza FROM prodotto,offerta_has_prodotto,offerta,assistenza,assistenza_has_prodotto WHERE idAssistenza=Assistenza_idAssistenza AND idOfferta=Offerta_idOfferta AND idProdotto=offerta_has_prodotto.Prodotto_idProdotto AND idProdotto=assistenza_has_prodotto.Prodotto_idProdotto AND idProdotto=".$_GET["prodotto"];
        setcookie("prodotto",$_GET["prodotto"],time()+3600);
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
            //Per i Prodotti con offerte
            $sql = "SELECT idProdotto, prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,prodotto.Descrizione,Caratteristiche,Specifiche,Offerta_idOfferta,imgSL FROM prodotto,offerta_has_prodotto,offerta WHERE idOfferta=Offerta_idOfferta AND idProdotto=Prodotto_idProdotto AND idProdotto=".$_GET["prodotto"];
            setcookie("prodotto",$_GET["prodotto"],time()+3600);
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
    					//per i prodotti con le assistenze
        				$sql = "SELECT idProdotto, prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,prodotto.Descrizione,Caratteristiche,Specifiche,Assistenza_idAssistenza,Titolo FROM prodotto,assistenza_has_prodotto,assistenza WHERE idAssistenza=Assistenza_idAssistenza AND idProdotto=Prodotto_idProdotto AND idProdotto=".$_GET["prodotto"];
                    setcookie("prodotto",$_GET["prodotto"],time()+3600);
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
    						//Solo prodotto
            				$sql = "SELECT idProdotto, prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,prodotto.Descrizione,Caratteristiche,Specifiche FROM prodotto WHERE idProdotto=".$_GET["prodotto"];
                            setcookie("prodotto",$_GET["prodotto"],time()+3600);
                            
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