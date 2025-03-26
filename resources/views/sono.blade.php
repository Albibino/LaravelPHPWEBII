<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Avaliação do Sono</title>
</head>
<body>
    <h1>Avaliação do Sono</h1>
    <a href="{{ url('/') }}">Voltar para o início</a>
    
    <form action="{{ url('/sono/evaluate') }}" method="POST">
        @csrf
        <div>
            <label for="sleep_time">Hora de dormir (HH:MM):</label>
            <input type="time" name="sleep_time" required>
        </div>
        <div>
            <label for="wake_time">Hora de acordar (HH:MM):</label>
            <input type="time" name="wake_time" required>
        </div>
        <button type="submit">Avaliar</button>
    </form>
    
    @isset($evaluation)
        <h2>Você dormiu por {{ number_format($hours, 2, ',', '.') }} horas: {{ $evaluation }}</h2>
        <p>Você dormiu às {{ $sleep_time }} e acordou às {{ $wake_time }}</p>
    @endisset
</body>
</html>