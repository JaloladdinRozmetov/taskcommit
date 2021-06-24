<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
{{--    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.css"/>--}}
    <link type="text/css" rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<section class="header-section">
<div class="container">
    <div class="header">
        <div>
            <p class="contacts-item">Телефон: <a href="tel:(499)3409471">(499)940-94-71</a></p>
            <p class="contacts-item contacts-item--email">Email: <a href="mail:info@fututre-group.ru">info@fututre-group.ru</a></p>
            <h2 class="main-title">Комментариии</h2>
        </div>
        <div>
            <img src="assets/image/logo.jpg" alt="">
        </div>
    </div>
</div>
</section>
<div class="bg">
    <div class="container">
        <ul class="comments__list">
            @foreach($data as $item)
            <li class="comments-item">
                <p class="comments-item__title">
                    <span class="comments-item__name">{{$item->first_name}}</span> <time class="comments-item__time"> <span class="comments-item__hour">{{$item->created_at}}</span> <span class="comments-item__date"></span></time>
                </p>
                <p class="comments-item__text">{{$item->commit}}</p>
            </li>
            @endforeach
        </ul>
        <hr>
        <p class="form__title">Оставить комментарий</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('commits.store')}}" method="POST">
           @csrf
            <div class="form__container">
                <div class="form__item">
                    <label class="form__label" for="name">Ваше имя </label>
                    <input class="form__text" name="first_name" id="name" type="text" value="">
                </div>
                <div  class="form__item">
                    <label class="form__label" for="">Ваше комментарий </label>
                    <textarea class="form__area" name="commit" id="" cols="30" rows="10"></textarea>
                </div>

                <input class="form__submit" type="submit">
            </div>
        </form>

    </div>

</div>


</body>
</html>
