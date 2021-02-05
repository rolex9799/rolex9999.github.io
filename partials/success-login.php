<?php

$username = "rolex5799";
$parole = "livi1245";

$good = $_POST['username'] == $username && $_POST['password'] == $parole;

if ($good) {

  include('./partials/nav-top2.php');
  $teksts = "Sveicināti, " . $_POST['username'];
  $stils = 'successLogin';

 

}elseif(!$good){
  include('./partials/nav-top.php');
  $teksts = "Username vai parole nav OK!  ";
  $stils = 'unsuccessLogin';
}

?>

