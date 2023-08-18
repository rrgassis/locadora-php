<h2>Excluir Categoria</h2>
<?php
$idCategoria = $_GET["idCategoria"];
$sql = "delete from tbcategorias where idCategoria = '{$idCategoria}'";
$rs = mysqli_query($conexao,$sql);

echo "<p>Registro excluido com sucesso!</p>";

?>