<?php
  include 'main.php';
  $action = isset($_GET['action']) ? $_GET['action'] : NULL;
  switch ($action) {
    case 'Login': 
      $email=isset($_GET['email']);
      $password=isset($_GET['password']);
      break;
   }
?>
