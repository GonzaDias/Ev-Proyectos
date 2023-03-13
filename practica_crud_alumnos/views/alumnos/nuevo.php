
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alumnos</title>
</head>
<body>
    <?php if(isset($alumno) && isset($edit)):?>
        <h1>Editando Alumno <?=$alumno->nombre?></h1>
        <?php $url = URL_BASE."alumno/guardarAlumno_ctrl&id=".$alumno->id; ?>
    <?php else: ?>
        <h1>Creando nuevo Alumno</h1>
        <?php 
            "<h1>Cargando nuevo Alumno</h1>";
            $url = URL_BASE."alumno/guardarAlumno_ctrl";
        ?>
    <?php endif; ?>
    <form action= <?= $url ?> method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?= isset($alumno) && isset($edit) ? $alumno->nombre:'';?>">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" value="<?= isset($alumno) && isset($edit) ? $alumno->apellido:'';?>">

        <label>Curso</label>
        <select name="cursos">
            <?php
                foreach($cursos as $cur):?>
                    <option value="<?= $cur['id_curso']?>" 
                    <?= isset($alumno) && isset($edit) && $cur['id_curso'] == $alumno->idcurso? 'selected' : '';?> ><?php echo $cur['anio'].' '. $cur['division']?> 
                    </option>
            <?php                                                       
                endforeach
            ?>
        </select>
       <input type="submit" value="Enviar">
       <?php $edit = false ?>
    </form>
</body>
</html>