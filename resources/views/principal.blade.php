@extends('layouts.main')

@section('title', 'Home SCA DISAR')

@section('content')
  <h1>Bem-vindo ao Saúde da Criança e do Adolescente DISAR!</h1>
  <h2>Escolha um dos monitoramentos para acessar:</h2>
  <a href="/crianca">Saúde da Criança</a><br>
  <img src="/images/logo-saude-da-criança.png" alt="">
  <a href="/adolescente">Saúde do Adolescente</a>
  <img src="/images/logo-saude-do-adolescente.png" alt="">
  <!-- aqui tem um comentário html -->
  {{-- aqui tem um comentário do blade --}}
  <script src="js/functions.js"></script>
@endsection