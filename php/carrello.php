<?php
    
#cerca i prodotti nel carrello
	if ($_GET["type"]=="carrello" && $_GET["cliente"]==1){
		$conn = new mysqli('localhost', 'utente', 'password', 'my_rivatardinizizzari');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT idProdotto,IMG_FRONT,Nome,Prezzo FROM Carrello, Prodotto WHERE idProdotto=Prodotto_idProdotto AND Cliente_idCliente=".$_GET["cliente"];
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
?>