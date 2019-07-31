<!DOCTYPE html>
<html>
    <head>
        <title>Szkoła</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ URL::asset('css/fronted.css') }}">
        <script src="{{ URL::asset('js/jquery.js') }}"></script>
        <link rel="stylesheet" href="{{ URL::asset('lightbox/src/css/lightbox.css') }}">
    </head>
<body>
    <div id="container">
        <header>
        </header>
        <nav id="main_menu">
            <ul>
                <li><a href="{{ URL::to('aktualnosci') }}">Aktualności</a></li>
                <li><a href="{{ URL::to('pliki') }}">Pliki</a></li>
                <li><a href="{{ URL::to('kadra') }}">Kadra</a></li>
                <li><a href="{{ URL::to('ogloszenia') }}">Ogłoszenia</a></li>
                <li><a href="{{ URL::to('galeria') }}">Galeria</a></li>
                <li><a href="{{ URL::to('kontakt') }}">Kontakt</a></li>
            </ul>    
        </nav>
        
        @yield('content')
        
        <footer>
        </footer>
    </div>
    <script src="{{ URL::asset('lightbox/src/js/lightbox.js') }}"></script>

</body>
</html>
    
    
    



