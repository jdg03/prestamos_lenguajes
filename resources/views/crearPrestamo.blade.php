<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Préstamo</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Creacion de Préstamos</h2>
                <form action="{{route('guardar.prestamo')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="codigo_prestamo">Código de Préstamo</label>
                        <input type="text" class="form-control" id="codigoPrestamo" name="codigoPrestamo" required>
                    </div>
                    <div class="form-group">
                        <label for="monto">Monto</label>
                        <input type="number" step="0.01" class="form-control" id="monto" name="monto" required>
                    </div>
                    <div class="form-group">
                        <label for="plazo">Plazo</label>
                        <input type="number" class="form-control" id="plazo" name="plazo" required>
                    </div>
                    <div class="form-group">
                        <label for="tasa_interes">Tasa de Interés</label>
                        <input type="number" step="0.01" class="form-control" id="tasaInteres" name="tasaInteres" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y jQuery (opcional) 
