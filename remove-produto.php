<?php include ("cabecalho.php");
    include ("conecta.php");
    include ("banco-produto.php");
    
    $nome = $_POST['nome'];
    $id = $_POST['id'];
   
   
    removeProduto($conexao, $id);

?>


<p class="text-success"> Produto <?=$nome?>  com ID  <?=$id?> foi removido</p>