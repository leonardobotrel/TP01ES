@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')
<h1>Cadastrar imóvel </h1>
@stop

@section('content')


<div>
    <div class="row">
      <div class="col-sm-12">
          <card>
            <div class="row">
                <div class="col-sm-3">
                    <h4 slot="header" class="card-title">Selecione o tipo de imóvel:</h4>
                </div>
                <div class="col-sm-1">
                    <button type="button" class="btn btn-primary" onclick="mostrarCasa()">Casa</button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-primary" onclick="mostrarApartamento()">Apartamento</button>
                </div>
            </div>
            <div class="row">
                <form method="post" action="/cadastrar" class="needs-validation" novalidate>
                    {{csrf_field()}}
                    <div class="form-group form-check" style="display: none;">
                        <div>
                            <label for="armario">casa/apartamento</label>
                        </div>
                        <div class=" form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="casaapto1" name="ncasaapto" value=1 required/>
                            <label class="form-check-label">casa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="casaapto2" name="ncasaapto" value=2 checked="checked" require/>
                            <label class="form-check-label">apto</label>
                            <div class="valid-feedback" style="margin-left: 1.25em">Válido</div>
                            <div class="invalid-feedback" style="margin-left: 1.25em">Por favor preencha este campo</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quartos">Número de quartos</label>
                        <input type="number" min="0" class="form-control" id="quartos" placeholder="Entre com o n° de quartos" name="nquartos" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="suites">Número de suítes</label>
                        <input type="number" min="0" class="form-control" id="suites" placeholder="Entre com o n° de suites" name="nsuites" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="sala_estar">Número de salas de estar</label>
                        <input type="number" min="0" class="form-control" id="sala_estar" placeholder="Entre com o n° de salas de estar" name="nsala_estar" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="vagas_garagem">Número de vagas na garagem</label>
                        <input type="number" min="0" class="form-control" id="vagas_garagem" placeholder="Entre com o n° de vagas na garagem" name="nvagas_garagem" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="area">Área em metros quadrados</label>
                        <input type="number" min="0" class="form-control" id="area" placeholder="Entre com a área" name="narea" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group form-check">
                        <div>
                            <label for="armario">Possui armario embutido</label>
                        </div>
                        <div class=" form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="varmario" value=1 required>
                            <label class="form-check-label">Sim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="varmario" value=0 require>
                            <label class="form-check-label">Não</label>
                            <div class="valid-feedback" style="margin-left: 1.25em">Válido</div>
                            <div class="invalid-feedback" style="margin-left: 1.25em">Por favor preencha este campo</div>
                        </div>
                    </div>
                    <div id="apartamento">
                        <div class="form-group">
                            <label for="sala_jantar">Número de salas de jantar</label>
                            <input type="number" min="0" class="form-control" id="sala_jantar" placeholder="Entre com o n° de salas de jantar" name="nsala_jantar" required>
                            <div class="valid-feedback">Válido</div>
                            <div class="invalid-feedback">Por favor preencha este campo</div>
                        </div>
                        <div class="form-group">
                            <label for="andar">Número do andar</label>
                            <input type="number" min="0" class="form-control" id="andar" placeholder="Entre com o andar" name="nandar" required>
                            <div class="valid-feedback">Válido</div>
                            <div class="invalid-feedback">Por favor preencha este campo</div>
                        </div>
                        <div class="form-group">
                            <label for="valor_condominio">Valor do condominio</label>
                            <input type="number" min="0.00" step="0.01" class="form-control" id="valor_condominio" placeholder="Entre com o valor do condominio" name="nvalor_condominio" required>
                            <div class="valid-feedback">Válido</div>
                            <div class="invalid-feedback">Por favor preencha este campo</div>
                        </div>
                        <div class="form-group form-check">
                            <div>
                                <label for="armario">Portaria 24 horas</label>
                            </div>
                            <div class=" form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="portaria" name="pportaria" value=1 required>
                                <label class="form-check-label">Sim</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="portaria" name="pportaria" value=0 require>
                                <label class="form-check-label">Não</label>
                                <div class="valid-feedback" style="margin-left: 1.25em">Válido</div>
                                <div class="invalid-feedback" style="margin-left: 1.25em">Por favor preencha este campo</div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="valor_aluguel">Valor do aluguel</label>
                        <input type="number" min="0.00" step="0.01" class="form-control" id="valor_aluguel" placeholder="Entre com o valor do aluguel" name="nvalor_aluguel" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="comment">Descrição adcional (opcional)</label>
                        <textarea class="form-control" rows="5" id="comment" name="ndescricao"></textarea>
                    </div>
                    <div>
                        <h2>Endereço</h2>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="rua">Rua</label>
                                <input type="text" class="form-control" id="rua" placeholder="Entre com o nome da rua" name="nrua" required>
                                <div class="valid-feedback">Válido</div>
                                <div class="invalid-feedback">Por favor preencha este campo</div>
                            </div>
                            <div class="col-sm-6">
                                <label for="numero">Número</label>
                                <input type="number" min="0" class="form-control" id="numero" placeholder="Entre com o número" name="nnumero" required>
                                <div class="valid-feedback">Válido</div>
                                <div class="invalid-feedback">Por favor preencha este campo</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                          <div>
                             <label for="bairro">Bairro</label>
                                </div>
                                <input   onchange="CheckOutro(this);"  type="text" class="form-control" list="bairros" required name="nbairros"placeholder="Entre com o bairro" id="inputBairros">   
                                <datalist id="bairros">
                                    <option>Outros</option>
                                    @foreach ($Bairro as $Bairro)
                                       <option value="{{$Bairro->Nome}}"></option>
                                    @endforeach                            
                                </datalist>
				                    <div id="ifYes" style="display: none;">
                                             <label for="Bairro">Digite o Bairro</label> 
                                             <input  type="text" class="form-control"required name="nbairros"placeholder="Entre com o bairro" id="inputBairros" ><br />
                                    </div>
                                <div class="valid-feedback">Válido</div>
                                <div class="invalid-feedback">Por favor preencha este campo</div>
                            </div>

                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control"     id="cidade" placeholder="Entre com a cidade" name="ncidade" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="cep">CEP (somente números)</label>
                        <input type="number" min="0" class="form-control" id="cep" placeholder="Entre com o cep" name="ncep" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <input  type="text" class="form-control" list="estado" required name="nestado"placeholder="Entre com o Estado" >
                        <datalist id="estado">
                        <option value="Acre">Acre - AC</option>
                        <option value="Alagoas">  Alagoas - AL</option>
                        <option value=" Amapá - AP">   Amapá - AP</option>
                       <option value="Amazonas - AM">   Amazonas - AM</option>
                       <option value=" Bahia - BA">  Bahia - BA</option>
                       <option value="Ceará - CE<">  Ceará - CE</option>
                       <option value="Espírito Santo - ES">   Espírito Santo - ES</option>
                        <option value="Goiás - GO">   Goiás - GO</option>
                        <option value="Maranhão - MA">  Maranhão - MA</option>
                      <option value="Mato Grosso - MT">  Mato Grosso - MT</option>
                         <option value="Mato Grosso do Sul - MS"> Mato Grosso do Sul - MS</option>
                      <option value="Minas Gerais - MG"> Minas Gerais - MG</option>
                        <option value="Pará - PA"> Pará - PA</option>
                     <option value="Paraíba - PB"> Paraíba - PB</option>
                      <option value="Paraná - PR"> Paraná - PR</option>
                    <option value="Pernambuco - PE"> Pernambuco - PE</option>
                   <option value="Piauí - PI"> Piauí - PI</option>
                   <option value="Rio de Janeiro - RJ"> Rio de Janeiro - RJ</option>
                     <option value="Rio Grande do Norte - RN"> Rio Grande do Norte - RN</option>
                     <option value="Rio Grande do Sul - RS"> Rio Grande do Sul - RS</option>
                      <option value=" Rondônia - RO"> Rondônia - RO</option>
                     <option value=" Roraima - RR"> Roraima - RR</option>
                      <option value="Santa Catarina - SC"> Santa Catarina - SC</option>
                    <option value=" São Paulo - SP"> São Paulo - SP</option>
                    <option value=" Sergipe - SE"> Sergipe - SE</option>
                    <option value=" Tocantins - TO"> Tocantins - TO</option>
                    <option value="Distrito Federal - DF"> Distrito Federal - DF</option>
                        </datalist>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                       
                    
                    <div class="form-group">
                        <label for="pais">País</label>
                        <input type="text" class="form-control" id="pais" placeholder="Entre com o país" name="npais" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>

                <script>
                 // Disable form submissions if there are invalid fields
                 (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                            // Get the forms we want to add validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                                form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                    function mostrarCasa() {
                        var exibir = document.getElementById("apartamento");
                        exibir.style.display = "none";
                        document.getElementById("sala_jantar").required = false;
                        document.getElementById("andar").required = false;
                        document.getElementById("valor_condominio").required = false;
                        document.getElementById("portaria").required = false;
                        document.getElementById("casaapto1").checked="checked"
                    }
                    function mostrarApartamento() {
                        var exibir = document.getElementById("apartamento");
                        exibir.style.display = "block";
                        document.getElementById("sala_jantar").required = true;
                        document.getElementById("andar").required = true;
                        document.getElementById("valor_condominio").required = true;
                        document.getElementById("portaria").required = true;
                        document.getElementById("casaapto2").checked="checked"
                    }
                    function CheckOutro(that) {
                        if (that.value == "Outro") {
                              alert("Aviso : Voce Selecionou a opcao Outro, Pois o seu Bairro nao consta na nossa lista de Bairros. Por favor insira o nome do bairro do imovel na caixa logo abaixo.");
                                document.getElementById("ifYes").style.display = "block";
                        } else {
                            document.getElementById("ifYes").style.display = "none";
                        }}

                </script>
            </div>
          </card>
      </div>
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