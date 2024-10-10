<?php

require __DIR__."/app/controller/ValidarUser.php";


if (!isset($_POST['usuario']) && !isset($_POST['senha'])){
    header("Location: ./login.php");
}
$existeAluno = (new ValidarUser())->verificarSeExiste($_POST['usuario'],$_POST['senha']);

if($_POST['usuario'] == ""){
    die("Usuario não digitado!");
}

if($_POST['senha'] == ""){
    die("Senha não digitada!");
}

if(empty($existeAluno)){
    die("Não existe este usuario!");
}

echo "Esse usuario existe!";

?>