<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>
    <a href="{{ url('/') }}">Voltar para o início</a>
    
    <form action="{{ url('/imc/calculate') }}" method="POST">
        @csrf
        <div>
            <label for="weight">Peso (kg):</label>
            <input type="number" name="weight" step="0.1" required>
        </div>
        <div>
            <label for="height">Altura (m):</label>
            <input type="number" name="height" step="0.01" required>
        </div>
        <button type="submit">Calcular</button>
    </form>
    
    @isset($imcValue)
        <h2>Seu IMC é: {{ number_format($imcValue, 2, ',', '.') }}</h2>
    @endisset
</body>
</html>
