<?php

require_once('./partials/success-login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <meta name="description" content="<?php echo $desc; ?>">
  <meta name="keywords" content="<?php echo $key; ?>">


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
  <style>
    <?php include 'style.css'; ?>
  </style>
  <title>My page</title> 
</head>
<body>


<div class="banner">

<h1 class="<?php echo $stils; ?>"><?php echo $teksts; ?></h1>

</div>


<?php if(!$good) : ?>


<p class="failLogin">Visu labu, mein Freund!</p>

<?php endif; ?>

<?php if($good) : ?>

<h1>Ko tu vēlies darīt?</h1>


<div class="container3">

<img class="adminaPhoto" src="https://media-exp1.licdn.com/dms/image/C4D03AQHIq7AbIM06EQ/profile-displayphoto-shrink_200_200/0/1604166888364?e=1616025600&v=beta&t=f_P5bMHuOdpASfSDj-8jRqmPoKY_LOntNA17QRGTzXc" alt="repettoPhoto">

<br>

<div class="container4">
  
<a class="postButton2" href="./admin.php">Write a blog?</a>


<a class="postButton2" href="https://www.youtube.com/" target="_blank">Watch Youtube?</a>

</div>


</div>

<?php endif; ?>



<?php include('./partials/nav-bottom.php'); ?>
<script src="scripts.js"></script>
  
</body>
</html>

