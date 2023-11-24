<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastr</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="cadastro-card">
        <h2>Cadastro de Usuário</h2>
        <h3>Preencha os campos com os seus dados</h3>
        <form action="cadastrouser.php" class="cadastro-form" method="POST">
    <input type="text" placeholder="Nome Completo" name="inp_cdt_nome" required>
    <input type="text" placeholder="Sua Unidade Escolar" name="inp_cdt_escola" required>
    <input type="number" placeholder="CPF" name="inp_cdt_cpf" required>
    <input type="number" placeholder="RG" name="inp_cdt_rg" required>
    <input type="email" placeholder="Email" name="inp_cdt_email" required>
    <input type="password" placeholder="Senha" name="inp_cdt_senha" required>
    <button type="submit">CRIAR CADASTRO</button>
</form>

    </div>
</body>
</html>