<?php
$tahun = date('Y');
$kabisat = ($tahun % 4 == 0) ? "Kabisat" : "BUkan Kabisat";


echo "Tahun <b>$tahun</b> adalah $kabisat";
