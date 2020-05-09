<?php
$nim = "43E57006165037";
$nama = "Muhammad Miftah Hamdani";
$umur = 25;
$nilai = 82.25;
$status = TRUE;
echo "NIM : " . $nim . "<br>";
echo "Nama : " . $nama . "<br>";
print "Umur : " . $umur;
print "<br>";
printf("Nilai : %.3f <br>", $nilai);

if ($status)
    echo "Status : Aktif";
else
    echo "Status : Tidak Aktif";
