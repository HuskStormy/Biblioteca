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
        <h1>Usuarios</h1>
    </div>

    <div class="details">
        <p><strong>Creado por:</strong> Nombre del Usuario</p>
        <p><strong>Fecha de creación:</strong> {{ date('d/m/Y') }}</p>
        <p><strong>Descripción:</strong> agregar una descripcion</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>n°</th>
                <th>Nombre Usuario</th>
                <th>Estado</th>
                <th>Rol</th>
                <th>Centro Regional</th>
                <th>Correo</th>
                <th>contraseña</th>
                <th>Fecha Ultima coneccion</th>
                <th>Codigo Primer ingreso</th>
                <th>fecha vencimiento</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>n°</th>
                <td>Nombre Usuario</td>
                <td>Estado</td>
                <td>Rol</td>
                <td>Centro Regional</td>
                <td>Correo</td>
                <td>contraseña</td>
                <td>Fecha Ultima coneccion</td>
                <td>Codigo Primer ingreso</td>
                <td>fecha vencimiento</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>n°</th>
                <th>Nombre Usuario</th>
                <th>Estado</th>
                <th>Rol</th>
                <th>Centro Regional</th>
                <th>Correo</th>
                <th>contraseña</th>
                <th>Fecha Ultima coneccion</th>
                <th>Codigo Primer ingreso</th>
                <th>fecha vencimiento</th>
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
