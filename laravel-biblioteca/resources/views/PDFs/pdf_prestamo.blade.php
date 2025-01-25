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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.onload = function() {
                if ({{!session()->has('Session')}}) { window.location.href = "{{url('/login')}}";}
            }
        });
    </script>
    
    <div class="header">
        <img src="{{public_path().'/asset/imagenes/infop_logo2.png'}}" alt="">
        <h1>Prestamo</h1>
    </div>

    <div class="details">
        <p><strong>Creado por:</strong> Nombre del Usuario</p>
        <p><strong>Fecha de creación:</strong> {{ date('d/m/Y') }}</p>
        <p><strong>Descripción:</strong> agregar una descripcion</p>
    </div>


    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID Préstamo</th>
                <th>ID Usuario</th>
                <th>Responsable</th>
                <th>Material</th>
                <th>Tipo de Préstamo</th>
                <th>Estado</th>
                <th>Fecha Préstamo</th>
                <th>Fecha Devolución</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PR-001</td>
                <td>USR-123</td>
                <td>Juan Pérez</td>
                <td>Libro de Física</td>
                <td>Temporal</td>
                <td>Activo</td>
                <td>2024-12-01</td>
                <td>2024-12-15</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>ID Préstamo</th>
                <th>ID Usuario</th>
                <th>Responsable</th>
                <th>Material</th>
                <th>Tipo de Préstamo</th>
                <th>Estado</th>
                <th>Fecha Préstamo</th>
                <th>Fecha Devolución</th>
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
