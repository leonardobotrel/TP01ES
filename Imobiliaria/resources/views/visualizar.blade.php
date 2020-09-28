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
            <input type="text" style="width=10px" name="filter" class="form-control" placeholder="Pesquise por Bairro ou descricao">
            <button type="submit" class="btn btn-dark"><i class="fas fa-filter"></i></button>
        </form>
    </div>
    <div class="card-body">
        <table class="table table-condensed">
            <tbody>
                @foreach ($imoveis as $imovel)
                <tr>
                    <div>
                         <ul>
                                <th>
                                    <li>
                                        Bairro: {{ $imovel->Bairro}}
                                    </li>
                        
                                    <li>
                                        Area: {{ $imovel->area}} m²
                                    </li>
                        
                                    <li>
                                        Quantidade de Quartos: {{$imovel->qtdquartos}}
                                    </li>
                        
                                    <li>
                                        Descricao: {{$imovel->descricao}}
                                    </li>
                                </th>
                             
                            </ul>
                        </div>
                       
                        <div width="10px">
                            <td style="width=50px;">
                              
                                <a href="{{route('imovel.detalhe',$imovel->id)}} " class="btn btn-outline-success" role="button" aria-pressed="true"> <i class="fas fa-plus"></i>  Informacoes</a>

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