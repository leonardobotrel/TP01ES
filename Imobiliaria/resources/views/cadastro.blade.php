@extends('adminlte::page')

@section('title', 'Cadastro novo Imovel')

@section('content_header')
<h1>Cadastrar novo Imovel</h1>
@stop

@section('content')
<p>Cadastro de Imoveis da Imobiliaria</p>
<div class="card">

    <div class="card-body">
        <form action="" class="action">
            @csrf
            <div class="form-group">

                Tipo do Imovel
                <div>
                    <input type="radio" id="casa" name="drone" value="1" checked>
                    <label for="1">Casa</label>

                    <input type="radio" id="apartamento" name="drone" value="2">
                    <label for="2">Apartamento</label>
                </div>

                <div>


                    <a href="cadastrocasa" class="btn btn-outline-dark" horizontal-align: middle;>Adicionar Imovel</a>
                </div>

        </form>
    </div>
</div>

@stop