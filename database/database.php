<?php
$hostname = "localhost";
$dbUser = "root";
$dbPassword ="";
$dbName = "Chachukibiryani";
$concc = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);
if(!$concc){
    die("Something went wrong");
}
?>