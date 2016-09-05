<?php 
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x;//burada yuxarida teyin olundugu ucun 5-dir
echo "<br />";
echo $x+++$x++;//birinci x yuxaridan gelir yeni 5, ikinci x ise evvelki x-in bir defe artirildigi ucun 6 olur netice 5+6=11
echo "<br />";
echo $x;//9cu setirder en son olan x bir defe artirildi, yeni 6idi artirilir 7olur ve novbeti x verildikde yeni 11ci setirde verilen olan x olur 7.
echo "<br />";
echo $x---$x--;//en sonda x 7 oldugu ucun yeni 11ci setirde 7 oldu son. 13cu setride birinci 7 olur demeli ve o bir defe azaldilir ve netice ikinci x-da ozunu gosterir yeni 6 olur. 7-6=1. ikinci x ise yeni 6 bir defe azaldilir amma neticesi novbeti x yazilanda, yeni 16ci setirde oz neticesin gosterir. 
echo "<br />";
echo $x;//bunnun izahini yuxarida verdim. 13cu setirde.



//2-ci
var_dump(0123 == 123);//birinci reqem onunde 0 olduguna gore avtomatik octal hesablanir. birinci reqem decimal olaraq 83-dur beraber de olmadigi ucun false sayilir.
var_dump('0123' == 123);//string icinde olduguna gore php 0-i gormur.
var_dump('0123' === 123);// burda type yoxlanir biri string biri int olduguna gore false qaytarir.


//3-cü
$x = true and false;
var_dump($x);//ilk false yazsan false true yazsan true cixaracaq. hec bir muqayise operatoru deyil. bu beraberliyin xususiyyetidir ki beraberden sonraki ilki goturur. 


//4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$25"; //cavab 18 olacaq. eger string ici her hansi numeric ishare ile bashlasa onda icindekini int kimi goturur. numeric olmayan ishare ile bashlasa onda cavabi 0 kimi goturecek. meselen % numericdi $ ise deyil.
echo $x;

 ?>