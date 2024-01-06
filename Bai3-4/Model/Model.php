<?php

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllUsers() {
        $query = $this->db->prepare("SELECT * FROM `user`");
        $query->execute();
    
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
