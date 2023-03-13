
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
</head>
<body>
    <h1>Estamos en la vista de alumnos</h1>
    <a href="<?=URL_BASE?>alumno/crearAlumno">Cargar nuevo alumno</a>
    
    <table border="2">
        <tr>
            <td>Apellido</td>
            <td>Nombre</td>
            <td>Curso</td>
        </tr>
        <?php //foreach ($alumnos as $al): 
            while($al = mysqli_fetch_assoc($alumnos)){
        ?>
            <tr>
                <td><?php echo $al['apellido']?></td>
                <td><?php echo $al['nombre']?></td>
                <td><?php echo $al['anio'].' '.$al['division']?></td>
                <td><a href="<?=URL_BASE?>alumno/editarAlumno_ctrl&id=<?= $al['id']?>">Editar</a></td>
                <td><a href="#">Eliminar</a></td>
            </tr>
        <?php //endforeach 
        }
        ?>

    </table>
</body>
</html>
