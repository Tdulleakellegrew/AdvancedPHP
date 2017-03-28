<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <?php
            include 'navbar.php';
        	include './models/dbconnect.php';
        	include './models/util.php';
        	include './models/validation.php';
        	include './models/addressCRUD.php';

        	$fullname = filter_input(INPUT_POST, 'fullname');
        	$email = filter_input(INPUT_POST, 'email');
        	$addressline1 = filter_input(INPUT_POST, 'addressline1');
        	$city = filter_input(INPUT_POST, 'city');
        	$state = filter_input(INPUT_POST, 'state');
        	$zip = filter_input(INPUT_POST, 'zip');
        	$birthday = filter_input(INPUT_POST, 'birthday');

        	$states = returnStates();



        	$errors = [];
        	if(isPostRequest()){
        		if(empty($fullname)){
        			$errors[] = 'Full Name is required';
        		}
        		if(!isValidEmail($email)){
        			$errors[] = 'Email is invalid';
        		}
        		if(empty($addressline1)){
        			$errors[] = 'Address is required';
        		}
        		if(empty($city)){
        			$errors[] = 'City is invalid';
        		}
        		if(!isValidZip($zip)){
        			$errors[] = 'Zip is invalid';
        		}
        		if(!isValidDate($birthday)){
        			$errors[] = 'Date is invalid';
        		}

        		if( count($errors) === 0){
        			if(createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday)){
        				echo "It workded";	
        			}
        		}
        	}


        ?>

        <?php $addresses = readAllAddress(); ?>
        <?php include './templates/errors.html.php' ?>
        <?php include './templates/add-address.html.php'; ?>
        <?php include './templates/view-address.html.php'; ?>
        </div>
    </body>
</html>
