<?php
require_once "verificasessao.php";

if (!isset($_GET['id'])) {

    $id = 0;
    $nome = "";
    $email = "";
    $senha = "";
} else {

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuario WHERE idusuario = $id";

    require_once "conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $nome = $linha['nome'];
    $email = $linha['email'];
    $senha = $linha['senha'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>

    <h3>Cadastro de Usuário</h3>

    <form action="salvarusuario.php?id=<?php echo $id; ?>" method="POST">

        Nome: <br>
        <input type="text" name="nome" value="<?php echo $nome; ?>">
        <br>

        E-mail: <br>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <br>

        Senha: <br>
        <input type="text" name="senha" value="<?php echo $senha; ?>">
        <br>

        <input type="submit" value="Salvar">

    </form>

</body>

</html>
