
<?php

	if ($_REQUEST["type"]=="prova"){
$host="localhost"; // host del database
$uname="angelo"; // utente del db
$psw="prova"; // password dell'utente sopra
$nomedb="fatto"; // nome del db
mysql_connect($host,$uname,$psw);
mysql_select_db($nomedb);
$q=mysql_query("SELECT * FROM assistenza");
$r=mysql_fetch_assoc($q);
// Ora se nella tabella c'è un campo chiamato ad esempio "nome".

//Se fai così:

echo $r[titolo];
//verrà stampato il valore di quel campo
?>}