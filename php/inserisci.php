<?php
#Registrati nel DB	
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    $sql = "INSERT INTO carrello (Cliente_idCliente, Prodotto_idProdotto)
VALUES (".$_COOKIE["login"].",".$_COOKIE["prodotto"].")";
    if (mysqli_query($conn, $sql))
    {
    	echo "inserimento avvenuto";
    }
    else
    {
    echo "inserimento fallito";
    }
    
?>
