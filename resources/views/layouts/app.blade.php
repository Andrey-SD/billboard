<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
<header>
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <a href="{{ url('/') }}" class="title">
            {{ config('app.name') }}
            </a>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="log-panel">
            @guest
                <form class="auth" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <input id="name" type="text" name="name" value="{{ old('name') }}"
                    placeholder="Имя" required>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    <input id="password" type="password" name="password"
                    placeholder="Пароль" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    <br>
                    <button type="submit">Вход / Регистрация</button>
                </form>
            @else
                <span class="name">{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}" title="Выйти"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <img src="{{ asset('img/dev/logout.svg') }}" width="25"
                    height="25" border="0" alt="Выйти">
                </a>
                <form id="logout-form" action="{{ route('logout') }}"
                   method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                <br>
                <a href="{{ asset('/create') }}" class="create-add">
                Добавить объявление
                </a>
            @endguest
            </div>
        </div>
    </div>
</header>
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
