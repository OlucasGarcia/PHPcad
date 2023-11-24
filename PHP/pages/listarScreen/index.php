<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Listar contatos</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "minas";
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
        echo "<table border='1'>";
        echo "<tr><th>Nome</th><th>Sobrenome</th><th>Endereço</th><th>Cidade</th><th>CEP</th><th>CPF</th><th>RG</th><th>Data Nascimento</th><th>Celular</th><th>Email</th></tr>";

        while ($row = $res->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['aluno_nome'] . "</td>";
            echo "<td>" . $row['aluno_sobrenome'] . "</td>";
            echo "<td>" . $row['aluno_endereco'] . "</td>";
            echo "<td>" . $row['aluno_cidade'] . "</td>";
            echo "<td>" . $row['aluno_cep'] . "</td>";
            echo "<td>" . $row['aluno_cpf'] . "</td>";
            echo "<td>" . $row['aluno_rg'] . "</td>";
            echo "<td>" . $row['aluno_data_nasc'] . "</td>";
            echo "<td>" . $row['aluno_celular'] . "</td>";
            echo "<td>" . $row['aluno_email'] . "</td>";
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
