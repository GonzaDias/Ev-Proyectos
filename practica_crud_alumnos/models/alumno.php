<?php
    require_once 'config/db.php';

    function guardarAlumno_model($id, $nom, $ape, $cur){  
        $db = connect();
        if(!empty($id)){      
            $result = $db->query('update alumnos set apellido= "'.$ape.'", nombre="'.strval($nom).'",id_curso="'.$cur.'" where id_alumno="'.$id.'"'); //funciona
            if($result){
                return true;
            }else{
                return false;
            }
        }else{
            $datos_alumno = "'".$ape."', '".$nom."','".$cur."'";
            $result = $db->query('insert into alumnos values(null,'.$datos_alumno.')');
            if($result){
                return true;
            }else{
                return false;
            }
        }
    }

    function getAllAlumnos(){
        $db = connect();
        $result = $db->query('select a.id_alumno as id, a.nombre as nombre, a.apellido as apellido, c.anio as anio, c.division as division'.
                             ' from alumnos as a inner join cursos as c'.
                             ' on a.id_curso = c.id_curso');
 
        return $result;
    }

    function getOne($id){
        $db= connect();
        $result = $db->query('select a.id_alumno as id, a.nombre as nombre, a.apellido as apellido, a.id_curso as idcurso, c.anio as anio, c.division as division'. 
        ' from alumnos as a'. 
        ' inner join cursos as c'. 
        ' on a.id_curso = c.id_curso'. 
        ' where a.id_alumno='.$id);
        $alumnos = array();
        return $result->fetch_object();

    }
?>


