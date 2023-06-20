<?php
class toursModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
    }
    /**
     *  Obtiene la lista de tours
     */
    function gettours()
    {
        $query = $this->db->prepare('SELECT * FROM tours');
        $query->execute();
        $tours = $query->fetchAll(PDO::FETCH_OBJ);
        return $tours;
    }

    function gettour($id)
    {
        $query = $this->db->prepare('SELECT * FROM tours WHERE id = ?');
        $query->execute([$id]);
        $tour = $query->fetch(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0) {
            return $tour;
        } else {
            return null; // ID no encontrado en la base de datos
        }
    }

    function getids($id)
    {
        $query = $this->db->prepare('SELECT id FROM tours WHERE id_crucero = ?');
        $query->execute([$id]);
        $ids = $query->fetchAll(PDO::FETCH_COLUMN); // Obtener un arreglo de IDs
        return $ids;
    }

    public function getToursByCrucero($cruceroId)
    {
        $query = $this->db->prepare('SELECT * FROM tours WHERE id_crucero = ?');
        $query->execute([$cruceroId]);
        $tours = $query->fetchAll(PDO::FETCH_OBJ);
        return $tours;
    }

    /**
     * Guarda un tour en la base de datos.
     */
    function save($id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles)
    {
        $destino_final = 'images/' . uniqid() . '.jpg';
        $destino_final2 = 'images/' . uniqid() . '.jpg';
        move_uploaded_file($img1, $destino_final);
        move_uploaded_file($img2, $destino_final2);
        $query = $this->db->prepare('INSERT INTO tours (id_crucero, destino, fecha_salida, precio, descripcion, img1, img2, detalles) VALUES (?, ?, ?, ?, ?, ?, ?,?)');
        $query->execute([$id_crucero, $destino, $fecha_salida, $precio, $descripcion, $destino_final,$destino_final2, $detalles]);
    }


    function delete($tour)
    {
        $query = $this->db->prepare('DELETE FROM tours WHERE ID = ?');
        $query->execute([$tour]);
    }
    /*** Edita el tour***/
    function editar($tour, $id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles)
    {
        $query = $this->db->prepare('UPDATE tours SET id_crucero=?, destino=?, fecha_salida=?, precio=?, descripcion=?, img1=?, img2=?, detalles=? WHERE ID = ?');
        $query->execute([$id_crucero, $destino, $fecha_salida, $precio, $descripcion, $img1, $img2, $detalles, $tour]);
    }

}