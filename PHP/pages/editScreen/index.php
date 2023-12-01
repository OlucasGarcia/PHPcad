<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Editar Aluno</h1>

    <?php
    include('../../db/config.php');

    if (isset($_GET['id'])) {
        $aluno_id = $_GET['id'];

        $sql = "SELECT * FROM tbl_aluno WHERE aluno_id = $aluno_id";
        $res = $conn->query($sql);

        if ($res === false) {
            die("Erro na consulta: " . $conn->error);
        }

        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();

            echo 
            "<form action='processar_edicao.php' method='post'>
                    <input type='hidden' name='aluno_id' value='" . $row['aluno_id'] . "'>
                    <label for='aluno_nome'>Nome:</label>
                    <input type='text' name='aluno_nome' placeholder='" . $row['aluno_nome'] . "'>
                    <label for='aluno_sobrenome'>Sobrenome:</label>
                    <input type='text' name='aluno_sobrenome' placeholder='" . $row['aluno_sobrenome'] . "'>
                    <label for='aluno_cpf'>CPF:</label>
                    <input type='text' name='aluno_cpf' placeholder='" . $row['aluno_cpf'] . "'>
                    <label for='aluno_email'>Email:</label>
                    <input type='email' name='aluno_email' placeholder='" . $row['aluno_email'] . "'>
                    
                    <button type='submit'>Salvar</button>
                </form>";
        } else {
            echo "<p>Aluno não encontrado!</p>";
        }
    } else {
        echo "<p>ID do aluno não especificado!</p>";
    }

    $conn->close();
    ?>

</body>

</html>
