<?php
/*$host="localhost";  
$username="septiyo";  
$password="septiyo23";  
$database="purchasing";*/
$host="localhost";  
$username="root";  
$password="";  
$database="purchasing";

$conn = mysql_connect($host, $username, $password)or die("cannot connect server "); 
$db = mysql_select_db($database)  or die('Gagal membuat koneksi database '.mysql_error);

?>