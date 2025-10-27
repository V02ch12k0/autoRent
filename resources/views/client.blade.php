<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
{{--<h2>{{$client ? "lalalala".$client->id : "wrong id"}}</h2>--}}
@if($client)
    <table border="1">
        <thead>
        <td>id</td>
        <td>name</td>
        <td>second-name</td>
        </thead>
        @foreach($client->items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->lastName }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->passportData }}</td>
                <td>{{ $item->pivor->car_id }}</td>

            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
