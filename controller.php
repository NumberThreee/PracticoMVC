<?php 
require_once "model.php";
require_once "viewer.php";
class ControllerComentarios{
    private $modelo;
    private $vista;

    public function __construct(){
        $this->modelo = new ModeloComentario();
        $this->vista = new VistaComentario();
    }
    public function leerComentario(){
        $comentario = $this->modelo->leerComentario();
        $user = $comentario->usuario;
        $coment = $comentario->comentario;
        $this->vista->mostrarComentario($user, $coment);
    }

    public function insertarComentario($user, $coment){
        $this->modelo->insertarComentario($user, $coment);
    }

}



?>