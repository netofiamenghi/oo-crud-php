<!DOCTYPE html>
	<html>
		<head><title>Consulta de Produtos</title></head>
		<body>
			<h1>Produto Cadastrados</h1>
			<table border="1">
				<tr>
					<td>Codigo</td>
					<td>Descricao</td>
					<td>Unidade</td>
					<td>Valor</td>
					<td></td>
					<td></td>
				</tr>
				
			<?php
				include_once("ProdutoDAO.php");
				include_once("Produto.php");
				
				$produto = new Produto;
				$produto->setCodigo($_GET["codigo"]);
				
				$produtoDAO = new ProdutoDAO;
				$rs = $produtoDAO->consultarProdutoCodigo($produto);
				while($array = mysql_fetch_array($rs)){
					$p = new Produto;
					$p->setCodigo($array['codigo']);
					$p->setDescricao($array['descricao']);
					$p->setUnidade($array['unidade']);
					$p->setValor($array['valor']);
			?>
				<tr>
					<td><?php echo $p->getCodigo() ?></td>
					<td><?php echo $p->getDescricao() ?></td>
					<td><?php echo $p->getUnidade() ?></td>
					<td><?php echo $p->getValor() ?></td>
					<td><a href="carregarProduto.php?id=
							<?php echo $p->getCodigo()?>">Alterar</a></td>
					<td><a href="ExcluirProdutoCTR.php?id=
							<?php echo $p->getCodigo()?>">Excluir</a></td>
				</tr>
			<?php
				}
			?>				
			</table>
			<br><a href="consultar.php">CONSULTAR</a>
			<br><a href="index.php">CADASTRAR</a>
		</body>
	</html>	