<?php 
	include('header.php');
	require_once('../model/usersModel.php');
	$result = getUserById($_GET['id']);
?>

<html>
<head>
	<title>Edit User Page</title>
</head>
<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>

	<form method="post" action="../controller/editUser.php">
		<fieldset>
			<legend>Edit</legend>
			<table>
				
				<tr>
					<input type="hidden" name="uid" value="<?=$result['uid']?>">
					<td>User Name:</td>
					<td><input type="text" name="username" value="<?=$result['username']?>"></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="password" value="<?=$result['password']?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value="<?=$result['email']?>"></td>
				</tr>
				<tr>
					<td></td>
				
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html> 