<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
		$uid = $_POST['uid'];
		$username 	= $_POST['username'];
		$password 		= $_POST['password'];
		$email 	= $_POST['email'];


					$user = ['uid'=>$uid, 'username'=> $username, 'password'=>$password, 'email'=>$email, 'tyoe'=>'user'];
					$status = editUser($user);
					if($status){
						header('location: ../views/userList.php');
					}else{
						echo "try again...";
					}

	}
?> 