<?php

function pembagian($angka, $pembagi)
{
  if ($pembagi === 0) {
    throw new Exception("Pembagi tidak boleh 0");
  }

  $hasil = 0;
  while ($angka >= $pembagi) {
    $angka -= $pembagi;
    $hasil++;
  }

  return $hasil;
}

$angka = 7;
$pembagi = 2;
$result = pembagian($angka, $pembagi);
echo "$angka : $pembagi = $result<br>";

$angka = 8;
$pembagi = 4;
$result = pembagian($angka, $pembagi);
echo "$angka : $pembagi = $result<br>";
