<?php
class AddressCRUD{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday) {  
    	 
        $stmt = $this->db->getDB()->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday =  :birthday");
        $binds = array(
            ":fullname" => $fullname,
            ":email" => $email,
            ":addressline1" => $addressline1,
            ":city" => $city,
            ":state" => $state,
            ":zip" => $zip,
            ":birthday" => $birthday
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }
        
        return false;
    }
    
    public function readAllAddress(){

        $stmt = $this->db->getDB()->prepare("SELECT * FROM address");
        
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
           $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        return $results;
    }
}