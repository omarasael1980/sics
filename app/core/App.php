<?php
class App {
    protected $controlador = 'Home';
    protected $metodo = 'index';
    protected $parametros = array();

    public function  __construct(){
        $url = $this->filtraUrl();
        //se verifica si existe ese controlador
        if(isset($url) && file_exists('app/controllers/' . $url[0] . '.php')){
            $this->controlador = $url[0];
            //se elimina de la url
            unset($url[0]);
        }
        //requerir archivo almacenado
        require_once 'app/controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;
        //se verifica si existe el metodo dentro de la clase 
        if(isset($url[1])){
            if (method_exists($this->controlador, $url[1])){
                $this->metodo = $url[1];
                unset($url[1]);
            }

        }
        //si queda algo en la url se asigna a params los nombres de los valores
        $this->parametros = $url ? array_values ($url) : [];
        if(isset ($url) ){
            $this->parametros = array_values ($url);
        }else{
         $this->parametros = array();   
        }
        //se usa la funcion para llamr el metodo de una clase con parametros
        call_user_func_array (array($this->controlador, $this->metodo), $this->parametros);


    }
    //quitar caracteres que no pertenecen a la url
    
    private function filtraUrl(){
        if(isset($_GET['url'])){
            //se remueve diagonales
            $quitaDiagonal = rtrim($_GET['url'], '/');
            //remover todos los caracteres que no son de url
            $filtraUrl = filter_var($quitaDiagonal,FILTER_SANITIZE_URL );
            $urlTemporal = explode('/', $filtraUrl);
            return $urlTemporal;
        }
    }

}

?>