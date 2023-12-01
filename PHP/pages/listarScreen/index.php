<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <button class='botao-voltar' onclick="location.href='../inicialScreen/'">
    <a>Voltar</a>
    </button>

    <h1>Lista de cadastrados 📃</h1>

    <?php
    include('../../db/config.php');


    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        
        
        $delete_sql = "DELETE FROM tbl_aluno WHERE aluno_id = $delete_id";
        
        $result = $conn->query($delete_sql);
        
        if ($result === false) {
            echo "Erro na exclusão: " . $conn->error;
        }
    }

   
    $select_sql = "SELECT * FROM tbl_aluno";
    $select_result = $conn->query($select_sql);

    if ($select_result === false) {
        die("Erro na consulta: " . $conn->error);
    }

    if ($select_result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
            <th class='borda-left'>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th class='borda-right'>Ações</th>
            </tr>";

        while ($row = $select_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='bg'>" . $row['aluno_id'] . "</td>";
            echo "<td>" . $row['aluno_nome'] . " " . $row['aluno_sobrenome'] . "</td>";
            echo "<td>" . $row['aluno_cpf'] . "</td>";
            echo "<td>" . $row['aluno_email'] . "</td>";
            echo "<td>
                <button class='botao-editar' onclick=\"location.href='../editScreen/?id=" . $row['aluno_id'] . "';\">
                    <a>Editar</a>
                </button>
                <button class='botao-excluir' onclick=\"confirmarExclusao(" . $row['aluno_id'] . ")\">
                    <a>Excluir</a>
                </td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Não foram encontrados resultados!</p>";
    }

    $conn->close();
    ?>

    <script>
        function confirmarExclusao(id) {
            if (confirm("Tem certeza que deseja excluir este registro?")) {
                window.location.href = "?delete_id=" + id;
            }
        }
    </script>

</body>

</html>
