<?php

require_once('./partials/config.php');


$post = isset($_GET['post']) ? trim(strip_tags($_GET['post'])) : '';

$sql = "DELETE FROM posts WHERE id = $post";


  if($conn->query($sql) === TRUE){

    $info = 'Post deleted!';

  } else{
    $info = 'ERROR: ' . $sql . '<br>' . $conn->error;
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deleted Post</title>


  <style>
    <?php include 'style.css'; ?>
  </style>

</head>
<body>
  


<div class="banner">

  <h1>Deleted Post!</h1>

</div>

<div class="container">
  
 


    <?php echo $info; ?>
  

    <div class="deletePostsButtons">
      

    <a class="postButton" href="./admin.php">Make another post!</a>

    <a class="postButton" href="./index.php">Return back!</a>

    </div>

   
    


</body>
</html> 