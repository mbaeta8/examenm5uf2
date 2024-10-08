<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taules Html</title>
</head>
<body>
      <?php                                   
                $personas = [
                    [
                        'Nombre' => 'Juan',
                        'Primer_Apellido' => 'Perez',
                        'Segundo_Apellido' => 'Gomez',
                        'Fecha_Nacimiento' => '1985-03-12',
                        'DNI' => '54337562F'
                    ],
                    [
                        'Nombre' => 'Alberto',
                        'Primer_Apellido' => 'Martinez',
                        'Segundo_Apellido' => 'Gomez',
                        'Fecha_Nacimiento' => '1995-01-30',
                        'DNI' => '14681435C'
                    ],
                    [
                        'Nombre' => 'Marta',
                        'Primer_Apellido' => 'Calero',
                        'Segundo_Apellido' => 'Gomez',
                        'Fecha_Nacimiento' => '2000-08-22',
                        'DNI' => '87654321B',
                    ]
                ];

                $encabezados = [];

                foreach($personas as $persona)
                {
                    foreach($persona as $encabezado => $valor)
                    {
                        if(!in_array($encabezado,$encabezados))
                        {
                            $encabezados[] = $encabezado;
                        }
                    }
                }

                echo "<table border='1'>";
                echo "<thead>"; 
                echo "<tr>";

                foreach($encabezados as $encabezado)
                {   
                    echo "<th>" . ucfirst(str_replace('_',' ',$encabezado)) . "</th>";
                }

                echo "</tr>";
                echo "</thead>";
                echo "<tbody>"; 
                
                foreach($personas as $persona)
                {
                    echo "<tr>";

                    foreach($encabezados as $encabezado)
                    {
                        echo "<td>" . (isset($persona[$encabezado]) ? $persona[$encabezado] : '') . "</td>";
                    }

                    echo "</tr>";
                }

            echo "</tbody>";
            echo "</table>";
        ?>
</body>
</html>