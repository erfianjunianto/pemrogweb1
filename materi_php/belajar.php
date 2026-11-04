<?php
$nama_depan="Erfian";
$nama_belakang="Junianto";

//echo $nama_depan."<br>".$nama_belakang;

$nilai1=10;
$nilai2=10;
$jumlah=$nilai1+$nilai2;

//echo "Jumlah dari ".$nilai1." dan ".$nilai2." adalah : ".$jumlah;

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