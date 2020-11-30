<?php namespace levkina;

use core\EquationInterface;

Class QuadraticEquation extends LinearEquation implements EquationInterface{
	
	protected function dis($a, $b, $c){
		return ($b**2)-4*$a*$c;
		}
	
	public function qu_solve($a, $b, $c){

		$x = $this->dis($a, $b, $c);

	    if($a == 0){
	        return $this->solve($b,$c);
	    }
        \levkina\MyLog::log("Определено, что это квадратное уравнение");
		if ($x > 0){
		    return $this->X=array(
		        (-$b+sqrt($x))/(2*$a),
                (-$b-sqrt($x))/(2*$a)
		        );
		}
		
		if($x == 0){
			return $this->X=array(-($b/(2*$a)));
		}

		throw new LevkinaException("Ошибка: уравнение не имеет корней.");
		
	}
	
}

?>