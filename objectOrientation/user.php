<?php
class User{

	private $nome;
	private $cpf;
	private $endereco;

	function User($nome, $cpf, $endereco){
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getEndereco(){
		return $this->endereco;
	}

} ?>