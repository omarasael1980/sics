<?php
//clase padre de todos los controladores

class Controller {
    //funcion para cargar vistas pasando parametros
    public function view($view, $data= array()){
        extract ($data);
        require'app/views/'.$view.'.php';

    }
    //funcion para redirigir paginas
    public function redirect($url){
        //si se busca el index
        if($url ==='/'){
            header('Location: /');
        }else{ //sino se manda a la pagina buscada
            header('Location:/'.$url);
        }
    }
}
?>