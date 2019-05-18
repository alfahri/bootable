<?php
$nama = "Kambingaaaaa";
$pilih = "a";
function countChar($nama, $pilih){
	echo substr_count($nama, $pilih);
}

$cc = countChar($nama, $pilih);

echo $cc;
?>