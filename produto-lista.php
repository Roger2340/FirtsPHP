<?php 
    include("cabecalho.php");
    include("conecta.php");
    include("banco-produto.php");?>



<table class="table table-striped table-bordered">

<?php
$produtos = listaProduto($conexao);
foreach($produtos as $produto){
?>
    <tr>
        <td><?= $produto['nome']?></td>
        <td><?= $produto['preco']?></td>
        <td><?= substr($produto ['descricao'], 0,30)?></td>
        <td>
        <form action="remove-produto.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>">
            <input type="hidden" name="nome" value= "<?=$produto['nome']?>">
        <button class="btn btn-danger">remover</button>
        </form
        </td>
    </tr>

<?php    
}
?>
</table>



<?php include("rodape.php");?>