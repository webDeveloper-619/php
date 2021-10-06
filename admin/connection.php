<?php
ini_set('memory_limit', '-1');
ob_start();
session_start();




$con = mysqli_connect("localhost","","","sportsma_qrcode");

if (!$con) {
    echo "Error: Unable to connect to MySQL.";
    exit;
}
$site_url = "https://www.".$_SERVER['HTTP_HOST'];

 
 


?>	