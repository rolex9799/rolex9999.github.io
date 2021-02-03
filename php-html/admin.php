<?php

require_once('./partials/config.php');

$post = isset($_GET['post']) ? trim(strip_tags($_GET['post'])) : 1;

$sql = "SELECT * FROM posts WHERE id = $post";

$result = $conn->query($sql);

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

  <title>Write a blog!</title>


  <style>
    <?php include 'style.css'; ?>
  </style>
</head>
<body>
  
<?php include('./partials/nav-top.php'); ?>

<div class="banner">

  <h1>Create Post!</h1>

</div>

<div class="form-panel">

    <h1 class="blogWritingTitle">What's in your mind?</h1>
  
    
    <form method="POST" action="create-posts.php">

      <div class="form-group">
        <label for="name">Title </label>

        <input type="text" id="Title" name="Title">

      </div>
     
      
      <div class="form-group">

        <label for="name">Image</label>
      
        <input type="text" id="Image" name="Image">
      </div>

      
      <div class="form-group">
        <label for="name">Introtext</label>

        <input type="text" id="Introtext" name="Introtext">
      </div>
  
      <div class="form-group">
        <label for="message">Body</label>

        <textarea name="Body" id="Body" cols="50" rows="10" style="max-width: 370px; min-width: 370px; max-height: 200px; min-height: 200px" ></textarea>
      </div>
      
      
      <input class="submit btn" type="submit" value="Send">
    
    </form>
</div>


<?php include('./partials/nav-bottom.php'); ?>

</body>
</html>