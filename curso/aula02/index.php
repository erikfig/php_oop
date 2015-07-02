<?php

include 'conecta.php';
var_dump($pdo->exec('INSERT INTO usuarios (nome, sobrenome, email, senha) VALUES ("João", "Andrado", "andradejoao@live.com", "654321");'));