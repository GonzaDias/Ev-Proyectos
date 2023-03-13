<?php
    function connect(){
        $db = new mysqli('localhost', 'root', '', 'crud_alumnos');
        //comparar si la conexion es correcta
        if(mysqli_connect_errno()){
            echo "La conexion a la base de datos Mysql ha fallado: ".mysqli_connect_error();
        }
        else{
            echo "La conexion e realizo correctamente";
        }
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
?>