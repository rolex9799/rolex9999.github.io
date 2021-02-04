<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mana_db';

//we make connection

$conn = new mysqli($servername, $username, $password, $dbname);

//we chech whether we are connected

if($conn -> connect_error){
  die('Connection failed: ' . $conn -> connect_error);
}
// echo "Connected successfully!";



?>