<?php 
	include('header.php');
	require_once('../model/usersModel.php');
	$result = getUserById($_GET['id']);
?>

<html>
<head>
	<title>Delete Page</title>
</head>
<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>

	<form method="post" action="../controller/deleteUser.php">
		<fieldset>
			<legend>Delete New</legend>
			<label>User Name: <?=$result['username']?></label><br>
			<label>Email: <?=$result['email']?></label><br>
			<input type="hidden" name="uid" value="<?=$result['uid']?>">
			<br>
			<h4> Are you sure you want to delete?</h4>
			<input type="submit" name="submit" value="Delete"></td>
				
		</fieldset>
	</form>
</body>
</html> 