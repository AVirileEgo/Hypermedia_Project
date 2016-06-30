
<?php

	if ($_REQUEST["type"]=="prova"){
		$conn = new mysqli('localhost', 'utente', 'password', 'STIM');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
            nn va bene
		} 
     
    else {
		$sql = "SELECT * FROM assistenza ORDER BY idAssistenza asc";
		$result = $conn->query($sql);
		$categories= array();
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$categories[]=$row;
			}
		} else {
			echo "0 results";
		}
		echo json_encode($categories);
		$conn->close();
	}}
// inclusione del file di classe


 
// chiusura della connessione a MySQL
