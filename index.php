<?php

require __DIR__ . "/vendor/autoload.php";

use levkina\LevkinaException;

ini_set("display_errors", 1);
error_reporting (-1);

$b = new \levkina\QuadraticEquation();

try{
\levkina\MyLog::log("Версия программы ". file_get_contents('./version'));
    $values = array();

    for($i=1; $i<4; $i++){
        echo "Введите ".$i." аргумент: ";
        $values[]=readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    \levkina\MyLog::log("Введено уравнение ".$va."x^2 + ".$vb."x + ".$vc);
    $x = $b->solve($va,$vb,$vc);

    $str = implode(", ", $x);
    \levkina\MyLog::log("Корни уравнения: ".$str);
}catch(LevkinaException $e){
    \levkina\MyLog::log($e->getMessage());
}

\levkina\MyLog::write();

?>