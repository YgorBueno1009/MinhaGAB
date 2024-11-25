@extends('layouts.auth')

@section('content')
<section class="login-page">
    <div class="left">
      <div class="wrapper">
        <div class="cta">
          <h1>MinhaGAB</h1>
          <p>O gerenciador de <i>Guias Laboratoriais</i> que você precisava.</p>
        </div>
        <img src="{{getenv('APP_URL')}}/assets/register_page.svg" alt="login_image">
        <div> </div>
      </div>
    </div>

    <div class="right">
      <div class="login-box">
        <h1>Criar conta</h1>
        <form method="POST" action="{{route("register")}}">
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
          <div class="input_single">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" placeholder="João da Silva">
          </div>
          <div class="input_single">
            <label for="cpf_cnpj">CPF:</label>
            <input type="text" name="cpf_cnpj" id="cpf" placeholder="000.000.000-00">
          </div>
            <input type="hidden" name="role" value="patient">

          <div class="input_single">
            <label for="email">Email:</label>
            <input type="email" name="email" id="cpf" placeholder="joao.silva@gmail.com">
          </div>
          <div class="input_single">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" placeholder="************">
          </div>
          <div class="input_single">
            <input type="submit" value="Criar">
          </div>
          <div class="link_box">
            <a href="{{route('login-page')}}">Já tenho uma conta</a>
          </div>
        </form>
      </div>
    </div>
</section>
@endsection
