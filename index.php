<?php

require 'core/EquationInterface.php';
require 'core/LogInterface.php';
require 'core/LogAbstract.php';

require 'levkina/LinearEquation.php';
require 'levkina/QuadraticEquation.php';
require 'levkina/MyLog.php';

$equation = new levkina\QuadraticEquation();
try
{
    $result = $equation->solve(5, 14, 4);
    $str = implode("; ", $result);
    levkina\MyLog::Instance()::log($str);
}
catch (Error $error)
{
    levkina\MyLog::Instance()::log($error->getMessage());
}