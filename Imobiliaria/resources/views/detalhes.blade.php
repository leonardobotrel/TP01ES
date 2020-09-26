@extends('adminlte::page')

@section('title', 'Detalhes do Imovel {{$imovel->id}}')

@section('content_header')
<h1>Detalhes do Imovel {{$imovel->id}}</h1>
@stop

@section('content')


<div class="card">
    <div class="card-body">
        <ul>
            <li>
                <strong>Bairro:</strong> {{ $imovel->Bairro}}
            </li>

            <li>
                <strong>Area:</strong> {{ $imovel->area}}
            </li>

            <li>
                <strong>CEP:</strong> {{$imovel->CEP}}
            </li>

            <li>
                <strong>Tipo:</strong> {{$imovel->tipo}}
            </li>
        </ul>
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