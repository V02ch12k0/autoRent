<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить в избранное</title>
</head>
<body>
<div>
    <h1>Добавить автомобиль в избранное</h1>
    <form action="{{ route('favorites.store') }}" method="POST">
        @csrf
        <div>
            <label for="client_id">Клиент:</label>
            <select id="client_id" name="client_id" required>
                <option style="" value="">Выберите клиента</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                        {{ $client->name }} {{ $client->surname ?? '' }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Выберите автомобиль:</label>
            @foreach($cars as $car)
                <div>
                    <input type="radio" name="car_id" id="car_{{ $car->id }}"
                           value="{{ $car->id }}" {{ old('car_id') == $car->id ? 'checked' : '' }} required>
                    <label for="car_{{ $car->id }}">
                        {{ $car->brand }} {{ $car->model }} ({{ $car->year }})
                    </label>
                </div>
            @endforeach
        </div>

        <div>
            <input type="checkbox" id="confirm" name="confirm" required>
            <label for="confirm">Подтверждаю добавление в избранное</label>
        </div>

        <button type="submit">Добавить в избранное</button>
        <a href="{{ route('favorites.index') }}">Назад к списку</a>
    </form>
</div>
</body>
</html>
