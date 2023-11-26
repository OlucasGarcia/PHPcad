<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <div class="card">
            
                <a href="../cadastroScreen/" class="principal">Cadastrar</a>
            
            
            
                <a href="../listarScreen/" class="principal">Listar</a>
        </div>
    </main>

    <?php

    if (isset($_SESSION['user_id'])) {
        echo "<div>
            <form action='logout.php' class='cadastro-form' method='post'>
            <button type='submit'>
            <p>SAIR</p>
            </button>
            </form>
            </div>";
    } else {
        echo "<h2>Usuário não autenticado.</h2>";
    }
    ?>

</body>
</html>
