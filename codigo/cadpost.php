<?php
require_once "verificasessao.php";

if (!isset($_GET['id'])) {
  
    $id = 0;
    $titulo = "";
    $conteudo = "";
} else {
    
    $id = $_GET['id'];

    $sql = "SELECT * FROM postagem WHERE idpostagem = $id";

    require_once "conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $titulo = $linha['titulo'];
    $conteudo = $linha['conteudo'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Postagem</title>
</head>

<body>

    <h3>Cadastro de Postagem</h3>
    <form action="salvarpost.php?id=<?php echo $id; ?>" method="POST">

        Título: <br>
        <input type="text" name="titulo" value="<?php echo $titulo; ?>">
        <br>

        Conteúdo: <br>
        <textarea name="conteudo"><?php echo $conteudo; ?></textarea>
        <br>

        <input type="submit" value="Salvar">

    </form>

</body>

</html>
