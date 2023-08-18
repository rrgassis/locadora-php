<h2>Lista de Vídeos</h2>
<div>
    <a href="index.php?menu=cad-videos">Cadastrar novo vídeo</a>
</div>
<div>
    <?php
    if (isset ($_POST["txtPesquisa"])) {
        $txtPesquisa = $_POST["txtPesquisa"];
    } else {
        $txtPesquisa = "";
    }
    ?>
    <form action="" method="post">
        <label for="txtPesquisa">Pesquisar</label>
        <input type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
        <button type="submit">Ok</button>
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Duração do Filme</th>
            <th>Valor da Locação</th>
            <th>Categorias</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $sql = "SELECT f.idFilme,tituloFilme, duracaoFilme,valorLocacao,nomeCategoria,
        CASE
            WHEN statusFilme = 0 THEN 'Disponivel'
            WHEN statusFilme = 1 THEN 'Locado'
            WHEN statusFilme = 2 THEN 'Indisponivel'
        END
        as statusLocacao
        FROM
        tbfilmes as f left join 
        tbcategorias as c on f.idCategoria = c.idCategoria
        where tituloFilme like '%{$txtPesquisa}%'
         order by tituloFilme";
$rs = mysqli_query($conexao, $sql);
while ($dados = mysqli_fetch_assoc($rs)){
?>
    <tr>
        <td><?= $dados["idFilme"] ?></td>
        <td><?= $dados["tituloFilme"] ?></td>
        <td><?= $dados["duracaoFilme"] ?></td>
        <td><?= $dados["valorLocacao"] ?></td>
        <td><?= $dados["nomeCategoria"] ?></td>
        <td><?= $dados["statusLocacao"] ?></td>
        <td>
            <a href="index.php?menu=editar-videos&idFilme=<?=$dados["idFilme"]?>">
                Editar 
            </a>
        </td>
        <td>
            <a href="index.php?menu=excluir-videos&idFilme=<?=$dados["idFilme"]?>">
            Excluir
             </a>
        </td>
    </tr>
    <?php
    }
    ?>
    </tbody>

</table>
