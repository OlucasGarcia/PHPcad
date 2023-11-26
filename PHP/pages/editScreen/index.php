
    <h1>Editar contato</h1>
    <?php
        $sql = "SELECT * FROM tblContato WHERE contato_codigo=".$_REQUEST["contato_codigo"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>

    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="contato_codigo" value="<?php print $row->contato_codigo;?>">
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="txt_nome" value="<?php print $row->contato_nome;?>" class="form-control">
        </div>
        <div class="mb-3">
            <label>Celular</label>
            <input type="text" name="txt_celular" value="<?php print $row->contato_celular?>" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" name="btn-enviar" class="btn btn-primary">Enviar</button>
        </div>
    </form>
