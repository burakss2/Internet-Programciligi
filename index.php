<!-- <php
$sayi=1;
echo $sayi;
$toplam=$sayi;
while($sayi<10)
{
    $sayi++;
    $toplam+=$sayi;
    echo "+".$sayi;
}
echo "=".$toplam;
?>  -->

<?php
/*$sayi=1;
do 
{
    echo$sayi."Burak Toy"."<br>";
    $sayi++;
}
while($sayi <=5);*/
// $sayi=30;
// $a=1;
// do 
// {
// 	if($sayi%$a==0)
// 	{
// 		echo $a." sayısı".$sayi." sayısının bir bölenidir."."<br>";
// 	}
// 	$a++;
// }
// while($a<=$sayi);

$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
foreach($gunler as $gun)
{
	echo $gun."<br>";
}
?>



