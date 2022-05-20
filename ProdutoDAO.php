<?php
	
	include_once("Conexao.php");
	
	class ProdutoDAO{
	
		function cadastrarProduto($produto){
			
			if($comando = mysql_query("insert into produto (descricao, unidade, valor) values 
				  ('".$produto->getDescricao()."','".$produto->getUnidade()."',
					'".$produto->getValor()."')") or die (mysql_error())){
				return true;
			}else{
				return false;
			}
			mysql_close($conexao);
		}
		
		function consultarProdutoCodigo($produto){
			$comando = mysql_query("SELECT codigo, descricao, 
				unidade, valor FROM produto 
				WHERE codigo = '".$produto->getCodigo()."' ") 
				or die (mysql_error());
			return $comando;
			mysql_close($conexao);
		}
		
		function excluirProduto($produto){
			if($comando = mysql_query("delete from produto 
					where codigo = '".$produto->getCodigo()."' ") 
					or die (mysql_error())){
				return true;
			}else{
				return false;
			}	
			mysql_close($conexao);
		}	
		function alterarProduto($produto){
			if($comando = mysql_query("update produto set 
			descricao = '".$produto->getDescricao()."', 
			unidade = '".$produto->getUnidade()."', 
			valor = '".$produto->getValor()."' 
			where codigo = '".$produto->getCodigo()."' ") 
			or die (mysql_error())){
				return true;
			}else{
				return false;
			}	
			mysql_close($conexao);
		}
	}
?>