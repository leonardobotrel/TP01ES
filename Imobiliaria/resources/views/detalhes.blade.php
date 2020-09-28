@extends('adminlte::page')

@section('title', 'Detalhes do Imovel {{$imovel->id}}')

@section('content_header')
<h1>Detalhes do Imovel {{$imovel->id}}</h1>
@stop

@section('content')


<div class="card">
    <div class="card-body">

         

            <li>
                <strong>Area:</strong> {{ $imovel->area}} m²
            </li>

              <li>
                <strong>Quantidade  de Salas de Estar:</strong> {{ $imovel->qtdsalasestar}}
            </li>

            <li>
                <strong>Quantidade de Vagas na Garagem:</strong> {{ $imovel->qtdvagasgaragem}}
            </li>

            <li>
                <strong>Quantidade Armarios Embutidos :</strong> {{$imovel->armariosembutidos}}
            </li> 
            <li>
                <strong>Descricao:</strong> {{ $imovel->descricao}}
            </li>

            <li>
                <strong>Quantidade de Salas de Jantar:</strong> {{ $imovel->qtdsalasjantar}}
            </li>

            <li>
                <strong>Quantidade de Suites:</strong> {{$imovel->qtdsuites}}
            </li> 
            <li>
                <strong>Quantidade de Andares no Imovel:</strong> {{ $imovel->andar}}
            </li>

            <li>
                <strong>Valor do Condominio (Se aplicavel): R$</strong> {{ $imovel->valorcondominio}}
            </li>

            <li>
                <strong>Possui Portaria ? 0-Nao 1-Sim:</strong> {{$imovel->portaria24h}}
            </li> 

            <li>
                <strong>Valor do Aluguel do Imovel:</strong> {{$imovel->preco}}
            </li> 
            <li>
                <strong>Rua:</strong> {{$imovel->rua}}   
            </li> 
              <li><strong>Numero : </strong>{{$imovel->Numero}} </li>  
            
                <li>
                  <strong> Complemento : {{$imovel->Complemento}} </strong>  
                </li>
                <li>
                    <strong>Bairro:  {{ $imovel->Bairro}}</strong>
                </li>
                <li><strong> Cidade: {{ $imovel->Cidade}} </strong></li>
               
                <li><strong>Estado : {{ $imovel->Estados}}</strong></li>
                <li><strong>Pais : {{$imovel->Pais}}</strong></li>
            
         
            
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