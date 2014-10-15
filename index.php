<!DOCTYPE html>
<html>
<body>
<?php

function __autoload($className){
	require_once("./$className.php");
}

$g = new tmc_Get;
$data = $g->getArray('cant,plop');
$op1 = print_r($data,true);
$m = new tmc_Model($data);
$op2= print_r($m->plop,true);

echo tmc_H::p($op1);
echo tmc_H::p($op2);
?>
</body>
</html>