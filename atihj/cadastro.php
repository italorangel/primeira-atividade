<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-css.css">

    <title>cadastro</title>

</head>
<body>

    <div class="centro">

        <div class="c11">

        Cadastro
        </div>

      <form action="mostrausuario.php" method="post">

      <div class="c1">

<label for="nome"> Nome completo:</label> <br>

<input type="text" id="nome" name="nome" required placeholder=" " class="width">

</div>

<div class="c2">

<div class="rg">

<label for="rg"> RG:</label><br>
<input type="tel" id="rg" placeholder="" required name="rg" class="aa">

</div>

<div class="orgao">

<label for="orgao"> Sexo:</label><br>
<select name="estados" id="estado" name="estado" class="ab" >
<option value="Aff"> Masculino</option>
<option value="afaf"> Feminino</option>
<option value="ggg"> Outro</option>
</select>

</div>

<div class="cpf">

<label for="cpf"> CPF:</label><br>
<input type="tel" id="cpf" placeholder="" required name="cpf" class="ac">

</div>

</div>
<div class="c3">

<div class="telefone">

<label for="telefone"> Telefone de contato:</label><br>
<input type="tel" id="telefone" placeholder=""required name="telefone" class="ad">
 
</div>

<div class="email">

<label for="email"> Email:</label><br>
<input type="email" id="email" name="email" required placeholder="" class="ae">

</div>

</div>

<div class="c4">

<div class="curso">

<label for="curso"> Curso:</label><br>
<select name="curso" id="curso" name="curso" class="af" >
<option value="Acre (AC)"> Informatica</option>
<option value="Alagoas (AL)"> Agroindustria</option>
<option value="Amapá (AP)"> Agropecuaria</option>
</select>

</div>

<div class="matricula">

<label for="matricula"> Numero da Matricula:</label><br>
<input type="tel" id="matricula" placeholder="" required name="matricula" class="ag">

</div>


</div>
<div class="c5">

<div class="endereco">

   <label for="endereco"> Endereço:</label> <br>

   <input type="text" id="endereco" name="endereco" required placeholder="  " class="ah">


</div>

<div class="complemento">

<label for="com"> Complemento:</label> <br>

<input type="text" id="complemento" name="complemento" required placeholder=" " class="ai" >

</div>



</div>
<div class="c6">

<div class="bairro">

   <label for="endereco"> Bairro:</label> <br>

    <input type="text" id="bairro" name="bairro" required placeholder=" " class="aj" >

</div>

<div class="municipio">

   <label for="municipio">municipio:</label> <br>

   <input type="text" id="municipio" name="municipio" required placeholder=" " class="ak" >

</div>

<div class="cep">

   <label for="cep">cep:</label> <br>

   <input type="text" id="cep" name="cep" required placeholder="" class="al">

</div>

</div>

<div class="c7">

<div class="envio">

<input class= botoes type="submit" value="Cadastrar">

</div>

</div>
      
   

    </div>

</form>

</body>
</html>