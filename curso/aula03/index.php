<?php

include 'conecta.php';
var_dump($pdo->exec('INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ("Alef", "Richard", "alefrichard@live.com", "123456");'));