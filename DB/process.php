<?php
require_once('main.php');

if(!empty($_GET['action'])){
	switch($_GET['action']){
		case 'login':
	       $email=$_POST['email'];
		   $password=$_POST['password'];
		   $where['email']= '="'.$email.'"';
		   $database=new Database();
		   $user=$database->getRow("users","*",$where);
		   if($user['password']==$password){
				session_start();
				$_SESSION['username']=$user['firstname'];
				$_SESSION['lastname']=$user['lastname'];
				$_SESSION['userID']=$user['id'];
				$_SESSION['AccountType']=$user['accounttype'];
				header('Location:../Home');
				break;
		   }
		   else{
				header('Location:../index.php?action=no');
		   }
		   break;
		case 'signup':
			$fname=$_POST['firstname'];
			$lname=$_POST['lastname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$password=$_POST['password'];
			$database=new Database();
			$where['Email']= '="'.$email.'"';
	        $database=new Database();
	        $results=$database->getRows("users","*",$where);
			$num=1;
			foreach($results as $result){
			    $num=$num+1;
			}
			if ($num==1){
				$data=array(
					"ID"=>null,
					"FirstName"=>$fname,
					"LastName"=>$lname,
					"AccountType"=>"standard",
					"Email"=>$email,
					"Phone"=>$phone,
					"Password"=>$password,
				);
				$database->insertRows("users",$data);
				$rr="Location: index.php?action=yes";
				header($rr);
				break;
			}
			$rr="Location: signup.php?action=no";
			header($rr);
			break;
		case 'logout':
			session_start();
			if(isset($_SESSION['username'])){
				session_destroy();
				header('Location: ../index.php');
			}
			else{
				header('Location: ../index.php');
			}
			break;
   }
}
?>
