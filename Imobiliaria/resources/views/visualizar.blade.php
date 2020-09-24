@extends('adminlte::page')

@section('title', 'Visualizacao de Imoveis')

@section('content_header')
<h1>Visualizacao de Imoveis da Sysmob</h1>
@stop

@section('content')
<p>Listagem de todos os Imoveis disponiveis.</p>
<div class="card">
    <div class="card-header">
        Utilizaremos os filtros aqui , como o filtro de Bairro, ou talvez de precos
    </div>

    <div class="card-body">
        @foreach($imoveis as $imovel)
        <table class='table-condense'>

        </table>
        @endforeach
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