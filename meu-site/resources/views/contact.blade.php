<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contato – Meu Site</title>
</head>
<body>
  <h1>Fale Comigo</h1>
  <nav>
    <a href="{{ route('home') }}">Home</a> |
    <a href="{{ route('about') }}">Sobre</a> |
    <a href="{{ route('contact') }}">Contato</a>
  </nav>
  <form action="#" method="POST">
    @csrf
    <label>Nome:</label>
    <input type="text" name="name" /><br/><br/>
    <label>E-mail:</label>
    <input type="email" name="email" /><br/><br/>
    <button type="submit">Enviar Mensagem</button>
  </form>
</body>
</html>
