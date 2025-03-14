<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/css/style.css"/>
        <script src="/js/scripts.js"></script>
        
    </head>
    <body class="antialiased">
       <h1>Coritnhisa</h1>
       @if(10 < 15)
                <p>a condiçao é true</p>
        @endif

        <p>{{$nome}}</p>

        @for($i = 0; $i < count($arr); $i++)
                <p>{{$arr[$i]}} - {{ $i }}</p>
                @if ($i == 2)
                    <p>o i é = 2</p>
                @endif
        @endfor
        @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach
        @php 
                $name = "joao";
                echo $name;
        @endphp

    </body>
    
</html>
