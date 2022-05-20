<?php
	class Produto{
	
		private $codigo;
		private $descricao;
		private $unidade;
		private $valor;
		
		function __construct(){
			$this->codigo = 0;
			$this->descricao = "";
			$this->unidade = "";
			$this->valor = 0;
		}
		
		function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		function getCodigo(){
			return $this->codigo;
		}
		function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		function getDescricao(){
			return $this->descricao;
		}
		
		function setUnidade($unidade){
			$this->unidade = $unidade;
		}
		function getUnidade(){
			return $this->unidade;
		}
		
		function setValor($valor){
			$this->valor = $valor;
		}
		function getValor(){
			return $this->valor;
		}
	}
?>