<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Lista de cadastrados 📃</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpCharles";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tbl_aluno";
    $res = $conn->query($sql);

    if ($res === false) {
        die("Erro na consulta: " . $conn->error);
    }

    if ($res->num_rows > 0) {
        echo "<table>";
        echo "<tr>
            <th class='borda-left'>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th class='borda-right'>Ações</th>
            </tr>";

        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='bg'>" . $row['aluno_id'] . "</td>";
            echo "<td>" . $row['aluno_nome'] . " " . $row['aluno_sobrenome'] . "</td>";
            //echo "<td>" . $row['aluno_sobrenome'] . "</td>";
            //echo "<td>" . $row['aluno_endereco'] . "</td>";
            //echo "<td>" . $row['aluno_cidade'] . "</td>";
            //echo "<td>" . $row['aluno_cep'] . "</td>";
            echo "<td>" . $row['aluno_cpf'] . "</td>";
            //echo "<td>" . $row['aluno_rg'] . "</td>";
            //echo "<td>" . $row['aluno_data_nasc'] . "</td>";
            //echo "<td>" . $row['aluno_celular'] . "</td>";
            echo "<td>" . $row['aluno_email'] . "</td>";
            echo "<td>
                    <button class='botao-editar' onclick=\"location.href='../editScreen/'". $row['aluno_nome'] . "';\"
                    >
                    <a>
                    Editar
                    </a>
                    </button>
                    <button type='submit' class='botao-excluir'>
                    <a>
                    Excluir
                    </a>
                    </td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Não foram encontrados resultados!</p>";
    }

    $conn->close();
    ?>


</body>
</html>
