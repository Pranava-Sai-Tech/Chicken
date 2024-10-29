<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$db="login";

if(!$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db))
{
    die("failed to connect!");
}
?>