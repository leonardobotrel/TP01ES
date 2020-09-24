@extends('adminlte::page')

@section('title', 'Cadastro')

@section('content_header')
<h1>Cadastrar imóvel</h1>
@stop

@section('content')
<di>
    <div class="row">
      <div class="col-sm-12">
          <card>
            <div class="row">
                <div class="col-sm-3">
                    <h4 slot="header" class="card-title">Selecione o tipo de imóvel:</h4>
                </div>
                <div class="col-sm-9">
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Casa
                        </label>
                    </div>
                    <div class="form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optradio">Apartamento
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <form action="/action_page.php" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="uname">Número de quartos</label>
                        <input type="number" class="form-control" id="quartos" placeholder="Entre com o n° de quartos" name="nquartos" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Número de suítes</label>
                        <input type="number" class="form-control" id="suites" placeholder="Entre com o n° de suites" name="nsuites" required>
                        <div class="valid-feedback">Válido</div>
                        <div class="invalid-feedback">Por favor preencha este campo</div>
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Check this checkbox to continue.</div>
                        </label>
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