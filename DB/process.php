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
				header("Location: ../Home");
				break;
		   }
		   else{
				header("Location:../index.php?action=no");
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
				$rr="Location: ../index.php?action=yes";
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
		case 'deleteHost':
			$id=$_GET['id'];
			$where['id']= '='.$id;
			$database=new Database();
			$database->removeRows("hosts",$where);
			header('Location: ../Exercise1');
			break;
		case 'addhost':
			$address=$_POST['address'];
			$port=$_POST['port'];
			$failedattempts=0;
			$failedtime=NULL;
			$totaldowntime=0;
			session_start();
			$addedby=$_SESSION['userID'];
			$assignedto=$_POST['assignedto'];;
			$database=new Database();
			$data=array(
				"id"=>null,
				"address"=>$address,
				"port"=>$port,
				"failedattempts"=>$failedattempts,
				"failedtime"=>$failedtime,
				"totaldowntime"=>$totaldowntime,
				"addedby"=>$addedby,
				"assignedto"=>$assignedto,
			);
			$database->insertRows("hosts",$data);
			$rr="Location: ../Exercise1";
			header($rr);
			break;
		case 'addpost':
			date_default_timezone_set("Europe/Warsaw"); 
			$time = date("Y-m-d h:i:sa");
			$user  = $_POST['user'];
			$post  = $_POST['post'];
			$database= new Database();
			$data=array(
				"id"=>null,
				"nick"=>$user,
				"message"=>$post,
				"datetime"=>$time,
			);
			$database->insertRows("messages",$data);
			$text = '<table  border=”1” width="90%"><tr><td>'.$post.'</td><td width="80">'.$user.'</td><td width="60" bgcolor="yellow">'.$time.'</td></tr></table><br>';
			$file = fopen ("conversation.txt", "a+");
			fwrite ($file, $text);
			session_start();
			if(!isset($_SESSION['nickname'])){
				$_SESSION['nickname']= $user;
			}
			$rr="Location: ../Exercise3";
			header($rr);
			break;
		case 'addgraph':
			date_default_timezone_set("Europe/Warsaw"); 
			$time = date("Y-m-d h:i:sa");
			$x1  = $_POST['x1'];
			$x2  = $_POST['x2'];
			$x3  = $_POST['x3'];
			$x4  = $_POST['x4'];
			$x5  = $_POST['x5'];
			$database= new Database();
			$data=array(
				"id"=>null,
				"x1"=>$x1,
				"x2"=>$x2,
				"x3"=>$x3,
				"x4"=>$x4,
				"x5"=>$x5,
				"datetime"=>$time,
			);
			$database->insertRows("measurements",$data);
			$rr="Location: ../Exercise4";
			header($rr);
			break;
	}
}
?>
