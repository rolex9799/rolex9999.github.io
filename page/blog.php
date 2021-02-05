
<?php

require_once('./partials/config.php');

$post = isset($_GET['post']) ? trim(strip_tags($_GET['post'])) : 'id';

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

</title>

</head>

<body>

<div class="banner">

<h1>Blog</h1>

</div>

<div class="container2">
  
<?php if($result->num_rows > 0) : ?> 
<?php while($row = $result -> fetch_assoc()) : ?>

<div class="card">
    <img class="card-img" src="<?php echo $row['Image']; ?>" alt="">
    <div class="head">
      <h2 class="card-title"><?php echo $row['Title']; ?></h2>
    </div>
    <p class="card-intro"><?php echo $row['Introtext']; ?></p>
    <a class="btn" href="./posts.php?post=<?php echo $row['id']; ?>">Read full text here!</a>

</div>

<?php endwhile; ?>

<?php endif;
$conn->close();

?>

</div>
</body>


</html>
