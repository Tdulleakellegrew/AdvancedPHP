<?php
session_start();
$util = new Util();
if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] < 0){
	$util->redirect('login.php');
}