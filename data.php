<?php
    require('./alumnos.php');
    $data = array();
    function test(&$data) {
        $alumno1 = new Alumnos('Carla', 'Pérez', 20);
        $alumno2 = new Alumnos('Maria', 'Gómez', 30);
        $alumno3 = new Alumnos ('Pepe', 'Martinez', 35);

        //modify data alumn 1 
        $alumno1 -> setName('Jorge');
        $alumno1 -> setSubname('Fernandez');
        $alumno1 -> setAge(34);
        //get data and put into array
        $data[] = array(
            'nombre' => $alumno1->getName(),
            'apellidos' => $alumno1->getSubname(),
            'edad' => $alumno1->getAge()
        );
        
        $data[] = array(
            'nombre' => $alumno2->getName(),
            'apellidos' => $alumno2->getSubname(),
            'edad' => $alumno2->getAge()
        );
        
        $data[] = array(
            'nombre' => $alumno3->getName(),
            'apellidos' => $alumno3->getSubname(),
            'edad' => $alumno3->getAge()
        );

    }

    test($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumn info</title>
    <link rel="stylesheet" href="./data.css">
</head>
<body>
    <section class="data__container">
        <h1 class="data__container__title">
            Información de los alumnos:
        </h1>
        <table class="data__container__info">
            <tr class="data__container__info--title">
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Edad</th>
            </tr>
            <?php
                foreach ($data as $student) {
                    echo "<tr class='data__container__info--information'>";
                    echo "<td>" . $student['nombre'] . "</td>";
                    echo "<td>" . $student['apellidos'] . "</td>";
                    echo "<td>" . $student['edad'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </section>
</body>
</html>