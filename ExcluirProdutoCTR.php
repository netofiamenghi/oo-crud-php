<?php
	include_once("ProdutoDAO.php");
	include_once("Produto.php");
	
	$produto = new Produto;
	$produto->setCodigo($_GET["id"]);
	
	$produtoDAO = new ProdutoDAO;
	if($produtoDAO->excluirProduto($produto)){
		header("Location: consultar.php");
	}else{
		echo "Erro ao excluir produto!";
	}
?>