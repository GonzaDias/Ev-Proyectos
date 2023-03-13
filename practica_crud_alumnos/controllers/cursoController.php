<?php
    require_once 'models/curso.php';
    function verCursos(){
        $cursos = getAllCursos();
        
        require_once 'views/alumnos/nuevo.php';
    }
?>