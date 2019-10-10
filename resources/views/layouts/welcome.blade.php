<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
    </head>
    <body>
        <header>
          <h1>Laravel</h1>
        </header>
        <div class="nav">
          @guest
            <a href="{{ route('login') }}">LOGIN</a>
            <a href="{{ route('register') }}">REGISTER</a>
          @else
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                LOGOUT
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          @endguest
        </div>

        @yield('content')

        <footer>
          <h2>Powered By Mirko</h2>
        </footer>
    </body>
</html>
