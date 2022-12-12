<html>
<head>
    
<title>Cadasto de produtos </title>
</head>
<body bgcolor="pink">
    <br>
    <br>
    <br>
    <?php

if ($_POST)

  {

  
    ?>
        <div align = "center"class="sucesso"> Cadastro enviado com sucesso! :)</div>
    <?php

    
    }


?>
    <br>
    <br>
<TABLE border= "6" bgcolor = "pink" width="45%" align="center">
<form method="post" action="3006085.php">
<TR><th align = "center">Formulário de cadastro de produtos :) </th></tr>
<tr><td><br>
Codigo:<input type="text" name="codigo">
Nome:<input type="text" name="nome" >
<br><br>
Categoria:<select name="categoria">
    <option value="">Selecione</option>
    <option value="UN">Unha</option>
    <option value="CB">Cabelo</option>
	<option value="CP">Cuidados com a pele</option>
    <option value="MQ">Maquiagem</option>
    <option value="OT">Outros</option>
    
    
</select>
<br>
<p align="center"><input type="submit" value="Incluir"></p>
<p align="center"><a href = "lista.php"> Listagem dos Produtos Cadastrados</a></p>
<p align="center"><a href = "exclui.php"> Exclusao de Produtos Cadastrados</a></p>
<p align="center"><a href = "altera.php"> Alteracao de Produtos Cadastrados</a></p>
<br>

<img src="cabelo.jpeg" >
<img src="images.jpeg" >

<p align = "center"> Nome: Rafaela Cristina Zuin da Rocha - Prontuário: CV3006085</p>
</td></tr>
</form>
</table>
<br>
<br>
<br>
<br>
<div id="central">
    <div class="errors-messages">
            </div>
<form action="index.php" method= "post" >
    <div class="form-inscricao">
 
<div align="center" id="first-step" class="block-container"><div id="field-reg_cpf" class="control-inline-group"><label class="form_label optional" for="reg_cpf">Digite aqui seu CPF</label>

<input type="text" value="" id="reg_cpf" name="reg_cpf">

<button type="button" id="cpf_ok" name="cpf_ok">OK</button></div>
<div align="center" id="field-reg_cod_assinante" class="control-inline-group"><label class="form_label optional" for="reg_cod_assinante">Digite aqui seu código do assinante</label>

<input type="text" value="" id="reg_cod_assinante" name="reg_cod_assinante">

<button type="button" id="cod_assinante_ok" name="cod_assinante_ok">OK</button></div></div>
<div align="center"id="second-step" class="block-container"><div id="field-reg_email" class="option-block"><label class="required" for="reg_email">Email</label>

<input type="text" value="" id="reg_email" name="reg_email"></div>
<div align="center" id="field-reg_confirm_email" class="option-block"><label class="required" for="reg_confirm_email">Confirmação de email</label>

<input type="text" value="" id="reg_confirm_email" name="reg_confirm_email"></div>
<div  align="center" id="field-birth_day" class="control-inline-group"><label class="form_label required" for="birth_day">Data de nascimento</label>

<select id="birth_day" name="birth_day">
    <option label="-" value="">-</option>
    <option label="01" value="1">01</option>
    <option label="02" value="2">02</option>
    <option label="03" value="3">03</option>
    <option label="04" value="4">04</option>
    <option label="05" value="5">05</option>
    <option label="06" value="6">06</option>
    <option label="07" value="7">07</option>
    <option label="08" value="8">08</option>
    <option label="09" value="9">09</option>
    <option label="10" value="10">10</option>
    <option label="11" value="11">11</option>
    <option label="12" value="12">12</option>
    <option label="13" value="13">13</option>
    <option label="14" value="14">14</option>
    <option label="15" value="15">15</option>
    <option label="16" value="16">16</option>
    <option label="17" value="17">17</option>
    <option label="18" value="18">18</option>
    <option label="19" value="19">19</option>
    <option label="20" value="20">20</option>
    <option label="21" value="21">21</option>
    <option label="22" value="22">22</option>
    <option label="23" value="23">23</option>
    <option label="24" value="24">24</option>
    <option label="25" value="25">25</option>
    <option label="26" value="26">26</option>
    <option label="27" value="27">27</option>
    <option label="28" value="28">28</option>
    <option label="29" value="29">29</option>
    <option label="30" value="30">30</option>
    <option label="31" value="31">31</option>
</select>

<select id="birth_month" name="birth_month">
    <option label="-" value="">-</option>
    <option label="01" value="1">01</option>
    <option label="02" value="2">02</option>
    <option label="03" value="3">03</option>
    <option label="04" value="4">04</option>
    <option label="05" value="5">05</option>
    <option label="06" value="6">06</option>
    <option label="07" value="7">07</option>
    <option label="08" value="8">08</option>
    <option label="09" value="9">09</option>
    <option label="10" value="10">10</option>
    <option label="11" value="11">11</option>
    <option label="12" value="12">12</option>
</select>

<select id="birth_year" name="birth_year">
    <option label="-" value="">-</option>
    <option label="1990" value="1990">2007</option>
    <option label="1990" value="1990">2006</option>
    <option label="1990" value="1990">2005</option>
    <option label="1990" value="1990">2004</option>
    <option label="1990" value="1990">2002</option>
    <option label="1990" value="1990">2001</option>
    <option label="1990" value="1990">2000</option>
    <option label="1995" value="1995">1995</option>
    <option label="1994" value="1994">1994</option>
    <option label="1993" value="1993">1993</option>
    <option label="1992" value="1992">1992</option>
    <option label="1991" value="1991">1991</option>
    <option label="1990" value="1990">1990</option>
    
    
</select></div>
<div align="center" id="field-reg_tel_prefix_celular" class="control-inline-group"><label class="form_label required" for="reg_tel_prefix_celular">Tel Celular</label>

<input type="text" value="" id="reg_tel_prefix_celular" name="reg_tel_prefix_celular">

<input type="text" value="" id="reg_tel_celular" name="reg_tel_celular"></div>
<div  align="center"id="field-reg_tel_prefix_residencial" class="control-inline-group"><label class="form_label optional" for="reg_tel_prefix_residencial">Tel Residencial</label>

<input type="text" value="" id="reg_tel_prefix_residencial" name="reg_tel_prefix_residencial">

<input type="text" value="" id="reg_tel_residencial" name="reg_tel_residencial"></div>
<div align="center" id="field-reg_tel_prefix_comercial" class="control-inline-group"><label class="form_label optional" for="reg_tel_prefix_comercial">Tel Comercial</label>

<input type="text" value="" id="reg_tel_prefix_comercial" name="reg_tel_prefix_comercial">

<input type="text" value="" id="reg_tel_comercial" name="reg_tel_comercial"></div>


<div align="center"  id="field-receive_promotion" class="option-block"><label class="optional" for="receive_promotion">Autorizo receber informações por email e SMS</label>

<input type="hidden" value="0" name="receive_promotion"><input type="checkbox" checked="checked" value="1" id="receive_promotion" name="receive_promotion"></div>
<div align="center" id="field-agree" class="option-block"><label class="required" for="agree">Li e concordo com o regulamento*</label>

<input type="hidden" value="" name="agree"><input type="checkbox" value="1" id="agree" name="agree"></div>

<input type="submit" value="ENVIAR CADASTRO" id="register" name="register"></div></fieldset></form>    </div>


</div>

</body>
</html>