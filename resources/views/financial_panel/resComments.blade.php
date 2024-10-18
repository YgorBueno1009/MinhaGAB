@extends('layouts.financial')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-piggy-bank"></i> Gerenciar GABs</h1>

    <div class="dash_table">
        <div class="dash_table_header">
            <span>Respondido:</span>
            <span>Paciente ID:</span>
            <span>Comentario:</span>
            <span>Responder</span>
        </div>
        @foreach ($comments as $comment)

        <div class="dash_table_column">
            @if ($comment['status'] == 'aguardando')
            <span class="tipo_saida">Não</span>
            @else
            <span class="tipo_entrada">Sim</span>
            @endif
            <span>{{$comment['patient_id']}}</span>
            <span></span>
            <span>{{substr($comment['comment'], 3)}}</span>
            <span><a href="{{route('responder', $comment['id'])}}">Responder</a></span>
        </div>
        @endforeach

    </div>
</div>
@endsection
