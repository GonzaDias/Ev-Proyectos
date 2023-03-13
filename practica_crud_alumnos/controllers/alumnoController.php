<?php
    require_once 'models/alumno.php';
    require_once 'models/curso.php';

    function verAlumnos(){
        $alumnos = getAllAlumnos();
        require_once 'views/alumnos/ver.php';
    }

    function guardarAlumno_ctrl(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }else{
            $id = 0;
        }
        if(isset($_POST['nombre'])){
            $nombre = $_POST['nombre'];
        }
        if(isset($_POST['apellido'])){
            $apellido = $_POST['apellido'];
        }
        if(isset($_POST['cursos'])){
            $curso = $_POST['cursos'];
        }
        $r = guardarAlumno_model($id, $nombre, $apellido, $curso);
        
        header('Location: http://localhost/PHP/practica_crud_alumnos/index.php');
    }

    function editarAlumno_ctrl(){
        $edit = true;
        $cursos = getAllCursos();
        
        if(isset($_GET['id'])){
            $id_al = $_GET['id'];
            $alumno = getOne($id_al);
        }else{
            echo "no se recibio el ID";
        }
        require_once 'views/alumnos/nuevo.php';
    }

    function crearAlumno(){
        $edit = false;
        $cursos = getAllCursos();
        require_once 'views/alumnos/nuevo.php';
    }
?>