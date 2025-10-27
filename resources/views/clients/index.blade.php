<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Все клиенты</title>
</head>
<body>
<table border="1">
    <thead>
    <td>id</td>
    <td>Имя</td>
    <td>Фамилия</td>
    <td>Телефон</td>
    <td>Паспортные данные</td>
    </thead>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->lastName }}</td>
            <td>{{ $client->phone }}</td>
            <td>{{ $client->passportData }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
