<?php 
//extiende de la clase Controller 

require 'app/models/Usuarios.php';

//home es hijo de controller
class Home extends Controller{
   public function index(){

    
    
    $this->view('home', []);
   }
}
?> 