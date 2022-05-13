<?php
include_once 'conexao.php';
$x;
$queryDelete = $link->query("delete from usuarios where cpf > 0;");
if(mysqli_affected_rows($link) > 0):
    header("Location:..");
endif;