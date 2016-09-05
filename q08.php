<?php 

class ClassName
{
	public $number;
	public function fun($number)
	{
		$this->number = $number;
		$fact = 1;
		for ($i=$number; $i>=1; $i--){ 
			$fact = $fact*$i;
		}
	echo $fact;
	}
}

$a = new ClassName;
$a->fun(5);
 ?>