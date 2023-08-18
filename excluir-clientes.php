<h2>Excluir Cliente</h2>
<?php
$idCliente = $_GET["idCliente"];
$sql = "delete from tbclientes where idCliente = '{$idCliente}'";
$rs = mysqli_query($conexao,$sql);

echo "<p>Registro excluído com sucesso!</p>";

?>