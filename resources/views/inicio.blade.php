<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Préstamo</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4">Información de Préstamo</h2>
                <div>
                    <a href="{{route('crear.prestamo')}}" class="btn btn-primary" style="margin: 10px"> Crear prestamo</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Código de Préstamo</th>
                                <th>Cuota</th>
                                <th>Monto</th>
                                <th>Tasa de Interés</th>
                                <th>Plazo</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prestamos as $prestamo)
                                
                           
                                <tr>
                                    <td>{{$prestamo->id}}</td>
                                    <td>{{$prestamo->cuota}}</td>
                                    <td>{{$prestamo->monto}}</td>
                                    <td>{{$prestamo->tasa_de_interes}} %</td>
                                    <td>{{$prestamo->plazo}} meses</td>
                                    <td><a href="{{route('ver.amortizacion',$prestamo->id)}}">ver amortizacion</a></td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y jQuery (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
