<?php
$idCliente= $_GET["idCliente"];
$sql = "SELECT * FROM tbclientes WHERE idCliente = '{$idCliente}'";
$rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta. Erro: " . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>
<h2>Editar cliente</h2>
<form action="index.php?menu=atualizar-clientes" method="post">
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