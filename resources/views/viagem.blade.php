<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cálculo de Gasto de Viagem</title>
</head>
<body>
    <h1>Cálculo de Gasto de Viagem</h1>
    <a href="{{ url('/') }}">Voltar para o início</a>
    
    <form action="{{ url('/viagem/calculate') }}" method="POST">
        @csrf
        <div>
            <label for="distance">Distância (km):</label>
            <input type="number" name="distance" step="0.1" required>
        </div>
        <div>
            <label for="price">Preço do Combustível:</label>
            <input type="number" name="price" step="0.01" required>
        </div>
        <div>
            <label for="consumption">Consumo (km/l):</label>
            <input type="number" name="consumption" step="0.1" required>
        </div>
        <button type="submit">Calcular</button>
    </form>
    
    @isset($cost)
        <h2>Custo da Viagem: {{ number_format($cost, 2, ',', '.') }}</h2>
    @endisset
</body>
</html>