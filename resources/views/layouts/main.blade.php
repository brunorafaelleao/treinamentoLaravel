<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>@yield('title')</title>

  {{-- fonts do google --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Roboto"
    rel="stylesheet">

  {{-- bootstrap --}}
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  {{-- CSS da aplicação --}}
  <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
  {{-- Essa direteva serve para inserir o conteúdo da página --}}
  @yield('content')

  <footer>
    <p>Nosso rodapé &copy; 2025</p>
  </footer>
</body>

</html>