<?php 
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/


class ClassName {
	
	function __construct($one,$two)
	{
		$date1 = date_create($one);
		$date2 = date_create($two);
		$diff = date_diff($date1,$date2);		
		echo $diff->format("%a days");
	}
}

$a = new ClassName("2015-01-11","1995-01-11");

 ?>