<?php
$host="localhost";
$user="root";
$password="";
$db="penyimpanan";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon -> connect_error){
	  echo " ".$kon ->connect_error;
}
?>
