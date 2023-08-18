<h2>Cadastro de novo cliente</h2>

<form action="index.php?menu=inserir-clientes" method="post">
    <div>
        <label for="nomeCliente">Nome do Cliente: </label>
        <input type="text" name="nomeCliente" id="nomeCliente">
    </div>

    <div>
        <label for="telefoneCliente">Telefone: </label>
        <input type="text" name="telefoneCliente" id="telefoneCliente">
    </div>

    <div>
        <label for="emailCliente">E-mail: </label>
        <input type="text" name="emailCliente" id="emailCliente">
    </div>

    <div>
        <input type="submit" value="Salvar">
    </div>
</form>