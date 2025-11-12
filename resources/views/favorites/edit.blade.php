<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактировать избранное</title>
</head>
<body>
<div>
    <h1>Редактировать избранное</h1>
    <form action="{{ route('favorites.update', $favorite->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="client_id">Клиент:</label>
            <select id="client_id" name="client_id" required>
                <option style="" value="">Выберите клиента</option>
                @foreach($clients as $client)
                    <option value="{{ $client->id }}"
                        {{ $favorite->client_id == $client->id ? 'selected' : '' }}>
                        {{ $client->name }} {{ $client->surname }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="car_id">Автомобиль:</label>
            <select id="car_id" name="car_id" required>
                <option style="" value="">Выберите автомобиль</option>
                @foreach($cars as $car)
                    <option value="{{ $car->id }}"
                        {{ $favorite->car_id == $car->id ? 'selected' : '' }}>
                        {{ $car->brand }} {{ $car->model }} ({{ $car->year }})
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <input type="checkbox" id="confirm" name="confirm" required>
            <label for="confirm">Подтверждаю изменения</label>
        </div>
        <button type="submit">Обновить</button>
        <a href="{{ route('favorites.index') }}">Назад к списку</a>
    </form>
</div>
</body>
</html>
