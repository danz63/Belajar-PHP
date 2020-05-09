<?php

$day = date("D");
$tanggal = date('\T\g\l : d-m-Y');
switch ($day) {
    case "Sun":
        $hari = "Minggu";
        break;
    case "Mon":
        $hari = "Senin";
        break;
    case "Tue":
        $hari = "Selasa";
        break;
    case "Wed":
        $hari = "Rabu";
        break;
    case "Thu":
        $hari = "Kamis";
        break;
    case "Fri":
        $hari = "Jumat";
        break;
    case "Sat":
        $hari = "Sabtu";
        break;
    default:
        $hari = "Kiamat";
}

echo "Hari Ini Hari <b>$hari $tanggal</b>";
