<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Calculadora de IMC</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary mb-4">Voltar para o início</a>
                        
                        <form action="{{ url('/imc/calculate') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="weight" class="form-label">Peso (kg):</label>
                                <input type="number" class="form-control" id="weight" name="weight" step="0.1" required>
                            </div>
                            <div class="mb-3">
                                <label for="height" class="form-label">Altura (m):</label>
                                <input type="number" class="form-control" id="height" name="height" step="0.01" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </form>
                        
                        @isset($imcValue)
                            <div class="alert alert-info mt-4">
                                <h2 class="h4">Seu IMC é: {{ number_format($imcValue, 2, ',', '.') }}</h2>
                            </div>
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>