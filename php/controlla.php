<?php

 if($_COOKIE["login"]) { 
$var= $_COOKIE["login"]; 
}else{ 
$var= "errore";}

echo json_encode($var);
?>