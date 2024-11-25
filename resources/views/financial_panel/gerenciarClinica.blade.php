@extends('layouts.financial')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-piggy-bank"></i> Entradas e Saidas</h1>

    <table class="dash_table">
        <thead>
            <tr class="dash_table_header">
                <th>ID</th>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Deletar/Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clinics as $clinic)
            <tr class="dash_table_column">
                <td>{{$clinic['id']}}</td>
                <td>{{$clinic['name']}}</td>
                <td>{{$clinic['cpf_cnpj']}}</td>
                <td><a href="#">Gerenciar</a></td>
            </tr>
            @endforeach
        </tbody>
</div>
@endsection
