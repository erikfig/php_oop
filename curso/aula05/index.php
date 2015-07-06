<?php

header('Content-type: text/html; charset=UTF-8');

define('ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

include ROOT.DS.'vendor'.DS.'autoload.php';


$BancoConfig = new Application\Config\BancoDeDados();
$BancoDeDados = new Core\BancoDeDados\BancoDeDados($BancoConfig->db);

$pdo = $BancoDeDados->conecta();
$data = $BancoDeDados->executa();
?>


<pre>
	<?php print_r($data);?>
</pre>