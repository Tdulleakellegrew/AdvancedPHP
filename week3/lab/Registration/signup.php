<!DOCTYPE html>

<html>
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
	
	<body>
	<div class="container">

	<?php
		$email = "";
		$password = "";
		$confirmPassword = "";

		include './templates/signup.html.php';
		include './autoload.php';

		$reg = new Registration();
		$util = new Util();
		$validation = new Validation();

		if($util->isPostRequest()){
			$postValues = $util->getPostValues();
			if($validation->isValidEmail($postValues['email'])){
				if($validation->passwordsMatch($postValues['password'], $postValues['confirmPassword'])){
					if($reg->signUp($postValues['email'], $postValues['password'])){
						echo "user added";
					}
					else{
						echo "db error occured";
					}
				}
				else{
					echo "Password was invalid";
				}
			}
			else{
				echo "Email was invalid";
			}
		}
	?>

	<a href="signup.php">Sign Up</a>
	</div>
	</body>
</html>