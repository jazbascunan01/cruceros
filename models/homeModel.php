<?php
class homeModel{
   /**
    *  Obtiene la lista de cruceros
    */
   function getcruceros() {
       $db = new PDO('mysql:host=localhost;'.'dbname=turismo_maritimo;charset=utf8', 'root', '');
       $query = $db->prepare('SELECT * FROM cruceros');
       $query->execute();
       $cruceros = $query->fetchAll(PDO::FETCH_OBJ);
       return $cruceros;
   }
}
