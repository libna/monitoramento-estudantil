@extends('layouts.app')

@section('content')
<script language="JavaScript" type="text/javascript" src="formulario.blade.php"></script>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{$perguntas[0]->titulo}}</div>
              <div class="card-body">
                <div class="container">
                  <form action="{{ route('formsave') }}" method="POST" class="mb-4" name="form1">
                    @csrf
                      <input type="hidden" name="form_id" value="{{ $id }}">
                      @foreach($perguntas[0]->perguntas as $pergunta)
                        <div class="form-group">
                          <label for="exampleFormControlInput2">
                            {{$pergunta->titulo}}
                          </label>
                          @if($pergunta->titulo != 'CPF')
                            <input type="text" name="pergunta_{{ $pergunta->id }}" class="form-control" id="exampleFormControlInput2" placeholder="">
                           @else
                            <input type="text" name="pergunta_{{ $pergunta->id }}" class="form-control" id="exampleFormControlInput2" placeholder="" name="cpf" 
                            onKeyPress="MascaraCPF(form1.cpf);" maxlength="14" >    
                          @endif
                        </div>
                      @endforeach
                    <button type="submit" class="btn btn-primary">Enviar Formulário</button>
                    <a href="{{asset('home')}}" class="ml-3" role="button">Voltar</a>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div> 
    <script type="text/javascript">
      function MascaraCPF(cpf){
              if(mascaraInteiro(cpf)==false){
                      event.returnValue = false;
              }       
              return formataCampo(cpf, '000.000.000-00', event);
      }

      function formataCampo(campo, Mascara, evento) { 
        var boleanoMascara; 

        var Digitato = evento.keyCode;
        exp = /\-|\.|\/|\(|\)| /g
        campoSoNumeros = campo.value.toString().replace( exp, "" ); 

        var posicaoCampo = 0;    
        var NovoValorCampo="";
        var TamanhoMascara = campoSoNumeros.length;; 

        if (Digitato != 8) { // backspace 
                for(i=0; i<= TamanhoMascara; i++) { 
                        boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".")
                                                                || (Mascara.charAt(i) == "/")) 
                        boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") 
                                                                || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
                        if (boleanoMascara) { 
                                NovoValorCampo += Mascara.charAt(i); 
                                  TamanhoMascara++;
                        }else { 
                                NovoValorCampo += campoSoNumeros.charAt(posicaoCampo); 
                                posicaoCampo++; 
                          }              
                  }      
                campo.value = NovoValorCampo;
                  return true; 
        }else { 
                return true; 
        }
}


    </script> 
@endsection