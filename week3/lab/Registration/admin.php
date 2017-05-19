<!DOCTYPE html>

<html>
	<head>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
	<?php
		include './autoload.php';
		include './checkAccess.php';
	
		echo $_SESSION['user_id'];
		echo "<br />" . $_SESSION['email'];
	
		if($util->isPostRequest()){
			session_destroy();
			$util->redirect('login.php');
		}
	?>
	<form action="#" method="post">
		<input type="submit" value="Logout" />
	</form>
	</body>
</html>

