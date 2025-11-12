<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список избранных автомобилей</title>
</head>
<body>
<div>
    <h1>Список избранных автомобилей</h1>

    <div>
        <a href="{{ route('favorites.create') }}">Добавить новое избранное</a>
    </div>

    <table border="1">
        <thead>
            <td>ID</td>
            <td>Клиент</td>
            <td>Автомобиль</td>
            <td>Дата добавления</td>
            <td>Действия</td>
        </thead>
        @foreach($favorites as $favorite)
            <tr>
                <td>{{ $favorite->id }}</td>
                <td>
                    @if($favorite->client)
                        {{ $favorite->client->name }} {{ $favorite->client->surname ?? '' }}
                    @else
                        <span>Клиент не найден</span>
                    @endif
                </td>
                <td>
                    @if($favorite->car)
                        {{ $favorite->car->brand }} {{ $favorite->car->model }} ({{ $favorite->car->year }})
                    @else
                        <span class="text-danger">Автомобиль не найден</span>
                    @endif
                </td>
                <td>
                    @if($favorite->created_at)
                        {{ $favorite->created_at->format('d.m.Y H:i') }}
                    @else
                        <span class="text-muted">Не указана</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('favorites.edit', $favorite->id) }}">Редактировать</a>
                    <a href="{{ route('favorites.destroy', $favorite->id) }}">Удалить</a>
                </td>
            </tr>
        @endforeach
    </table>

    @if($favorites->isEmpty())
        <div class="alert alert-info">
            Нет записей об избранных автомобилях.
        </div>
    @endif
</div>
</body>
</html>
