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
        $tour = $query->fetch(PDO::FETCH_OBJ);
        return $tour;
    }

    function getids($id)
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT id FROM tours WHERE id_crucero = ?');
        $query->execute([$id]);
        $ids = $query->fetchAll(PDO::FETCH_COLUMN); // Obtener un arreglo de IDs
        return $ids;
    }

    public function getToursByCrucero($cruceroId)
    {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('SELECT * FROM tours WHERE id_crucero = ?');
        $query->execute([$cruceroId]);
        $tours = $query->fetchAll(PDO::FETCH_OBJ);
        return $tours;
    }

    /**
     * Guarda un tour en la base de datos.
     */
    public function save($id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles)
    {
        
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('INSERT INTO tours(id_crucero, destino, fecha_salida, precio, descripcion, img1, img2, detalles) VALUES(?,?,?,?,?,?,?,?)');
        $query->execute([$id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles]);

    }

    function delete($tour) {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('DELETE FROM tours WHERE ID = ?');
        $query->execute([$tour]); 
    }

        /**
     * Edita el tour
     */
    function editar($tour, $id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles) {
        $db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
        $query = $db->prepare('UPDATE tours SET id_crucero=?, destino=?, fecha_salida=?, precio=?, descripcion=?, img1=?, img2=?, detalles=? WHERE ID = ?');
        $query->execute([$id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles, $tour]);

    }
}