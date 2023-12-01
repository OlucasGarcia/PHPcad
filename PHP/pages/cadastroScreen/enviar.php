<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
</html>

<?php

include('../../db/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['inp_cdt_nome'];
    $sobrenome = $_POST['inp_cdt_sobrenome'];
    $endereco = $_POST['inp_cdt_end'];
    $cidade = $_POST['inp_cdt_cidade'];
    $cep = $_POST['inp_cdt_cep'];
    $cpf = $_POST['inp_cdt_cpf'];
    $rg = $_POST['inp_cdt_rg'];
    $data_nascimento = $_POST['inp_cdt_Nasc'];
    $celular = $_POST['inp_cdt_celular'];
    $email = $_POST['inp_cdt_email'];


    $data_nascimento = date("Y-m-d", strtotime($data_nascimento));
   

    $sql = $conn->prepare("INSERT INTO tbl_aluno (aluno_nome, aluno_sobrenome, aluno_endereco, aluno_cidade, aluno_cep, aluno_cpf, aluno_rg, aluno_data_nasc, aluno_celular, aluno_email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    if (!$sql) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    $sql->bind_param("ssssssssss", $nome, $sobrenome, $endereco, $cidade, $cep, $cpf, $rg, $data_nascimento, $celular, $email);

    $result = $sql->execute();

    if (!$result) {
        die("Erro na execução da consulta: " . $sql->error);
    }

    if($result === true){

        print "
        <h1>Cadastro feito com sucesso</h1>
        <button class='botao-confirma' onclick=\"location.href='../inicialScreen/'\">
        <a>CONFIRMAR</a>
        </button>
        <button class='botao-lista' onclick=\"location.href='../listarScreen/'\">
        <a>VER LISTA DE CADASTRO</a>
        </button>
        ";

    }

    $sql->close();
    $conn->close();
}
?>
