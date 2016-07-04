
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


#cerca specifico telefono
	if ($_GET["type"]=="smartphone" && $_GET["prodotto"]=="1")
    {
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
     
    else {
        //per i prodotti con le offerte
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
            //Per i Prodotti senza offerte
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
        
        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}



// inclusione del file di classe


 
// chiusura della connessione a MySQL
?>