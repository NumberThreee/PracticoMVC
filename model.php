<?php 

class ModeloComentario {

    private $conexion;

    public function __construct(){
        $this->conexion = new PDO('mysql:host=localhost;dbname=db_comentarios; charset=utf8', 'root', '');
    }

    public function leerComentario(){
        $peticion = $this->conexion->prepare('SELECT usuario, comentario FROM comentarios ORDER BY id DESC LIMIT 1');
        $peticion->execute();
        $comentario = $peticion->fetch(PDO::FETCH_OBJ);
        return $comentario;    
    }

    public function insertarComentario($usuario, $insert_Com){
        $insercion = $this->conexion->prepare('INSERT INTO comentarios (usuario, comentario) VALUES (?, ?)');
        $insercion->execute(array($usuario, $insert_Com));

    }
    


}





?>