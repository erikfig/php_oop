<?php

namespace Core\BancoDeDados;

class BancoDeDados
{

	private $config, $pdo;

	public function __construct(Array $config)
	{
		$this->config = $config;
	}

	public function conecta()
	{
		$this->pdo = new \PDO(
			echo 'mysql:host='.$this->config['servidor'].'dbname='.$this->config['banco'],
			$this->config['usuario'],
			$this->config['senha'],
			$this->config['options']
		);
		return $this->pdo;
	}

	public function executa()
	{
		$select = $this->pdo->prepare('SELECT * FROM usuarios WHERE nome = :nome;');
		$select->bindValue(':nome', $_GET['nome']);
		$select->execute();
		return $select->fetchAll(\PDO::FETCH_ASSOC);
	}
}