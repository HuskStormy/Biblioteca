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
        <h1>Título del Reporte</h1>
    </div>

    <div class="details">
        <p><strong>Creado por:</strong> Nombre del Usuario</p>
        <p><strong>Fecha de creación:</strong> {{ date('d/m/Y') }}</p>
        <p><strong>Descripción:</strong> Agregar una Descripción</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Encabezado 1</th>
                <th>Encabezado 22</th>
                <th>Encabezado 3</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dato 1</td>
                <td>Dato 2</td>
                <td>Dato 3</td>
            </tr>
            <tr>
                <td>Dato 4</td>
                <td>Dato 5</td>
                <td>Dato 6</td>
            </tr>

        </tbody>
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
