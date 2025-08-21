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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  {{-- CSS da aplicação --}}
  <link rel="stylesheet" href="/css/styles.css">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <img src="{{ asset('images/hdcevents_logo.svg') }}" alt="HDC Events">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">Eventos</a>
          </li>
          <li class="nav-item">
            <a href="/events/create" class="nav-link">Criar eventos</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Entrar</a>
          </li>
          <li class="nav-item">
            <a href="/" class="nav-link">Cadastrar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  {{-- Essa direteva serve para inserir o conteúdo da página --}}
  @yield('content')

  <footer>
    <p>Nosso rodapé &copy; 2025</p>
  </footer>
  {{-- bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
  {{-- script dos ícones --}}
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>