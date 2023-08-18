<h2>Inserir Cliente</h2>

<?php
$idCliente = $_POST["idCliente"];
$nomeCliente = $_POST["nomeCliente"];
$telefoneCliente = $_POST["telefoneCliente"];
$emailCliente = $_POST["emailCliente"];

$sql = "INSERT INTO tbclientes (
    nomeCliente,
    telefoneCliente,
    emailCliente
    )
    VALUES(
    '$nomeCliente',
    '$telefoneCliente',
    '$emailCliente',
    )";
    $rs = mysqli_query($conexao,$sql);

        if($rs){
            echo "<p>Registro inserido com sucesso</p>";
        } else {
            echo "<p>Erro ao inserir</p>";
        }
?>