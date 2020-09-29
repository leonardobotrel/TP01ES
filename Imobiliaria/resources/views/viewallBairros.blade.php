@extends('adminlte::page')

@section('title', 'Visualizacao de Imoveis')

@section('content_header')
<h1>Visualizacao de Bairros{{$Bairro}}</h1>
@stop

@section('content')

<div class="card">

    <div class="card-body">
        <table class="table table-condensed">
            <tbody>
                @foreach ($Bairro as $Bairro)
                <tr>
                    <div>
                         <ul>
                                <th>
                                    <li>
                                        Bairro: {{ $Bairro->Nome}}
                                    </li>
                        
                             
                                </th>
                             
                            </ul>
                        </div>
                   

                    </div>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
@stop