<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Все заказы аренды</title>
</head>
<body>
<h1>Список всех заказов аренды</h1>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Клиент</th>
        <th>Машина</th>
        <th>Дата начала</th>
        <th>Дата окончания</th>
        <th>Общая стоимость</th>
    </tr>
    </thead>
    <tbody>
    @foreach($rentalOrders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->client->name }} {{ $order->client->lastName }}</td>
            <td>{{ $order->car->brand }} {{ $order->car->model }}</td>
            <td>{{ $order->pickup_date }}</td>
            <td>{{ $order->dropoff_date }}</td>
            <td>{{ $order->total_price }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
