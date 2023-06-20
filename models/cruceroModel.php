<?php
class cruceroModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=turismo_maritimo;charset=utf8', 'root', '');
    }
    /**
     *  Obtiene la lista de cruceros
     */
    function getcruceros()
    {
        $query = $this->db->prepare('SELECT * FROM cruceros');
        $query->execute();
        $cruceros = $query->fetchAll(PDO::FETCH_OBJ);
        return $cruceros;
    }
    function getcrucero($id)
    {
        $query = $this->db->prepare('SELECT * FROM cruceros WHERE id = ?');
        $query->execute([$id]);
        $crucero = $query->fetch(PDO::FETCH_OBJ);
        return $crucero;
    }
    public function save($nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles)
    {
        $destino_final = 'images/' . uniqid() . '.jpg';
        $destino_final2 = 'images/' . uniqid() . '.jpg';
        move_uploaded_file($img1, $destino_final);
        move_uploaded_file($img2, $destino_final2);
        $query = $this->db->prepare('INSERT INTO cruceros(nombre, compania, capacidad, origen, img1, img2, descripcion, detalles) VALUES(?,?,?,?,?,?,?,?)');
        $query->execute([$nombre, $compania, $capacidad, $origen, $destino_final, $destino_final2, $descripcion, $detalles]);
    }
    public function cruceroNoExiste($nombre)
    {
        $query = $this->db->prepare('SELECT COUNT(*) FROM cruceros WHERE nombre = ?');
        $query->execute([$nombre]);
        $count = $query->fetchColumn();
        return $count == 0;
    }
    function editar($crucero, $nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles)
    {
        $query = $this->db->prepare('UPDATE cruceros SET nombre=?, compania=?, capacidad=?, origen=?, img1=?, img2=?, descripcion=?, detalles=? WHERE ID = ?');
        $query->execute([$nombre, $compania, $capacidad, $origen, $img1, $img2, $descripcion, $detalles, $crucero]);

    }
    public function deleteCrucero($id){
        $query = $this->db->prepare("DELETE FROM `cruceros` WHERE ID = ?");
        $query2 = $this->db->prepare("DELETE FROM `tours` WHERE id_crucero = ?");
        $query2->execute([$id]);
        $query->execute([$id]);

    }
    

}