<!-- Pagina app é onde chamo todos os links do meu projetos -->
@extends('layouts.app') 
@section('content')
  <main>
    <section class="welcome-section">
      <h1>Bem-vindo ao Portal de Vagas</h1>
      <p>Encontre as melhores oportunidades de emprego e conecte-se com empresas de todo o Brasil.</p>
      <a href="{{ url('/vagas') }}" class="btn">Ver Vagas</a>
    </section>
  </main>
@endsection
