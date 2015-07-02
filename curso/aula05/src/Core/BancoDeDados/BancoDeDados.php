<?php

namespace Core\BancoDeDados;

class BancoDeDados
{

	private $config;

	public function __construct(Array $config)
	{
		$this->config = $config 
	}

	public function conecta()
	{
		$pdo = new \PDO(
			'mysql:host='.$this->config['servidor'].'dbname='.$this->config['banco'],
			$this->config['usuario'],
			$this->config['senha'],
			$this->config['options']
		);
		return $pdo;
	}
}