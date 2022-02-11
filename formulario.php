<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <Ul>
            <li>
                <a href = "index.php">Indice</a>
            </li>
            <li>
                <a href = "formulario.php">Formulario</a>
            </li>
        </Ul>
        <form action="store.php" method="POST">
            <label form="tarea">Tarea:</label>
            <input type="text" name="tarea">
            <br>
            <label for="descripcion">Descripcion:</label>
            <input type="text" name="descripcion">
            <br>
            <label for="etiqueta">Etiqueta:</label>
            <select name="etiqueta">
                <option value="Escuela">Escuela</opcion>
                <option value="Personal">Personal</opcion>
                <option value="Trabajo">Trabajo</opcion>
        </select>
        <br>
        <input type="submit" value="Enviar">
        </form>

    <?php
        if(count($_POST)>0){
            $tarea = $_POST['tarea'];
            $descripcion = $_POST['descripcion'];
            $etiqueta = $_POST['etiqueta'];
        }
    ?>

    </body>
</html>