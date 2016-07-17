<?php
#login
	
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
        if (isset($_POST['Telefono']))
            { 
                $Telefono=$_POST['Telefono']; 
            }  
		if (isset($_POST['Password']))
            { 
                $Password=$_POST['Password']; 
            }  
 

    $sql="SELECT * FROM cliente WHERE Telefono='".$Telefono."' AND Password='".$Password."'";
				$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                    $categories= array();
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $categories[]=array_map('utf8_encode',$row);
                            }
            } 
    			
    		
        echo json_encode($categories);
        $result->close();
		$conn->close();



    
?>

        
