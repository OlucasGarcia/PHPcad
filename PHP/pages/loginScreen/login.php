<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário não encontrado!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    session_start();
    include('../../db/config.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['inp_email'];
        $senha = $_POST['inp_senha'];


        $sql = $conn->prepare("SELECT * FROM tbl_user WHERE email = ?");
        $sql->bind_param("s", $email);
        $sql->execute();

        $result = $sql->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            if (password_verify($senha, $row['senha'])) {

                $_SESSION['user_email'] = $row['email'];


                header("Location: ../inicialScreen/");
                exit();
            } else {
                echo "
            <h1>Senha incorreta!</h1>
            <button class='botao-voltar' onclick=\"location.href='../loginScreen/'\">
            <a>Voltar</a>
            </button>";
            }
        } else {
            echo "
        <h1>Usuário não encontrado!</h1>
        <button class='botao-voltar' onclick=\"location.href='../loginScreen/'\">
        <a>Voltar</a>
        </button>
        ";
        }

        $sql->close();
        $conn->close();
    }
    ?>

</body>

</html>