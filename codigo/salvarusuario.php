<?php

require_once "verifica_sessao.php";
require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$id = $_GET['id'];

if ($id == 0) {

    $sql = "INSERT INTO usuario (nome, email, senha)
            VALUES ('$nome', '$email', '$senha')";

} else {

    $sql = "UPDATE usuario
            SET nome = '$nome',
                email = '$email',
                senha = '$senha'
            WHERE idusuario = $id";
}

mysqli_query($conexao, $sql);

header("Location: index.php");

?>
