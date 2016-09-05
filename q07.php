<?php 
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//


class ClassName
{
	public $arr;
		
	function fun($arr1)
	{
		$this->arr = $arr1;
		sort($arr1);
		foreach ($arr1 as $key => $value) {
			echo $value . "<br>"; 
		}
	}
}

$a = new ClassName;
$a->fun([5,3,4]);
 ?>