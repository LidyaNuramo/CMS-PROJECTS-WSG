<?php
  $connection="";
  $dbname="";

  function init_connection(){
    $dbhost="localhost"; 
    $dbuser="root"; 
    $dbpassword="VhFtn4kUqaa6"; 
    $dbname="Webservers";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    if (!$connection) {
      echo " MySQL Connection error." . PHP_EOL;
      echo "Errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Error: " . mysqli_connect_error() . PHP_EOL;
      exit;
    }
  }
    
  function close_connection(){
    mysqli_close($connection);
  }

  function get_rows($tablename){
    init_connection();
    $query = "SELECT * FROM "+ $tablename;
    $result = mysqli_query($connection, $query) or die ("DB error: $dbname");
    close_connection();
  }

  function select_row($tablename, $id){
    init_connection();
    $query = "SELECT * FROM "+ $tablename + "where id='" + $id + "'";
    $result = mysqli_query($connection, $query) or die ("DB error: $dbname");
    close_connection();
  }
?>
