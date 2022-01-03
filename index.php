<?php

include_once('./partials/page.php');

$pgname = isset($_GET['pg']) ? trim(strip_tags($_GET['pg'])) : 'index';

$title = $pgdata[$pgname]['title'];
$desc = $pgdata[$pgname]['description'];
$key = $pgdata[$pgname]['keywords'];

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

<?php echo $title; ?>

</title>


</head>


<body>
 

<?php include('./partials/nav-top.php'); ?>

<?php
  if ($pgname == 'blog') {
    echo include_once('./page/blog.php');
 
  }elseif($pgname == 'contact'){
    echo include_once('./page/contact.php');

  }elseif($pgname == 'login'){
    echo include_once('./page/login.php');
  }
  else {
    echo file_get_contents('./page/' . $pgname . '.html');
  }

  ?>

<?php include('./partials/nav-bottom.php'); ?>
<?php include('./partials/nav-bottom.php'); ?>

  

<script src="scripts.js"></script>
</body>
</html>