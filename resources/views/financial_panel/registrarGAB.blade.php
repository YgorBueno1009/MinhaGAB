@extends('layouts.financial')
@section('content')
<div class="dash_page">
    <h1 class="page_title"><i class="fa-solid fa-building-columns"></i> Registrar GAB</h1>

    <form class="page_form" method="post" action="">
        @csrf
        <div class="input_box">
            <label for="">Selecionar clínica:</label>
            <select name="acc_type" class="page_input" required>
                <option value="0">selecione</option>
                <option value="1">conta corrente</option>
                <option value="2">conta poupança</option>
                <option value="3">conta conjunta</option>
            </select>
        </div>

        <div class="input_box">
            <label for="">Selecionar paciente:</label>
            <select name="acc_type" class="page_input" required>
                <option value="0">selecione</option>
                <option value="1">conta corrente</option>
                <option value="2">conta poupança</option>
                <option value="3">conta conjunta</option>
            </select>
        </div>

        <div class="input_box">
            <label>GAB:</label>
            <input onchange="readURL(this);" class="page_input" type="file" name="image" placeholder="Select a Image..." required>
            <div class="image_preview">
                <div class="no_image">
                    <i class="fa-regular fa-image"></i>
                    <span>Preview</span>
                </div>
                <img src="" alt="">
            </div>
        </div>

        <div class="input_box">
            <input type="submit" value="Registrar">
        </div>
    </form>
</div>
@endsection
