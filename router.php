<?php 
    include_once "index.php";
    require_once "controller.php";

    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        if ($_GET["action"] == "mostrar"){
            $mostrar = new ControllerComentarios();
            $mostrar->leerComentario();
        }
    }
    elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $_POST['usuario'];
        $coment = $_POST['comentario'];
        $insertar = new ControllerComentarios();
        $insertar->insertarComentario($user, $coment);

    }
    else{
        echo "ERROR!!!";
    }
 
 
 
 ?>

