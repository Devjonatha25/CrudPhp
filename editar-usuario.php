<h1>Editar usuario</h1>
<?php
$sql = "SELECT * FROM cadaster WHERE id=".$_REQUEST["id"];
$res = $conn-> query($sql);
$row = $res-> fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome?>" class="form-control" require>

    </div>
    <div class="mb-3">
        <label>email</label>
        <input type="email" name="email" value="<?php print $row->email?>" class="form-control"require>
    </div>
    <div class="mb-3">
        <label>Passaword</label>
        <input type="password" name="Senha "class="form-control"require>
    </div>
    <div class="mb-3">
        <label>email</label>
        <input type="date" name="data_nasci" value="<?php print $row->data_nasc?>" class="form-control"require>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>