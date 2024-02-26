<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Amortización</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Tabla de Amortización</h2>
                <h4>Código Préstamo: <span id="codigo_prestamo">{{$prestamo->id}}</span></h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Periodo</th>
                            <th>Interés</th>
                            <th>Capital</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí se pueden añadir filas dinámicamente con JavaScript o con datos del backend -->
                        <tr>
                            <td>1</td>
                            <td>$100.00</td>
                            <td>$500.00</td>
                            <td>$4,500.00</td>
                        </tr>
                        <!-- Puedes agregar más filas de ejemplo aquí -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y jQuery (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
