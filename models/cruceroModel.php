<?php
class cruceroModel
{
    /**
     *  Obtiene la lista de cruceros
     */
    function getcruceros()
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM cruceros');
        $query->execute();
        $cruceros = $query->fetchAll(PDO::FETCH_OBJ);
        return $cruceros;
    }
    function getcrucero($id)
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM cruceros WHERE id = ?');
        $query->execute([$id]);
        $crucero = $query->fetch(PDO::FETCH_OBJ); // Cambio fetchAll() a fetch()
        return $crucero;
    }
    public function save($nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles)
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('INSERT INTO cruceros(nombre, compania, capacidad, origen, img1, img2, descripcion, detalles) VALUES(?,?,?,?,?,?,?,?)');
        $query->execute([$nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles]);
    }
    public function cruceroNoExiste($nombre)
    {
        $db = new PDO('mysql:host=localhost;dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT COUNT(*) FROM cruceros WHERE nombre = ?');
        $query->execute([$nombre]);
        $count = $query->fetchColumn();
        return $count == 0;
    }
    function editar($crucero, $nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles) {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('UPDATE cruceros SET nombre=?, compania=?, capacidad=?, origen=?, img1=?, img2=?, descripcion=?, detalles=? WHERE ID = ?');
        $query->execute([$nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles, $crucero]);

    }
    function delete($crucero) {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('DELETE FROM cruceros WHERE ID = ?');
        $query->execute([$crucero]); 
    }

}