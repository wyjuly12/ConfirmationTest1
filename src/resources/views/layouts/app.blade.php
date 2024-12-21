<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/common.css')}}">
    @yield('css')
</head>

<header class="header">
    <div class="header__inner">
        <div class="hearder__title">
            <h2>FashionablyLate</h2>
        </div>
        <div class="hearder__button">
            @yield('header')
        </div>
    </div>

</header>

<main>
    @yield('content')
</main>


</html>