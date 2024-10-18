@extends('layouts.financial')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-piggy-bank"></i> Gerenciar GABs</h1>

    <div class="dash_table">
        <div class="dash_table_header">
            <span>Status:</span>
            <span>Paciente:</span>
            <span>Clínica:</span>
            <span>Deletar\Editar</span>
        </div>
        <div class="dash_table_column">
            <span class="tipo_entrada">Emitida</span>

            <span>Samuel</span>
            <span>Saúde A+</span>
            <span><a href="#">Gerenciar</a></span>
        </div>
        <div class="dash_table_column">
            <span class="tipo_saida">Negada</span>

            <span>Ygor</span>
            <span>Saúde A+</span>
            <span><a href="#">Gerenciar</a></span>
        </div>
    </div>
</div>
@endsection
