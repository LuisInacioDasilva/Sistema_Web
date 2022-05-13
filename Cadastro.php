
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="materialize/css/materialize.min.css">
<title></title>
    </head>

    <body>

<nav class="blue">
    <div class="nav-wrapper container">
        <div class="brand-logo ligth">Cadastro de Contatos</div>
        <ul class="right">
            <li><a href="Cadastro.php"><i class="material-icons left">add_box</i>Cadatrar</a></li>
            <li><a href="Consulta.php"><i class="material-icons left">search</i>Consultar</a></li>
        </ul>
    </div>
</nav>
<!--Formulario para Cadastro-->
<div class="row container">
<p>&nbsp;</p>
<form action="Banco_de_Dados\create.php" method="post" class="col s12">
<fieldset class="formulario" style="padding: 15px">
    <legend><img src="imagens/avatar1.png" alt="imagem" width="100"></legend>
    <h5 class="light center">Cadastro de Contatos</h5>

    <div class="input-field col s12">
        <i class="material-icons prefix">contacts</i>
        <input type="text" name="nome" id="nome" maxlength="60" required autofocus>
        <label for="nome">Nome</label>
    </div>
    <!--Sobrenome-->
    <div class="input-field col s12">
        <i class="material-icons prefix">contacts</i>
        <input type="text" name="sobrenome" id="sobrenome" maxlength="60" required>
        <label for="Sobrenome">Sobrenome</label>
    </div>
     <!--Cpf-->
     <div class="input-field col s12">
        <i class="material-icons prefix">featured_play_list</i>
        <input type="text" name="cpf" id="cpf" maxlength="11" required>
        <label for="cpf">CPF</label>
    </div>
      <!--Email-->
      <div class="input-field col s12">
        <i class="material-icons prefix">contact_mail</i>
        <input type="email" name="email" id="email" maxlength="60" required>
        <label for="email">Email</label>
    </div>
    <!--Telefone-->
    <div class="input-field col s12">
        <i class="material-icons prefix">contact_phone</i>
        <input type="tel" name="telefone" id="telefone" maxlength="15" required>
        <label for="telefone">Telefone</label>
    </div>
        <!--Botão-->
        <div class="input-fild col s12">
            <input type="submit" value="cadastrar" class="btn blue">
            <input type="reset" value="limpar" class="btn red">
        </div>
</fieldset>
</form>

</div>


    <!--importação do jquery e js-->
    <script type="text/javascript" src="materialize/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

     <!--Inicialização do jquery-->
     <script type="text/javascript">
         $(document).ready(function(){

         });

     </script>
     
    </body>
  </html>
        