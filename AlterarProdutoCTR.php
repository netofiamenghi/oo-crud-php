<?php
	include_once("ProdutoDAO.php");
	include_once("Produto.php");
	
	$produto = new Produto;
	$produto->setCodigo($_POST["codigo"]);
	$produto->setDescricao($_POST["descricao"]);
	$produto->setUnidade($_POST["unidade"]);
	$produto->setValor($_POST["valor"]);
	
	$produtoDAO = new ProdutoDAO;
	if($produtoDAO->alterarProduto($produto)){
		header("Location: consultar.php");
	}else{
		echo "Erro ao alterar Produto!!!";
	}	
?>