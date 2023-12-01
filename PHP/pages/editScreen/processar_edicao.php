<?php
include('../../db/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno_id = $_POST['aluno_id'];
    $aluno_nome = $_POST['aluno_nome'];
    $aluno_sobrenome = $_POST['aluno_sobrenome'];
    $aluno_cpf = $_POST['aluno_cpf'];
    $aluno_email = $_POST['aluno_email'];
    
    $sql = "UPDATE tbl_aluno SET ";
    if (!empty($aluno_nome)) {
        $sql .= "aluno_nome = '$aluno_nome', ";
    }
    if (!empty($aluno_sobrenome)) {
        $sql .= "aluno_sobrenome = '$aluno_sobrenome', ";
    }
    if (!empty($aluno_cpf)) {
        $sql .= "aluno_cpf = '$aluno_cpf', ";
    }
    if (!empty($aluno_email)) {
        $sql .= "aluno_email = '$aluno_email', ";
    }
   
    $sql = rtrim($sql, ", ");
    $sql .= " WHERE aluno_id = $aluno_id";

    $result = $conn->query($sql);

    if ($result === false) {
        echo("Erro na atualização: " . $conn->error);
    }

    header("Location: ../listarScreen/");
    exit();
} else {
    echo "Acesso inválido!";
}
?>
