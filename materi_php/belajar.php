<?php
$nama_depan="Erfian";
$nama_belakang="Junianto";

//echo $nama_depan."<br>".$nama_belakang;

$nilai1=20;
$nilai2=10;
$jumlah=$nilai1+$nilai2;
$kurang=$nilai1-$nilai2;
$kali=$nilai1*$nilai2;
$bagi=$nilai1/$nilai2;

echo "Hasil dari ".$nilai1." + ".$nilai2." adalah : ".$jumlah."<br>";
echo "Hasil dari ".$nilai1." - ".$nilai2." adalah : ".$kurang."<br>";
echo "Hasil dari ".$nilai1." × ".$nilai2." adalah : ".$kali."<br>";
echo "Hasil dari ".$nilai1." ÷ ".$nilai2." adalah : ".$bagi."<br>";

/**
if($nilai1 > $nilai2){
	echo "Nilai Lebih Besar";
}else
if($nilai1 = $nilai2){
	echo "Nilai sama besar";
}else{
	echo "Nilai Lebih Kecil";
}
**/

$buah = ["Apel","Mangga","Pisang","Kedongdong"];
// Indexed Array
foreach ($buah as $key => $item) {
	echo "Buah ke-".($key+1).": ".$item."<br>";
}


?>