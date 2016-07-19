<?php
header('Content-Type: text/html');

$connection = mysql_connect('', '', '');
mysql_select_db('my_rivatardinizizzari', $connection);

$email = $_POST['Telefono1'];
$pwd = $_POST['Password1'];
$cod = $_POST['idCliente1'];


/* @todo Aggiungere una routine di filtraggio più accurata */

$clean_email = mysql_real_escape_string($email);
$clean_pwd = mysql_real_escape_string($pwd);
$clean_cod = mysql_real_escape_string($cod);


$message = '';
$errors = '';




$query1 = "SELECT * FROM cliente WHERE Telefono = '$clean_email' AND idCliente = '$clean_cod' ";
$result = mysql_query($query1, $connection);

$results = mysql_fetch_row($result);

if($results == false) {

	$errors .= '<div class="error message">Telefono o Codice errato</div>';

}

$query2 = "SELECT * FROM cliente WHERE Password = '$clean_pwd'";
$result2 = mysql_query($query2, $connection);

$results2 = mysql_fetch_row($result2);

if($results2 == false) {

	$errors .= '<div class="error message">Password errata</div>';

}

if($errors != '') {

	$message = $errors;

} else {

	$message = '<div class="success message">Login effettuato con successo</div>';
     setcookie("login","$clean_cod",time()+3600);
    

}



echo $message;?>