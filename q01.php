<?php 
	
//   Neticesi aşağıdakılar olan funksiya yazın
//   Bir komment falan yaz )) nə verir baş, aşağıda ?) həm də repo adlarını də ciciş qoy ))

	/*
		ekranaYaz(); 								-->Boş
		ekranaYaz('salam'); 						-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');		-->arg1: salam,arg2: heci,arg3: necesen


	*/
		
		

		function fun($yaz=null, $h=null, $c=null){
			
			if ($yaz==null) {
				echo "bos";	
			}
			elseif($h==null){
				echo $yaz;
			}elseif($c==null){
				echo $yaz . $h;
			}else{
				echo $yaz . $h . $c;
			}
		}
		
$a="hello1 ";
$b="hello ";
$d="ddd";
fun($a,$b,$d);

?>
