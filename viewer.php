<?php

class VistaComentario{

    public function mostrarComentario($user, $coment){
        echo '<p>' . $coment . '</p>';
        echo '<br>';
        echo '<p> Por: '. $user  . '</p>';

    }


}


?>
