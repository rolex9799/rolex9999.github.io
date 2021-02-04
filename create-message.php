<?php

require_once('./partials/config.php');

if(isset($_POST)){

$name = $_POST['name'];
$surname = $_POST['surname'];
$location = $_POST['location'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, surname, location, email, message) VALUE (' $name', '$surname', '$location', '$email', '$message')";

  if($conn->query($sql) === TRUE){

    $info2 = 'Ziņa nosūtīta!';

  } else{
    $info2 = 'ERROR: ' . $sql . '<br>' . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Message Sent</title>

  <style>
    <?php include 'style.css'; ?>
  </style>
</head>
<body>
  

<div class="banner">

<h1>Message sent!</h1>

</div>

<div class="container">

  <h2 class="card-title"><?php echo $info2; ?></h2>
  

  <a class="postButton" href="./index.php">Return back!</a>


</div>

</body>
</html>