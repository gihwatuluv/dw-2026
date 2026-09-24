<?php

$id = $_GET['id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

if ($id == 0) {
    $sql = "INSERT INTO postagem (titulo, conteudo)
            VALUES ('$titulo', '$conteudo');";
}
else {
    $sql = "UPDATE postagem
            SET titulo = '$titulo',
                conteudo = '$conteudo'
            WHERE idpostagem = $id";
}

require_once "../conexao.php";
mysqli_query($conexao, $sql);

header("Location: sucesso.html");

?>
