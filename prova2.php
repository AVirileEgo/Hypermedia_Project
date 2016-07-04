
<?php
   # cerca prodotti in outlet
	if ($_GET["type"]=="outlet"){
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT IMG_FRONT,Nome,Prezzo FROM Prodotto WHERE isOutlet=0";
		$result = $conn->query($sql);
        

		if ($result->num_rows > 0) {
            $categories= array();
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$categories[]= array_map('utf8_encode',$row);
			}
		} else {
		}

        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}


 # cerca tutti i prodotti
	if ($_GET["type"]=="allprod"){
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT IMG_FRONT,Nome,Prezzo FROM Prodotto";
		$result = $conn->query($sql);
        

		if ($result->num_rows > 0) {
            $categories= array();
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$categories[]= array_map('utf8_encode',$row);
			}
		} else {
		}

        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}


#cerca specifico telefono
	if ($_GET["type"]=="smartphone" && $_GET["prodotto"]=="1")
    {
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
     
    else { 
    	//prodotti+assistenza+offerte
    	$sql = "SELECT prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,Prodotto.Descrizione,Caratteristiche,Specifiche,Offerta_idOfferta,IMG,assistenza.Titolo,assistenza_has_prodotto.Assistenza_idAssistenza FROM Prodotto,offerta_has_prodotto,offerta,assistenza,assistenza_has_prodotto WHERE idAssistenza=Assistenza_idAssistenza AND idOfferta=Offerta_idOfferta AND idProdotto=offerta_has_prodotto.Prodotto_idProdotto AND idProdotto=assistenza_has_prodotto.Prodotto_idProdotto AND idProdotto=".$_GET["prodotto"];
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
            $sql = "SELECT prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,Prodotto.Descrizione,Caratteristiche,Specifiche,Offerta_idOfferta,IMG FROM Prodotto,offerta_has_prodotto,offerta WHERE idOfferta=Offerta_idOfferta AND idProdotto=Prodotto_idProdotto AND idProdotto=".$_GET["prodotto"];
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
        				$sql = "SELECT prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,Prodotto.Descrizione,Caratteristiche,Specifiche,Assistenza_idAssistenza,Titolo FROM Prodotto,assistenza_has_prodotto,assistenza WHERE idAssistenza=Assistenza_idAssistenza AND idProdotto=Prodotto_idProdotto AND idProdotto=".$_GET["prodotto"];
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
            				$sql = "SELECT prodotto.Nome,Marca,IMG_front,IMG_side,IMG_back,prodotto.Prezzo,Prodotto.Descrizione,Caratteristiche,Specifiche FROM Prodotto WHERE idProdotto=".$_GET["prodotto"];
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




 # cerca tutte le offerte
	if ($_GET["type"]=="alloff"){
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT IMG FROM Offerta";
		$result = $conn->query($sql);
        

		if ($result->num_rows > 0) {
            $categories= array();
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$categories[]= array_map('utf8_encode',$row);
			}
		} else {
		}

        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}


   # cerca offerte in promozione
	if ($_GET["type"]=="promozione"){
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT IMG FROM offerta WHERE isPromozione=1";
		$result = $conn->query($sql);
        

		if ($result->num_rows > 0) {
            $categories= array();
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$categories[]= array_map('utf8_encode',$row);
			}
		} else {
		}

        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}

#cerca specifica offerta
	if ($_GET["type"]=="offerta" && $_GET["offerta"]=="8")
    {
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
     
    else { 
    	//Offerte con prodotti
    	$sql = "SELECT offerta.nome,IMG_front,Offerta_idOfferta,IMG,Offerta.Descrizione,Attivazione_Regole,FAQ,IMG_Copertura FROM Prodotto,offerta_has_prodotto,offerta WHERE idOfferta=Offerta_idOfferta AND idProdotto=Prodotto_idProdotto AND idOfferta=".$_GET["offerta"];
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
            $sql = "SELECT offerta.nome,IMG,Offerta.Descrizione,Attivazione_Regole,FAQ,IMG_Copertura FROM Offerta WHERE idOfferta=".$_GET["offerta"];
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


// inclusione del file di classe


 
// chiusura della connessione a MySQL
?>