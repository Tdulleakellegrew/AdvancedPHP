<?php

class Registration extends DB{

	public function __construct(){
		$dbConfig = array(
			"DB_DNS" => 'mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017',
			"DB_USER" => 'root',
			"DB_PASSWORD" => '');
		parent::__construct($dbConfig);
	}

	public function signUp($email, $password){
		$stmt = $this->getDB()->prepare("INSERT INTO users SET email = :email, password = :password, created = NOW()");
        $binds = array(
        	':email' => $email,
        	':password' => password_hash($password, PASSWORD_DEFAULT)
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        
        return false;
	}

	public function login($email, $password){
		$stmt = $this->getDB()->prepare("SELECT * FROM users WHERE email = :email");
		$binds = array(
			':email' => $email
		);
		if($stmt->execute($binds) && $stmt->rowCount() > 0){
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			if(password_verify($password, $user['password'])){
				return $user;
			}
		}
		return false;

	}
}