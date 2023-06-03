<?php
class toursModel
{
    /**
     *  Obtiene la lista de tours
     */
    function gettours()
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM tours');
        $query->execute();
        $tours = $query->fetchAll(PDO::FETCH_OBJ);
        return $tours;
    }

    function gettour($id)
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM tours WHERE id = ?');
        $query->execute([$id]);
        $tour = $query->fetch(PDO::FETCH_OBJ); // Cambio fetchAll() a fetch()
        return $tour;
    }

    function getids($id) {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT id FROM tours WHERE id_crucero = ?');
        $query->execute([$id]);
        $ids = $query->fetchAll(PDO::FETCH_COLUMN); // Obtener un arreglo de IDs
        return $ids;
    }


}