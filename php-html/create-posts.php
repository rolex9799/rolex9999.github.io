<?php

require_once('./partials/config.php');

if(isset($_POST)){

$title = $_POST['Title'];
$body = $_POST['Body'];
$introtext = $_POST['Introtext'];
$image = $_POST['Image'];

$sql = "INSERT INTO posts (Title, Body, Introtext, Image) VALUE (' $title', '$body', '$introtext', '$image')";

  if($conn->query($sql) === TRUE){

    $info = 'Ieraksts ievietots DB';

  } else{
    $info = 'ERROR: ' . $sql . '<br>' . $conn->error;
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>


  <style>
    <?php include 'style.css'; ?>
  </style>
</head>
<body>
  


<div class="banner">

  <h1>Created Post!</h1>

</div>

<div class="container">
  
 

    <img class="" src="<?php echo $row['Image']; ?>" alt="">
    <div class="head">
      <h2 class="card-title"><?php echo $info; ?></h2>
    </div>

    <a class="btn btn-book" href="./admin.php">Make another post!</a>
  

</div>
</body>
</html>