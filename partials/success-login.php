<?php

$username = "rolex5799";
$parole = "livi1245";

$good = $_POST['username'] == $username && $_POST['password'] == $parole;

if ($good) {
  $teksts = "Sveicināti, " . $_POST['username'];
  $stils = 'successLogin';

}else{
  $teksts = "Username vai parole nav OK!  ";
  $stils = 'unsuccessLogin';
}

?>