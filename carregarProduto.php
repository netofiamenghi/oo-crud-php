<?php
	include_once("ProdutoDAO.php");
	include_once("Produto.php");
	
	$produto = new Produto;
	$produto->setCodigo($_GET["id"]);
	
	$produtoDAO = new ProdutoDAO;
	$rs = $produtoDAO->consultarProdutoCodigo($produto);
	
	$array = mysql_fetch_array($rs);
	$produto->setDescricao($array['descricao']);
	$produto->setUnidade($array['unidade']);
	$produto->setValor($array['valor']);
?>

<html>

<head></head>

<body>
<form method='POST' action='AlterarProdutoCTR.php'>
<input type="hidden" name="codigo" 
		value="<?php echo $produto->getCodigo()?>"/>
Descricao<input type="text" name="descricao" 
	value="<?php echo $produto->getDescricao()?>"/><br>
Unidade<input type="text" name="unidade" 
	value="<?php echo $produto->getUnidade()?>"/><br>
Valor<input type="text" name="valor" 
	value="<?php echo $produto->getValor()?>"/><br>
<input type="submit"/>
	</form>
</body>

</html>