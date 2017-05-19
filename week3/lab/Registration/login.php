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
		session_start();
		include './templates/login.html.php';
		include './autoload.php';
		$reg = new Registration();
		$util = new Util();
		$validation = new Validation();
		if($util->isPostRequest()){
			$postValues = $util->getPostValues();
			$user = $reg->login($postValues['email'], $postValues['password']);
			if($user > 0){
				$_SESSION['user_id'] = $user['user_id'];
				$_SESSION['email'] = $user['email'];
				$util->redirect('admin.php');
			}
			else{
				echo "Invalid email or password";
			}
		}
	?>

	<a href="signup.php">Sign Up</a>
	</body>
</html>