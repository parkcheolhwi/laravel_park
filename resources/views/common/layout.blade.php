<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Park</title>
    <link rel="stylesheet" href="{{mix('css/app.css')}}">
</head>
<body>
    <div class="container mx-auto px-24">
        @include('common.header')

        <div class="p-8">
            @yield('content')
        </div>
    </div>
</body>
</html>
