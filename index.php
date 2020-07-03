<?php

require "./lib/autoload.php";
require './model/Rotas.class.php';

$smarty = new Template();
Rotas::get_Pagina();

$smarty-> assign('Nome', 'Gabriel Espinhara da Silva');
$smarty-> display('index.tpl');

?>
