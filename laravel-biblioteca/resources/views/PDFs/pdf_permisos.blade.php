<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte</title>
    <link rel="stylesheet" href="asset/pdf.css">
</head>
<body>
    <div class="header">
        <img src="{{public_path().'/asset/imagenes/infop_logo2.png'}}" alt="">
        <h1>Permisos</h1>
    </div>

    <div class="details">
        <p><strong>Creado por:</strong> Nombre del Usuario</p>
        <p><strong>Fecha de creación:</strong> {{ date('d/m/Y') }}</p>
        <p><strong>Descripción:</strong> agregar una descripcion</p>
        <p><strong>rol asignado:</strong> un rol especifico</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>n°</th>
                <th>Permiso</th>
                <th>Pantalla</th>
                <th>Guardar</th>
                <th>Modificar</th>
                <th>Eliminar</th>
                <th>Buscar</th>
                <th>Crear</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>n°</td>
                <td>Permiso</td>
                <td>Pantalla</td>
                <td>true</td>
                <td>true</td>
                <td>false</td>
                <td>true</td>
                <td>true</td>

            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>n°</th>
                <th>Permiso</th>
                <th>Pantalla</th>
                <th>Guardar</th>
                <th>Modificar</th>
                <th>Eliminar</th>
                <th>Buscar</th>
                <th>Crear</th>
            </tr>
        </tfoot>
    </table>

    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(270, 780, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
    </script>
</body>
</html>
