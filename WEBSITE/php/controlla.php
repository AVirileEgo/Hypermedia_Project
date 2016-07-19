<?php
$controllo= array();

 if($_COOKIE["login"]) { 
$controllo[0]= $_COOKIE["login"]; 
}else{ 
$controllo[0]= "e";}

 if($_COOKIE["prodotto"]) { 
$controllo[1]= $_COOKIE["prodotto"]; 
}else{ 
$controllo[1]= "e";}

echo json_encode($controllo);
?>