<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['inp_email'];
    $senha = $_POST['inp_senha'];

    $servername = "localhost";
    $username = "root";
    $password = "minas";
    $dbname = "phpcharles";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = $conn->prepare("SELECT * FROM tbl_user WHERE email = ?");
    $sql->bind_param("s", $email);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($senha, $row['senha'])) {
            header("Location: ../inicialScreen/");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }

    $sql->close();
    $conn->close();
}
?>
