<?php
#Registrati nel DB	
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
$data = date ("Y-m-j");
    $sql = "INSERT INTO ordine (Cliente_idCliente, Data,Totale)
VALUES (".$_COOKIE["login"].",'$data','121')";
    if (mysqli_query($conn, $sql))
    {
    	echo "inserimento avvenuta";
    }
    else
    {
    echo "inserimento fallita";
    }
    
?>
