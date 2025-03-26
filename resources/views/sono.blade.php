<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Avaliação do Sono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h1 class="mb-0">Avaliação do Sono</h1>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/') }}" class="btn btn-secondary mb-4">Voltar para o início</a>
                        
                        <form action="{{ url('/sono/evaluate') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="sleep_time" class="form-label">Hora de dormir (HH:MM):</label>
                                <input type="time" class="form-control" name="sleep_time" required>
                            </div>
                            <div class="mb-3">
                                <label for="wake_time" class="form-label">Hora de acordar (HH:MM):</label>
                                <input type="time" class="form-control" name="wake_time" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Avaliar</button>
                        </form>
                        
                        @isset($evaluation)
                            <div class="alert alert-info mt-4">
                                <h2>Você dormiu por {{ number_format($hours, 2, ',', '.') }} horas: {{ $evaluation }}</h2>
                                <p>Você dormiu às {{ $sleep_time }} e acordou às {{ $wake_time }}</p>
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