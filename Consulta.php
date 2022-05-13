<?php session_start() ?>
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
<div class="row container">
    <div class="col s12">
        <h5 class="ligth">Consultas</h5><hr>
        <table class="striped">
            <thead>
               <tr>
                   <th>Nome</th>
                   <th>Sobrenome</th>
                   <th>CPF</th>
                   <th>Email</th>
                   <th>Telefone</th>
               </tr>
            </thead>
            <tbody>
                <?php
                include_once 'Banco_de_Dados/read.php'; 
                ?>
            </tbody>
        </table>
    </div>
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
        