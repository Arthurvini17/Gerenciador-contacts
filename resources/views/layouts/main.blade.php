<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/main.css', 'resources/js/app.js'])
    <title>@yield ('title')</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                @if (auth()->check())
                    <li>
                        <p>Olá {{ ucfirst(auth()->user()->name) }}</p>
                    </li>
                @else
                    @guest
                        <li><a href="{{ route('register') }}">Registrar</a></li>
                        <li><a href="{{ route('login') }}">Logar</a></li>
                    @endguest
                @endif
                {{-- <li> <a href="{{}}">Configuração</a></li> --}}
                <li><a href="{{ route('home.index') }}">Pagina inicial</a></li>
                @auth
                    <li> <a href="{{ route('contact.create') }}">Adicionar contato</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="button-log" type="submit">Logout</button>
                        </form>
                    </li>

                @endauth
            </ul>
        </nav>
    </header>

<main>
    @yield('content')
</main>
{{-- <footer>
    <h1 class="h1-footer"> &copy;Contacts fast</h1>
</footer> --}}
    
</body>

</html>
