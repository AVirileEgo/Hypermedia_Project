<?php
if ($_GET["type"]=="cliente")
    {
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
        // Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);} 
			
			else {
		$sql = "SELECT * FROM ordine WHERE Cliente_idCliente=".$_GET["id"];;
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