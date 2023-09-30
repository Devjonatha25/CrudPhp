<h1>novo usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" require>

    </div>
    <div class="mb-3">
        <label>email</label>
        <input type="email" name="email" class="form-control"require>
    </div>
    <div class="mb-3">
        <label>Passaword</label>
        <input type="password" name="Senha " class="form-control"require>
    </div>
    <div class="mb-3">
        <label>email</label>
        <input type="date" name="data_nasci" class="form-control"require>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>