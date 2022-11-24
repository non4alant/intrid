<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if(isset($check[0]))
    @foreach($check as $value)
        <p>Артикул товара: {{$value->id}}</p>
        <p>Количество: {{$value->count}}</p>
    @endforeach
    @endif
    @if(!isset($check[0]))
        <p>Нет в наличие</p>
    @endif
</body>
</html>
