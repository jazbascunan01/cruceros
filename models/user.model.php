<?php

class UserModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=turismo_maritimo;charset=utf8', 'root', '');
    }

    /**
     * Retorna un usuario según el username pasado.
     */
    public function getUserByUserName($username){
        $query = $this->db->prepare('SELECT * FROM usuarios WHERE nombre_usuario = :username');
        $query->execute(array(':username' => $username));
        return $query->fetch(PDO::FETCH_ASSOC);
    }


}