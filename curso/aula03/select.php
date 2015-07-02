<?php

include 'conecta.php';

$select = $pdo->prepare('SELECT * FROM usuarios WHERE nome LIKE :nome;');
$select->bindValue(':nome', $_GET['nome']);
$select->execute(); 
$dados = $select->fetchAll(PDO::FETCH_ASSOC);
//$dados = $select->fetch(PDO::FETCH_ASSOC);
?>
<pre>
	<?php print_r($dados);?>
</pre>