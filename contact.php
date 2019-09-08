<?php

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $fromEmail = $_POST['email'];
   $subject = $_POST['title'];
   $message = $_POST['message'];
//    $currentyear = 2019;
//    $age = $currentyear - $year;

header('Location: index.html?messagesent');
}
  
?>