<?php

include 'conecta.php';
$select = $pdo->query('SELECT * FROM usuarios WHERE id>0;'); 
//$dados = $select->fetchAll(PDO::FETCH_ASSOC);
$dados = $select->fetchAll(PDO::FETCH_ASSOC);
?>
<pre>
	<?php print_r($dados);?>
</pre>