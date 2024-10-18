@extends('layouts.financial')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-piggy-bank"></i> Entradas e Saidas</h1>

    <div class="dash_table">
        <div class="dash_table_header">
            <span>ID:</span>
            <span>Nome:</span>
            <span>Cnpj:</span>
            <span>Deletar\Editar</span>
        </div>
        <div class="dash_table_column">
            <span>1</span>

            <span>ClinicaA</span>
            <span>9999999999</span>
            <span><a href="#">Gerenciar</a></span>
        </div>
        <div class="dash_table_column">
            <span>2</span>

            <span>ClinicaB</span>
            <span>88888888888</span>
            <span><a href="#">Gerenciar</a></span>
        </div>
    </div>
</div>
@endsection
