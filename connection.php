<?php

$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "login_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){

    die("Failed TO Connect!");
}

?>