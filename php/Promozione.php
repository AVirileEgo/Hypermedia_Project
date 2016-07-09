<?php
    # cerca offerte in promozione
	if ($_GET["type"]=="promozione"){
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT idOfferta,imgSL FROM offerta WHERE isPromozione=1";
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