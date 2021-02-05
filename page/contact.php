<?php

require_once('./partials/config.php');

$kontakti = isset($_GET['kontakti']) ? trim(strip_tags($_GET['kontakti'])) : 1;

$sql = "SELECT * FROM contacts WHERE id = $kontakti";

$result2 = $conn->query($sql);

?>


<div class="banner">

  <h1>Contact me</h1>

</div>

<div class="form-panel">



    <h1>Send me a message!</h1>
  
    
    <form method="POST" action="create-message.php">

      <div class="form-group">
        <label for="name">Name: </label>

        <input type="text" id="name" name="name">

      </div>
     
      <div class="form-group">
        <label for="surname">Surname: </label>

        <input type="text" id="surname" name="surname">

      </div>

      <div class="form-group">
        <label for="location">Location:</label>

        <input type="text" id="location" name="location">
      </div>
      <div class="form-group">

        <label for="email">Email:</label>
      
        <input type="text" id="email" name="email">
      </div>

  
      <div class="form-group">
        <label for="message">Your message: </label>

        <textarea name="message" id="message" cols="50" rows="10" style="max-width: 370px; min-width: 370px; max-height: 200px; min-height: 200px"></textarea>
      </div>
      
      
      <input class="submit btn" type="submit" value="Send">
    
    </form>
</div>

