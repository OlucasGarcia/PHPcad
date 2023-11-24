<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
</html>

<?php
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

    $servername = "localhost";
    $username = "root";
    $password = "minas";
    $dbname = "phpCharles";

    $data_nascimento = date("Y-m-d", strtotime($data_nascimento));
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

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

        print "<div class='divInteira'>
        
        <button onClick=\"location.href='../inicialScreen/'\">CONFIRMAR</button>
        
        </div>";

    }

    $sql->close();
    $conn->close();
}
?>
