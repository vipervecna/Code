<!-- Inicio da seção de formulário OPTATIVO de cadastro -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seu Registro</div>
                <div class="panel-body">

<div><br>
    Aqui nesta pagina seus dados podem ser atualizados!!!
  <br>
    Os demais campos podem não ser obrigatórios,
    mas ajudarão em uma maior segurança e eficiência
    na entrega das suas menssagens.
</div><br>

<br>
<fieldset>
<legend><b>Dados Pessoais</b></legend>
<table width="600px">
<tr>
<td rowspan="1"></td>
<td></td>
</tr>

<tr>
<td>Nascimento:</td>
<td>
{!!Form::text('dia', null, ['type'=>'int', 'size'=>'2', 'maxlength'=>'2', 'placeholder'=>'DD'])!!}
{!!Form::text('mes', null, ['type'=>'int', 'size'=>'2', 'maxlength'=>'2', 'placeholder'=>'MM'])!!}
{!!Form::text('ano', null, ['type'=>'int', 'size'=>'4', 'maxlength'=>'4', 'placeholder'=>'AAAA'])!!}
</td>
</tr>

<tr>
<td>Sexo:</td>
<td>
{!!Form::radio('sexo', 'M')!!} Masculino
{!!Form::radio('sexo', 'F')!!} Feminino
{!!Form::radio('sexo', 'Nd', true)!!} N/declarado
</td>
</tr>


<tr>
<td>CPF:</td>
<td>{!!Form::text('cpf', null, ['type'=>'int', 'size'=>'9', 'maxlength' => '9'])!!}
- {!!Form::text('cpf2', null, ['type'=>'int', 'size'=>'2', 'maxlength' => '2'])!!}</td>
</tr>

<tr>
<td>RG:</td>
<td>{!!Form::text('rg', null, ['type'=>'int', 'size'=>'13', 'maxlength' => '13'])!!}</td>
</tr>



<tr>
<td>Estado Civil:</td>
<td>
  {!!Form::select('estadocivil', array(
      'NaoDeclarado' => 'Não Declarado',
      'Solteiro' => 'Solteiro(a)',
      'Casado' => 'Casado(a)',
      'Separado' => 'Separado(a)',
      'Viúvo' => 'Viúvo(a)',
      'Outro' => 'Outro',
     ))
    !!}
</td>
</tr>


<tr>
<td>Escolaridade:</td>
<td>
  {!!Form::select('escolaridade', array(
    'NaoDeclarado' => 'Não Declarado',
    'Ensino Médio Incompleto' => 'Ensino Médio Incompleto',
    'Ensino Fundamental Completo' => 'Ensino Fundamental Completo',
    'Ensino Médio Incompleto' => 'Ensino Médio Incompleto',
    'Ensino Médio Completo' => 'Ensino Médio Completo',
    'Ensino Superior Incompleto' => 'Ensino Superior Incompleto',
    'Ensino Superior Completo' => 'Ensino Superior Completo',
    'Não Possui Ensino Fundamental' => 'Não Possui Ensino Fundamental',
  ))
 !!}
</td>
</tr>

<tr>
<td>Ocupação:</td>
<td>{!!Form::text('ocupacao',null, ['size'=>'15', 'maxlenght'=>'30'])!!}</td>
</tr>




</table>
</fieldset>


<br>
<fieldset>
<legend><b>Contato</b></legend>
<table width="500px">
<tr>
<td rowspan="5"></td>
<td></td>
</tr>

<tr>
<td>Email Alternativo: </td>
<td>{!!Form::text('email2',null)!!}</td>
</tr>

<tr>
<td>Telefone:</td>
<td>{!!Form::text('telefoneddd', null, ['type'=>'int', 'size'=>'3', 'maxlength' => '3', 'placeholder'=>'DDD'])!!}
- {!!Form::text('telefone', null, ['type'=>'int', 'size'=>'10', 'maxlength' => '10'])!!}</td>
</tr>

<tr>
<td>Celular:</td>
<td>{!!Form::text('celularddd', null, ['type'=>'int', 'size'=>'3', 'maxlength' => '3', 'placeholder'=>'DDD'])!!}
- {!!Form::text('celular', null, ['type'=>'int', 'size'=>'10', 'maxlength' => '10'])!!}</td>
</tr>

</table>
</fieldset>

<br>
<fieldset>
<legend><b>Endereço</b></legend>
<table width="600px">
  <tr>
    <td rowspan="6"></td>
    <td></td>
  </tr>

  <tr>
    <td>Rua:</td>

    <td>{!!Form::text('rua',null, ['size'=>'20'])!!}</td>
  </tr>

  <tr>
    <td>Número:</td>
    <td>{!!Form::text('numero_endereco',null, ['type'=>'int', 'size'=>'20'])!!}</td>

    <td>Cep:</td>
    <td>{!!Form::text('cep', null, ['type'=>'int', 'size'=>'5', 'maxlength' => '5'])!!}
       - {!!Form::text('cep2', null, ['type'=>'int', 'size'=>'3', 'maxlength' => '3'])!!}</td>
  </tr> <!--  <input type="int" name="cep2" size="3" maxlength="3"> -->

  <tr>
    <td>Bairro:</td>
    <td>{!!Form::text('bairro', null, ['size'=>'20', 'maxlength' => '30'])!!}</td>

    <td>Cidade:</td>
    <td>{!!Form::text('cidade', null, ['size'=>'20', 'maxlength' => '30'])!!}</td>
  </tr>

  <tr>
    <td>Estado:</td>
    <td>
        {!!Form::select('estado', array(
          'NaoDeclarado' =>  '  ',
          'AC' => 'AC',
          'AL' => 'AL',
          'AM' => 'AM',
          'AP' => 'AP',
          'BA' => 'BA',
          'CE' => 'CE',
          'DF' => 'DF',
          'ES' => 'ES',
          'GO' => 'GO',
          'MA' => 'MA',
          'MT' => 'MT',
          'MS' => 'MS',
          'MG' => 'MG',
          'PA' => 'PA',
          'PB' => 'PB',
          'PR' => 'PR',
          'PE' => 'PE',
          'PI' => 'PI',
          'RJ' => 'RJ',
          'RN' => 'RN',
          'RO' => 'RO',
          'RS' => 'RS',
          'RR' => 'RR',
          'SC' => 'SC',
          'SE' => 'SE',
          'SP' => 'SP',
          'TO' => 'TO',
        ))
       !!}
      </td>

<br>
<td>Complemento:</td>
  <td>{!!Form::text('complemento_endereco', null, ['size'=>'20', 'maxlength' => '30'])!!}</td>
  </tr>
  </table>
</fieldset>

<br>

<div><input type="reset" value="Limpar Dados"/></div>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}


</div>
</div>
</div>
</div>
</div>
<!-- Final da seção de formulário OPTATIVO de cadastro -->
