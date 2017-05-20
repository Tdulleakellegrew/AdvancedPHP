<?php
class Login extends DBSpring{

	public function loginCheck($email, $password){
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
?>