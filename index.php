<?php
session_start();

require('classes/page.class.php');
$nerdwolf = new NerdwolfPage;

//** Die folgende Zeile "einkommentieren" um die Debug-Konsole anzuzeigen
//$nerdwolf->debugging = true;

$nerdwolf->display('index.tpl');

?>
