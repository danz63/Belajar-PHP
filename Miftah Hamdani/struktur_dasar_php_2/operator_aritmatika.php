<?php
$gaji = 5000000;
$pajak = 0.1;
$thp = $gaji - ($gaji * $pajak);
echo "Gaji Sebelum Pajak = RP :" . number_format($gaji) . "<br>";
echo "Gaji Setelah Pajak = RP :" . number_format($thp) . "<br>";
