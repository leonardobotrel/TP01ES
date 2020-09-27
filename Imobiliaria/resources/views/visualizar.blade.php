@extends('adminlte::page')

@section('title', 'Visualizacao de Imoveis')

@section('content_header')
<h1>Visualizacao de Imoveis da Sysmob </h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <form action="{{route('imovel.search')}}" metohd="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" class="form-control" placeholder="Bairro">
            <button type="submit" class="btn btn-dark">Filtrar</button>



        </form>
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <tbody>
                @foreach ($imoveis as $imovel)
                <tr>
                    <div>
                        <div>
                            <th> Area:</th>
                            <td> {{$imovel->area}}</td>
                        </div>
                        <div>
                            <th> Quantidade de Quartos :</th>
                            <td> {{$imovel->qtdquartos}}</td>
                        </div>
                        <div>
                            <th> Bairro :</th>
                            <td> {{$imovel->Bairro}}</td>
                        </div>
                        <div>
                            <td> {{$imovel->preco}}</td>
                        </div>
                        <div width="10px">
                            <td style="width=50px;">
                                <a href="{{route('imovel.detalhe',$imovel->id)}} class=" btn btn-warning"> + Informacoes</a>
                            </td>
                        </div>

                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="card">
        {!! $imoveis->links()!!}
    </div>
</div>
@stop