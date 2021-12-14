<?php

require_once $_SERVER ['DOCUMENT_ROOT'] ."/db/vendor/autoload.php";

class Conexion{

    public static function conectar(){

        $servidor = "127.0.0.1";
        $puerto="27017";
        $usuario ="pollo";
        $password ="1234";
        $BD ="crudmongo";
        #crea algo como mongo://escritor:12345@127.0.0.1:27017/crud
        $cadenaConexion = "mongodb://" . $usuario . ":" . 
            $password . "@" . $servidor . 
            ":" . $puerto . "/" . $BD;

        try{

            $cliente = new MongoDB\Client($cadenaConexion);
        
            return $cliente->selectDatabase($BD);


        }catch(\Throwable $th){

        return $th;

    }

}

}

// $obj = new Conexion();
//esto esta comentado - > Lo podremos ocupar  
// print_r($obj->conectar());

?>