<?php

require_once('./partials/config.php');

$post = isset($_GET['post']) ? trim(strip_tags($_GET['post'])) : 1;

$sql = "SELECT * FROM posts WHERE id = $post";

$result = $conn->query($sql);

?>


<! DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <meta name="description" content="<?php echo $desc; ?>">
  <meta name="keywords" content="<?php echo $key; ?>">


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="style.css"> -->

  <style>
    <?php include 'style.css'; ?>
  </style>

<title>
Datu Bāze
</title>

</head>


<body>

<?php include('./partials/nav-top.php'); ?>

<div class="banner">

<h1>Blog</h1>

</div>

<div class="container">
  
<?php if($result->num_rows > 0) : ?>
<?php while($row = $result -> fetch_assoc()) : ?>

  <h2 class="postTitle"><?php echo $row['Title']; ?></h2>

  <br>
    <img class="postImage" src="<?php echo $row['Image']; ?>" alt="">
    

<br>
  
    <p class="card-intro"><?php echo $row['Body']; ?></p>



<div class="container4"> 

<a class="postButton"  href="./delete-posts.php?post=<?php echo $row['id']; ?>">Delete post!</a>
 
<a class="postButton"  href="./index.php">Return back</a>
</div>



  



<?php endwhile; ?>

<?php endif;
$conn->close();

?>

</div>


  <script src="scripts.js"></script>
</body>
</html>