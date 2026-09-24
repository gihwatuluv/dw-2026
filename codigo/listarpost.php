<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Postagens</title>

    <style>
        table, tr, td {
            border-style: solid;
            padding: 20px;
        }
    </style>
</head>

<body>

    <h2>Lista de postagens</h2>

    <table>

        <tr>
            <td>id</td>
            <td>titulo</td>
            <td>conteudo</td>
            <td>ação</td>
            <td>ação</td>
            <td>EDITAR</td>
        </tr>

        <?php

        require_once "conexao.php";

        $sql = "SELECT * FROM postagem";

        $resultados = mysqli_query($conexao, $sql);

        while ($linha = mysqli_fetch_array($resultados)) {

            $id = $linha['idpostagem'];
            $titulo = $linha['titulo'];
            $conteudo = $linha['conteudo'];

            echo "<tr>";

                echo "<td>$id</td>";
                echo "<td>$titulo</td>";
                echo "<td>$conteudo</td>";
                echo "<td><a href='deletar_post.php?id=$id'>";
                echo "<td>
                        <a href='deletar_post.php?id=$id'>
                            excluir
                        </a>
                      </td>";

                echo "<td>
                        <a href='cadpost.php?id=$id'>
                            Editar
                        </a>
                      </td>";

            echo "</tr>";
        }

        ?>

    </table>

</body>

</html>
