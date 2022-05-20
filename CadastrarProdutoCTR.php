<?php
	
	include_once("ProdutoDAO.php");
	include_once("Produto.php");

	$produto = new Produto;
	$produto->setDescricao($_POST["descricao"]);
	$produto->setUnidade($_POST["unidade"]);
	$produto->setValor($_POST["valor"]);

	$produtoDAO = new ProdutoDAO;
			
	if($produtoDAO->cadastrarProduto($produto)){

		echo "Produto Cadastrado com Sucesso!";
		echo "<br><a href='index.php'>VOLTAR</a>";
		echo "<br><a href='consultar.php'>CONSULTAR</a>";

	}else{
		
		echo "Erro ao Cadastrar Produto!";
	
	}	
?>