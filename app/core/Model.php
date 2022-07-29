<?php
//Madre de todos los modelos

class Model {
    protected static $config;


    protected function connect(){

        self::getConfig();
        $dsn = self::$config->type.":host=".
        self::$config->server."; dbname=".
        self::$config->database; 

        try{

            return new PDO ($dsn, self::$config->user, self::$config->password);

        }catch(PDOException $e){
            exit($e->getMessage());
        }
    }

    private function getConfig(){
        self::$config = json_decode (file_get_contents('app/config/database.json'));
    }
}

?>