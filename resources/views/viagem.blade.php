<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cálculo de Gasto de Viagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Cálculo de Gasto de Viagem</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/') }}" class="btn btn-secondary mb-4">Voltar para o início</a>
                        
                        <form action="{{ url('/viagem/calculate') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="distance" class="form-label">Distância (km):</label>
                                <input type="number" class="form-control" name="distance" step="0.1" required>
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Preço do Combustível:</label>
                                <input type="number" class="form-control" name="price" step="0.01" required>
                            </div>
                            <div class="mb-3">
                                <label for="consumption" class="form-label">Consumo (km/l):</label>
                                <input type="number" class="form-control" name="consumption" step="0.1" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Calcular</button>
                        </form>
                        
                        @isset($cost)
                            <div class="alert alert-success mt-4">
                                <h2 class="h4">Custo da Viagem: R$ {{ number_format($cost, 2, ',', '.') }}</h2>
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