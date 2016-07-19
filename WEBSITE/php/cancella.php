<?php
#Registrati nel DB	
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    $sql = "DELETE FROM carrello WHERE Cliente_idCliente=".$_COOKIE["login"];
    if (mysqli_query($conn, $sql))
    {
    	echo "cancellazione avvenuta";
    }
    else
    {
    echo "cancellazione fallita";
    }
    
?>
