<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from usuarios");
while($registros = $querySelect->fetch_assoc()):
    $nome = $registros['nome'];
    $sobrenome = $registros['sobrenome'];
    $cpf = $registros['cpf'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];

    echo "<tr>";
    echo "<td>$nome</td><td>$sobrenome</td><td>$cpf</td><td>$email</td><td>$telefone</td>";
    echo "<td><a href='editar.php?id=$email'><i class='material-icons'>edit</i></a></td>";
    echo "<td><a href='Banco_de_Dados/delete.php?id=$email'><i class='material-icons'>delete</i></a></td>";
    echo "<tr>";
endwhile;
?>