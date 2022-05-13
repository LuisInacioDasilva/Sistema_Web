<?php
session_start();
include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT); 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

$querySelect = $link->query("select  email from usuarios");
$array_emails = [];
while($emails = $querySelect->fetch_assoc()):
    $todos_emails = $emails['email'];
    array_push($array_emails,$todos_emails);
endwhile;
if(in_array($email,$array_emails)):
    $_SESSION['msg'] = "<p class='center red-text'>".'Já existe um usuario com este Email'."</p>";
    header('Location..');
else:
    $queryInsert = $link->query("insert into usuarios(nome,sobrenome,cpf,email,telefone) 
    values ('$nome','$sobrenome','$cpf','$email','$telefone')");
    $linha_afetada = mysqli_affected_rows($link);
    if($linha_afetada > 0):     
    $_SESSION['msg'] = "<p class='center green-text'>".'Cadastro feito com sucesso!'."</p>";
    header('Location:../');
endif;
endif;


?> 