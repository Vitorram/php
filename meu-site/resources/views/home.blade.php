<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Home – Meu Site</title>
</head>
<body>
  <h1>Bem-vindo ao meu site em Laravel!</h1>
  <nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">Sobre</a> |
    <a href="{{ route('contact') }}">Contato</a>
  </nav>
  <p>Este é um exemplo de página inicial.</p>
</body>
</html>
