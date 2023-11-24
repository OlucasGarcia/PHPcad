<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['inp_cdt_nome'];
    $escola = $_POST['inp_cdt_escola'];
    $cpf = $_POST['inp_cdt_cpf'];
    $rg = $_POST['inp_cdt_rg'];
    $email = $_POST['inp_cdt_email'];
    $senha = $_POST['inp_cdt_senha'];

    $servername = "localhost";
    $username = "root";
    $password = "minas";
    $dbname = "phpcharles";

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = $conn->prepare("INSERT INTO tbl_user (nome_completo, unidade_escolar, cpf, rg, email, senha) VALUES (?, ?, ?, ?, ?, ?)");

    if (!$sql) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $sql->bind_param("ssssss", $nome, $escola, $cpf, $rg, $email, $senha_hash);

    $result = $sql->execute();

    if ($result) {
        echo "Dados inseridos com sucesso!";
    } else {
        die("Erro na execução da consulta: " . $sql->error);
    }

    $sql->close();
    $conn->close();
}
?>
