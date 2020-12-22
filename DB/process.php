<?php
  include 'main.php';
  $action = isset($_GET['action']) ? $_GET['action'] : NULL;
  switch ($action) {
    case 'Laugh': 
      echo 'You laughed!';
      break;
   }
?>
