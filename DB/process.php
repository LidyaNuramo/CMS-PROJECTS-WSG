<?php
require_once('main.php');

if(!empty($_GET['action'])){
	switch($_GET['action']){
		case 'login':
	       $email=$_POST['email'];
		   $password=$_POST['password'];
	       $where['email']= '="'.$email.'"';
		   $database=new Database();
		   $user=$database->select_row("users","*",$where);
		   if($user['password']==$password){
				session_start();
				$_SESSION['username']=$user['FirstName'];
				$_SESSION['lastname']=$user['LastName'];
				$_SESSION['userID']=$user['userID'];
				header('Location:home.php');
				break;
		   }
		   else{
				header('Location:index.php?action=no');
		   }
		   break;
   }
}
?>
