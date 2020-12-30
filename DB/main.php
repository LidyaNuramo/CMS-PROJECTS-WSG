<?php

class Database {
	
	function init_connection(){
		$dbhost="localhost"; 
		$dbuser="root"; 
		$dbpassword="VhFtn4kUqaa6"; 
		$dbname="Webservers";
		if (!$connection) {
			$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
			echo " MySQL Connection error." . PHP_EOL;
			echo "Errno: " . mysqli_connect_errno() . PHP_EOL;
			echo "Error: " . mysqli_connect_error() . PHP_EOL;
			exit;
		}
		else{
			return $connection;
		}
	}
    
	function close_connection($aconnection){
		mysqli_close($aconnection);
	}

	function get_rows($tablename){
		$result_connection=init_connection();
		$query = "SELECT * FROM ".$tablename;
		$result = mysqli_query($result_connection, $query) or die ("DB error: $dbname");
		close_connection($result_connection);
		return $result;
	}

	function select_row($tablename, $columns ,$condition ,$where){
		$result_connection=init_connection();
		$query = "SELECT ".$columns." FROM ".$tablename." where ".$condition."='".$where."'";
		$result = mysqli_query($connection, $query) or die ("DB error: $dbname");
		close_connection($result_connection);
	}
}
?>
