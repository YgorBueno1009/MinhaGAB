@extends('layouts.auth')

@section('content')
<section class="login-page">
    <div class="left">
      <div class="wrapper">
        <div class="cta">
          <h1>MinhaGAB</h1>
          <p>O gerenciador de <i>Guias Laboratoriais</i> que você precisava.</p>
        </div>
        <img src="{{getenv('APP_URL')}}/assets/login_page.svg" alt="login_image">
        <div> </div>
      </div>
    </div>

    <div class="right">
      <div class="login-box">
        <h1>Login</h1>
        <form method="POST" action="{{route('login')}}">
            @csrf
            @if ($errors->any())
            <div style="color: white; background-color: red; width: 100%; padding:20px;border-radius:10px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('error'))
                <div style="color: white; background-color: red; width: 100%; padding:20px;border-radius:10px;">{{ session('error') }}</div>
            @endif
          <div class="input_single">
            <label for="cargo">Cargo:</label>
            <select name="role" id="cargo">
              <option value="patient">Paciente</option>
              <option value="financial">Financeiro</option>
              <option value="clinic">Clínica</option>
            </select>
          </div>
          <div class="input_single">
            <label for="cpf_cnpj">CPF:</label>
            <input type="text" name="cpf_cnpj" id="cpf" placeholder="000.000.000-00">
          </div>
          <div class="input_single">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="************">
          </div>
          <div class="input_single">
            <input type="submit" value="Entrar">
          </div>
          <div class="link_box">
            <a href="{{route('register-page')}}">Não tenho uma conta</a>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
