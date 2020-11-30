<?php

use levkina\LevkinaException;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "levkina/MyLog.php";
include "levkina/LinearEquation.php";
include "levkina/QuadraticEquation.php";
include "levkina/LevkinaException.php";

ini_set("display_errors", 1);
error_reporting (-1);

$b = new \levkina\QuLinearEquation();

try{

    $values = array();

    for($i=1; $i<4; $i++){
        echo "Введите ".$i." аргумент: ";
        $values[]=readline();
    }
    $va = $values[0];
    $vb = $values[1];
    $vc = $values[2];

    \levkina\MyLog::log("Введено уравнение ".$va."x^2 + ".$vb."x + ".$vc);
    $x = $b->qu_solve($va,$vb,$vc);

    $str = implode(", ", $x);
    \levkina\MyLog::log("Корни уравнения: ".$str);
}catch(LevkinaException $e){
    \levkina\MyLog::log($e->getMessage());
}

\levkina\MyLog::write();

?>