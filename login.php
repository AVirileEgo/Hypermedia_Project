
		
		<?php  
 session_start();  
 $connect = mysqli_connect('localhost', 'utente', 'password', 'stim');  
 if(isset($_POST["Telefono"]) && isset($_POST["Password"]))  
 {  
      $Telefono = mysqli_real_escape_string($connect, $_POST["Telefono"]);  
      $Password = md5(mysqli_real_escape_string($connect, $_POST["Password"]));  
      $sql = "SELECT * FROM Cliente WHERE Telefono = '".$Telefono."' AND Password = '".$Password."'";  
      $result = mysqli_query($connect, $sql);  
      $num_row = mysqli_num_rows($result);  
      if($num_row > 0)  
      {  
           $data = mysqli_fetch_array($result);  
           $_SESSION["Telefono"] = $data["Telefono"];  
           echo $data["Telefono"];  
      }  
 }  
 ?>  