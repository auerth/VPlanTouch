<?php 


$dbUser = json_decode(file_get_contents("../etc/logins.json"),true)["Database"]["Username"];
$dbPassword = json_decode(file_get_contents("../etc/logins.json"),true)["Database"]["Password"];
$dbHost = json_decode(file_get_contents("../etc/logins.json"),true)["Database"]["Host"];
$dbDatabase = json_decode(file_get_contents("../etc/logins.json"),true)["Database"]["Database-Name"];
$db=mysqli_connect($dbHost,$dbUser,$dbPassword,$dbDatabase);
$dbTMP=mysqli_connect($dbHost,$dbUser,$dbPassword);



 ?>
