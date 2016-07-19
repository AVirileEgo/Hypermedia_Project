<?php
 # cerca 4 prodotti per categoria
	if ($_GET["type"]=="allcat"){
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
        // Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT idProdotto,IMG_FRONT,Nome,Prezzo,Categoria FROM prodotto WHERE idProdotto=1 OR idProdotto=2 OR idProdotto=3 OR idProdotto=4 OR idProdotto=7 OR idProdotto=8 OR idProdotto=9 OR idProdotto=10 OR idProdotto=11 OR idProdotto=12 OR idProdotto=16 OR idProdotto=17 OR idProdotto=13 OR idProdotto=14 OR idProdotto=15 OR idProdotto=18 ORDER BY Categoria";
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