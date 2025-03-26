<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de Imc, Sono e Viagem!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Seja bem vindo(a) às Calculadoras!</h1>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{url('/imc')}}" class="btn btn-outline-primary w-100">Calcular IMC</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{url('/sono')}}" class="btn btn-outline-primary w-100">Avalie seu Sono</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{url('/viagem')}}" class="btn btn-outline-primary w-100">Calcular gasto de viagem</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>