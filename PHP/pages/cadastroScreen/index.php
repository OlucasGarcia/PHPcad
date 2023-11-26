<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="cadastro-card">
        <h2>Cadastro</h2>
        <h3>Preencha os campos com os dados do aluno</h3>
        <form action="enviar.php" class="cadastro-form" method="post">
            <input type="text" placeholder="Nome" name="inp_cdt_nome">
            <input type="text" placeholder="Sobrenome" name="inp_cdt_sobrenome">
            <input type="text" placeholder="Endereço" name="inp_cdt_end">
            <input type="text" placeholder="Cidade" name="inp_cdt_cidade">
            <input type="number" placeholder="CEP" name="inp_cdt_cep">
            <input type="number" placeholder="CPF" name="inp_cdt_cpf">
            <input type="number" placeholder="RG" name="inp_cdt_rg">
            <input type="number" placeholder="Data de Nascimento" name="inp_cdt_Nasc">
            <input type="number" placeholder="Celular" name="inp_cdt_celular">
            <input type="email" placeholder="Email" name="inp_cdt_email">
            <button type="submit">CADASTRAR</button>
        </form>
    </div>

</body>
</html>
