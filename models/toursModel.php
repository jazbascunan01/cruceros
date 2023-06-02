<?php
class toursModel{
   /**
    *  Obtiene la lista de tours
    */
   function gettours() {
       $db = new PDO('mysql:host=localhost;'.'dbname=turismo_maritimo;charset=utf8', 'root', '');
       $query = $db->prepare('SELECT * FROM tours');
       $query->execute();
       $tours = $query->fetchAll(PDO::FETCH_OBJ);
       return $tours;
   }

function gettour($id) {
    $db = new PDO('mysql:host=localhost;'.'dbname=turismo_maritimo;charset=utf8', 'root', '');
    $query = $db->prepare('SELECT * FROM tours WHERE id = ?'); // usamos ? como marcador
    $query->execute([$id]); // pasamos el valor de $id como parámetro
    $tour = $query->fetchAll(PDO::FETCH_OBJ);
    return $tour;
}

}