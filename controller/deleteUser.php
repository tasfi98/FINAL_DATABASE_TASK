<?php 
	//session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
		$uid = $_POST['uid'];

					$status = deleteUser($uid);
					if($status){
						header('location: ../views/userList.php');
					}else{
						echo "try again...";
					}

	}
?> 