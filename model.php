<?php 

class ModeloComentario {

    private $conexion;

    public function __construct(){
        $this->conexion = new PDO('mysql:host=localhost;dbname=ejemplo_db; charset=utf8', 'root', '');
    }

    public function leerComentario(){
        $peticion = $conexion->prepare('SELECT * FROM web2 ORDER DESC LIMIT 1' );
        $peticion->execute();
        $comentario = $peticion->fetchAll(PDO::FETCH_OBJ);
        return $comentario;    
    }

    public function insertarComentario($usuario, $insert_Com){
        $insercion = $conexion->prepare('INSERT INTO web2 VALUES (?, ?)');
        $insercion->execute(array($usuario, $insert_Com));

    }
    


}





?>