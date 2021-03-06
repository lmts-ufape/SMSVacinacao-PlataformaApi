@extends('layouts.app')


@push('scripts')
<script>
    $(document).ready(function($) {

        $("#form").submit(function() {
            $(".mask").unmask();
        });

        $("#cep").focusout(function() {
            var cep = $("#cep").cleanVal();
            $.ajax({
                url: 'https://viacep.com.br/ws/' + cep + '/json/unicode/',
                dataType: 'json',
                success: function(resposta) {
                    $("#rua").val(resposta.logradouro);
                    $("#complemento").val(resposta.complemento);
                    $("#bairro").val(resposta.bairro);
                    $("#cidade").val(resposta.localidade);
                    $("#uf").val(resposta.uf);

                    $("#num").focus();
                }
            });
        });
    });
</script>
@endpush

@section('content')

<div>
    <h1 class="d-flex justify-content-center h2 pt-4">Cadastrar Novo Paciente</h1>
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <form id="form" method="POST" action="{{action('PacienteController@create')}}">
            @method('post')
            @csrf
            <div class="form-group">
                <div class="form-row">
                    <label for="cns">CNS *</label>
                    <input data-mask="000 0000 0000 0000" data-mask-reverse="false" type="text" class="form-control mask @error('cns') is-invalid @enderror" id="cns" placeholder="___ ____ ____ ____" name="cns" value="{{ old('cns') }}" required autocomplete="cns" autofocus>
                    @error('cns')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <label for="nome">Nome *</label>
                    <input type="text" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+" title="Nome do paciente deve conter apenas letra em sua descrição" class="form-control" id="nome" placeholder="Nome" name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="cep">CEP *</label>
                        <input data-mask="00000-000" data-mask-reverse="false" type="text" class="form-control mask" id="cep" placeholder="_____-___" name="cep" value="{{ old('cep') }}" required autocomplete="cep" autofocus>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="bairro">Bairro *</label>
                        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" value="{{ old('bairro') }}" required autocomplete="bairro" autofocus>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade *</label>
                        <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade" autofocus>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="uf">UF *</label>
                        <select id="uf" class="form-control" name="uf">
                            <option @if(old('uf')=='PE' ) selected @endif value="PE">PE</option>
                            <option @if(old('uf')=='AC' ) selected @endif value="AC">AC</option>
                            <option @if(old('uf')=='AL' ) selected @endif value="AL">AL</option>
                            <option @if(old('uf')=='AP' ) selected @endif value="AP">AP</option>
                            <option @if(old('uf')=='AM' ) selected @endif value="AM">AM</option>
                            <option @if(old('uf')=='BA' ) selected @endif value="BA">BA</option>
                            <option @if(old('uf')=='CE' ) selected @endif value="CE">CE</option>
                            <option @if(old('uf')=='DF' ) selected @endif value="DF">DF</option>
                            <option @if(old('uf')=='ES' ) selected @endif value="ES">ES</option>
                            <option @if(old('uf')=='GO' ) selected @endif value="GO">GO</option>
                            <option @if(old('uf')=='MA' ) selected @endif value="MA">MA</option>
                            <option @if(old('uf')=='MT' ) selected @endif value="MT">MT</option>
                            <option @if(old('uf')=='MS' ) selected @endif value="MS">MS</option>
                            <option @if(old('uf')=='MG' ) selected @endif value="MG">MG</option>
                            <option @if(old('uf')=='PA' ) selected @endif value="PA">PA</option>
                            <option @if(old('uf')=='PB' ) selected @endif value="PB">PB</option>
                            <option @if(old('uf')=='PR' ) selected @endif value="PR">PR</option>
                            <option @if(old('uf')=='PE' ) selected @endif value="PE">PE</option>
                            <option @if(old('uf')=='PI' ) selected @endif value="PI">PI</option>
                            <option @if(old('uf')=='RJ' ) selected @endif value="RJ">RJ</option>
                            <option @if(old('uf')=='RN' ) selected @endif value="RN">RN</option>
                            <option @if(old('uf')=='RS' ) selected @endif value="RS">RS</option>
                            <option @if(old('uf')=='RO' ) selected @endif value="RO">RO</option>
                            <option @if(old('uf')=='RR' ) selected @endif value="RR">RR</option>
                            <option @if(old('uf')=='SC' ) selected @endif value="SC">SC</option>
                            <option @if(old('uf')=='SP' ) selected @endif value="SP">SP</option>
                            <option @if(old('uf')=='SE' ) selected @endif value="SE">SE</option>
                            <option @if(old('uf')=='TO' ) selected @endif value="TO">TO</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="rua">Rua *</label>
                        <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua" value="{{ old('rua') }}" required autocomplete="rua" autofocus>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="num">Número *</label>
                        <input type="number" class="form-control" id="num" placeholder="Numero" name="num" min="0" value="{{ old('num') }}" required autocomplete="num" autofocus>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="complemento">Complemento</label>
                        <input type="text" class="form-control" id="complemento" placeholder="Complemento" name="complemento" value="{{ old('complemento') }}" autocomplete="complemento" autofocus>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="nasc">Data de Nascimento *</label>
                        <input type="date" class="form-control" id="nasc" placeholder="Data de Nascimento" name="nasc" value="{{ old('nasc') }}" required autocomplete="nasc" autofocus>
                    </div>
                    <div class=" form-group col-md-4">
                        <label for="tel">Telefone *</label>
                        <input data-mask="00 00000-0000" data-mask-reverse="true" type="text" class="form-control mask" id="tel" placeholder="(__)_____-____" name="tel" value="{{ old('tel') }}" required autocomplete="tel" autofocus>
                    </div>
                </div>
                <div class=" form-row">
                    <div class="form-group col-md-2">
                        <label for="lat">Latitude *</label>
                        <input type="number" class="form-control" id="lat" placeholder="Latitude" name="lat" value="{{ old('lat') }}" required autocomplete="lat" autofocus>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="lng">Longitude *</label>
                        <input type="number" class="form-control" id="lng" placeholder="Longitude" name="lng" value="{{ old('lng') }}" required autocomplete="lng" autofocus>
                    </div>
                </div>
            </div>
            <a href="{{action('PacienteController@list')}}" class="btn btn-dark">Cancelar</a>
            <button id="submit" type="submit" class="btn btn-success">Cadastrar</button>
        </form>
    </div>
</div>
@stack('scripts')
@stop