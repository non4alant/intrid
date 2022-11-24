<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Все бренды</title>
</head>
<body>
    <div>
        <nav>
            <ul>
                @foreach($brands as $brand)
                    <ul><a href="offer/{{$brand->id}}">{{$brand->name}}</a></ul>
                @endforeach
            </ul>
        </nav>

    </div>
</body>
</html>



