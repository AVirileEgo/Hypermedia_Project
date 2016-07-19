<?php
#Registrati nel DB	
$conn = new mysqli('', '', '', 'my_rivatardinizizzari');
// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
     
    $query="INSERT INTO cliente (idCliente,Nome1,Cognome,Sesso,Nascita,Luogo_Nascita,Telefono,Mail,Indirizzo,CAP,Comune,Provincia,Password,Fattura) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    
    $st =$conn->stmt_init();
    if ($st->prepare($query))
    {
        $codice = ""; 
        if (isset($_POST['idCliente']))
            { 
                $idCliente = $_POST['idCliente']; 
            }  
        if (isset($_POST['Nome1']))
            { 
                $Nome1=$_POST['Nome1'];
            }  
        if (isset($_POST['Cognome']))
            { 
                $Cognome=$_POST['Cognome']; 
            }  
        if (isset($_POST['Sesso']))
            { 
                $Sesso=$_POST['Sesso']; 
            }  
        if (isset($_POST['Nascita']))
            { 
                $Nascita=$_POST['Nascita']; 
            }  
        if (isset($_POST['Luogo_Nascita']))
            { 
                $Luogo_Nascita=$_POST['Luogo_Nascita']; 
            }  
        if (isset($_POST['Telefono']))
            { 
                $Telefono=$_POST['Telefono']; 
            }  
        if (isset($_POST['Mail']))
            { 
                $Mail=$_POST['Mail']; 
            }  
        if (isset($_POST['Indirizzo']))
            { 
                $Indirizzo=$_POST['Indirizzo']; 
            }  
        if (isset($_POST['CAP']))
            { 
                $CAP=$_POST['CAP']; 
            }  
        if (isset($_POST['Comune']))
            { 
                $Comune=$_POST['Comune']; 
            }  

        if (isset($_POST['Provincia']))
            { 
                $Provincia=$_POST['Provincia']; 
            }  

        if (isset($_POST['Password']))
            { 
                $Password=$_POST['Password']; 
            }  
        $Fattura="fattura";
        
        if($Nome1 == "" || $Cognome == "" || $Nascita == "" || $Luogo_Nascita == "" || $Telefono == "" || $Mail == "" || $Indirizzo == "" || $CAP == "" || $Comune == "" || $Provincia == "" || $Password == ""){echo"Dati Mancanti!";exit(); } 
        
        if(!eregi("^[_a-z0-9+-]+(\.[_a-z0-9+-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)+$",$Mail)){
echo "email non valida";exit();} 
        

$split = explode("-", $Nascita);

if (!checkdate($split[1], $split[2], $split[0])) {
    echo"la data non è valida";
    exit();
}
        else{
            $oggi=date("Y-n-j");
            $split2=explode("-",$oggi);
            $diffanni=$split2[0]-$split[0];
            $diffmesi=$split2[1]-$split[1];
            $diffgiorni=$split2[2]-$split[2];
            
            if($diffanni>112)
            {
               echo"Sei la persona piu vecchia del mondo??? Riprova";exit(); 
            }
            
            if($diffanni<18){
                echo"Devi essere maggiorenne";exit();}
                else
                {
                    if($diffanni==18 && $diffmesi<0){
                    echo"Devi essere maggiorenne";exit();}
                    else
                    {
                        if($diffanni==18 && $diffmesi==0 && $diffgiorni<0){
                    echo"Devi essere maggiorenne";exit();}
                    }
                }
            
        }
        
        if (!is_numeric($Telefono)){
echo "Telefono deve essere un numero";exit();} 
              if (!is_numeric($CAP)){
echo "CAP non valido deve essere un numero";exit();
} 

        

    	$st->bind_param('ssssssssssssss',$idCliente,$Nome1,$Cognome,$Sesso,$Nascita,$Luogo_Nascita,$Telefono,$Mail,$Indirizzo,$CAP,$Comune,$Provincia,$Password,$Fattura);
    	$st->execute();
    }
    if ($st)
    {
    	echo "registrazione avvenuta";
	   setcookie("login","$idCliente",time()+3600);
        
    }
    else
    {
    echo "registrazione fallita";
    }
    
?>
