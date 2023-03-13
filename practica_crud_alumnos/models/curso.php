<?php
    require_once 'config/db.php';
    function getAllCursos(){
        $db = connect();
        $result = $db->query('select id_curso, anio, division from cursos');

        $cursos = array();
        while($curso = $result->fetch_assoc())
            $cursos[] = $curso;

        return $cursos;
    }
?>