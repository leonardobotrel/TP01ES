@extends('adminlte::page')

@section('title', 'Formulario para cadastro de Imovel')

@section('content_header')
<h1>Cadastro de nova Casa</h1>
@stop

@section('content')
<p>Formulario para cadastro de Casa</p>

<div class="card">
    <div class="card-body">
        <form action="" class="">
            @csrf
            <div class="form-group">
                <label>Quantidade de Quartos:
                    <select name="qtdquarto">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="many">Mais que 6</option>
                    </select></label>
            </div>
            <div class="form-group">
                <label>Quantidade de Suites: </label>
                <input type="text" name="qtdsuites" class="form-control" placeholder="Quantidade de Suites:">
            </div>
            <div class="form-group">
                <label>Quantidade de Sala de Estar: </label>
                <input type="text" name="qtdsalasestar" class="form-control" placeholder="Quantidade de Sala de Estar:">
            </div>
            <div class="form-group">
                <label>Quantidade de vagas na Garagem: </label>
                <input type="text" name="qtdvagasgaragem" class="form-control" placeholder="Nome:">
            </div>
            <div class="form-group">
                <label>Nome: </label>
                <input type="text" name="name" class="form-control" placeholder="Nome:">
            </div>
            <div class="form-group">
                <label>Nome: </label>
                <input type="text" name="name" class="form-control" placeholder="Nome:">
            </div>

        </form>

    </div>

</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop