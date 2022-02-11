<!DOCTYPE html>
<html lang="en">
<style>
    table, th, td {
    border:1px solid black;
    border-collapse: collapse;
    width = 100%;
    padding: 15px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TAREAS</h1>
    <Ul>
    <?php
        include('conexion.php');
    ?>    
        <li>
            <a href = "index.php">Indice</a>
        </li>
        <li>
            <a href = "formulario.php">Formulario</a>
        </li>
    </Ul>
    <?php

        $sql = "SELECT * FROM tareas";
        $stmt = $conn->prepare($sql);
        $stmt->execute();  

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        echo "<table>
            <tr>
                <th>Id</th>
                <th>tarea</th>
                <th>descripcion</th>
                <th>etiqueta</th>
            </tr>";
            
            foreach($stmt->fetchAll() as $row){
                echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>"; 
                    echo "<td>" . $row['tarea'] . "</td>"; 
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo "<td>" . $row['etiqueta'] . "</td>";
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>