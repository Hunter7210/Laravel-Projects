<header>
  <div class="container">
    <div class="logo">
      <a href="{{ url('/') }}"><img src="{{ asset('logo.png') }}" alt="Logo do Portal de Vagas"></a>
    </div>
    <nav>
      <ul>
        <li><a href="{{ url('/') }}">Início</a></li>
        <li><a href="{{ url('/vagas') }}">Vagas</a></li>
        <li><a href="{{ url('/empresas') }}">Empresas</a></li>
        <li><a href="{{ url('/sobre') }}">Sobre Nós</a></li>
        <li><a href="{{ url('/contato') }}">Contato</a></li>
      </ul>
    </nav>
    <div class="user-options">
      @if(Auth::check())

      @if(request()->user()->where('tipo', 'empresa')->first())
        <!-- BUSCAR O NOME DO USUARIO QUE ESTA LOGADO -->
        <!-- <span>Olá, {{ Auth::user()->nome }}!</span>  -->
        <form action="{{ route('usuarios.logout') }}" method="POST" style="display:inline;">
          @csrf
          <button type="submit" class="login">Sair</button>
        </form>
        <button class="login">Cadastrar Vaga</button>
      @elseif(request()->user()->where('tipo', 'usuario')->first())
      <form action="{{ route('usuarios.logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="login">Sair</button>
        <button class="login">Ver Vagas</button>
      </form>

      @endif
      @else
      <a href="{{ route('usuarios.login') }}" class="login">Login</a>
      <a href="{{ route('usuarios.registro') }}" class="signup">Cadastre-se</a>
      @endif
    </div>
  </div>
</header>