<?php

/**
 * Description of CRUD
 *
 * @author 001305794
 */
class CRUD {


    function createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday) {
        $data = new DBSpring();
        $db = $data->getDB();


        $stmt = $db->prepare("INSERT INTO address SET fullname = :fullname, email = :email, addressline1 = :addressline1, city = :city, state = :state, zip = :zip, birthday = :birthday ");
        $binds = array(
            ":fullname" => $fullname,
            ":email" => $email,
            ":addressline1" => $addressline1,
            ":city" => $city,
            ":state" => $state,
            ":zip" => $zip,
            ":birthday" => $birthday,
        );
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }

    function readAllAddress() {
        $data = new DBSpring();
        $db = $data->getDB();
        
        $stmt = $db->prepare("SELECT * FROM address");

        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return $results;
    }

}
