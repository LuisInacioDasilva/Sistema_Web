<?php
session_start();
include_once 'conexao.php';
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_SPECIAL_CHARS);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT); 
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);

 $queryUpdate = $link->query("update usuarios set nome='$nome', sobrenome='$sobrenome', cpf='$cpf', email='$email', telefone='$telefone'");
 $affected_rows = 1;
 if($affected_rows > 0):
    header("Location:..");
 endif;
?>