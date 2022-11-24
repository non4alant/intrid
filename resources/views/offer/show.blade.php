<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$brands->name}}</title>
</head>
<body>
<div class="container">
    <h1>Карточка товара</h1>
    <h3>Бренд: {{$brands->name}}</h3>
    <form action="/public/offer/check" method="post">
        @csrf
        <p>Выберете цвет:</p>
        <select name="color">
            @foreach($colors as $color)
                <option value="{{$color->name}}">{{$color->name}}</option>
            @endforeach
        </select>

        <p>Выбере размер:</p>
        <select name="size">
            @foreach($sizes as $size)
                <option value="{{$size->eu}}">{{$size->eu}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <button>Проверить наличие</button>
    </form>
    <p>Все предложения по этому бренду:</p>
    <hr>
    @foreach($offers as $offer)
        @foreach($colors as $color)
            @if($color->id === $offer->color_id)
                <p>Цвет: {{$color->name}}</p>
            @endif
        @endforeach
        @foreach($sizes as $size)
            @if($size->id === $offer->size_id)
                <p>Размер: {{$size->eu}}</p>
            @endif
        @endforeach
        <p>Артикул товара: {{$offer->id}}</p>
            <hr>
    @endforeach
</div>
</body>
</html>
