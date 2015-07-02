<?php

header('Content-type: text/html; charset=UTF-8');

define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

include ROOT.DS.'vendor'.DS.'autoload.php';


$BancoConfig = new Application\Config\BancoDeDados();
$BancoDeDados = new Core\BancoDeDados\BancoDeDados($BancoConfig->db);

$pdo = $BancoDeDados->conecta();

$select = $pdo->prepare('SELECT * FROM usuarios WHERE nome = :nome;');
$select->bindValue(':nome', $_GET['nome']);
$select->execute();
$dados = $select->fetchAll(PDO::FETCH_ASSOC);
//$dados = $select->fetch(PDO::FETCH_ASSOC);
?>
<pre>
	<?php print_r($dados);?>
</pre>