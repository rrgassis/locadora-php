<h2>Atualizar Cliente</h2>
<?php 
$idCliente = $_POST["idCliente"];
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];

$sql = "update tbclientes set
nomeCliente='{$nomeCliente}'
telefoneCliente='{$telefoneCliente}'
emailCliente='{$emailCliente}'
";
$rs = mysqli_query($conexao, $sql);
echo "<p>Registro atualizado com sucesso!</p>";
?>


