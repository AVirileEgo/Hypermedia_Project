
<?php

	if ($_GET["type"]=="prova"){
		$conn = new mysqli('localhost', 'utente', 'password', 'stim');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    else {
		$sql = "SELECT idAssistenza FROM assistenza ORDER BY idAssistenza";
		$result = $conn->query($sql);
        

		if ($result->num_rows > 0) {
            $categories= array();
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$categories[]=$row;
			}
		} else {
		}
        echo json_encode($categories);
        $result->close();
		$conn->close();
	}}
// inclusione del file di classe


 
// chiusura della connessione a MySQL
?>