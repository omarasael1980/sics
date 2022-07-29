<?php

class Messages{
    public const SUCCESS = 'success';
    public const INFO ='info';
    public const WARNING = 'warning';
    public const DANGER = 'danger';

public static function setMessage($msg, $type = self::INFO){
    self::start();
    $_SESSION['msg'][]= array ('msg'=>$msg, 'type'=>$type);
}

public static function getMessage(){
    self::start();
    //si existe la variable se regresa
    if(isset($_SESSION['msg'])){
        return $_SESSION['msg'];
    }else{
        return false;
    }


}
//limpiar variable
public static function clearMessage(){
    self::start();
    if(isset($_SESSION['msg'])){
        unset($_SESSION['msg']);

    }

}

    private static function start(){

        if(!isset($_SESSION)){
            session_start();
        }
    }

}


?>