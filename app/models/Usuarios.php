<?php
class Usuario extends Model{
    public function getUsers(){
        $pdo = $this->connect();
        $query ="SELECT * FROM user";
        $datos = $pdo->prepare($query);

        $datos->execute() or die (implode(" >>", $datos->errorInfo()));


        if($datos->rowCount()>0){

            return $datos->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }


    }
}
?>