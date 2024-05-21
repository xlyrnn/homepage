<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'profil_piwi';
$connect = mysqli_connect($host, $username, $password, $db_name);

if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from profil";
$result = $connect->query($query);