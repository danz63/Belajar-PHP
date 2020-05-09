<?php

$arrPresiden = [
    'Ir. H. Soekarno',
    'H. M. Soeharto',
    'Prof. DR. Ing. Bacharuddin Jusuf Habibie',
    'KH. Abdurrahman Wahid',
    'Megawati Soekarno Putri',
    'Dr. H. Susilo Bambang Yudhoyono',
    'Ir. H. Joko Widodo'
];
echo "Presiden Republik Indonesia dari masa ke masa";
echo "<ol>";
foreach ($arrPresiden as $value) {
    echo "<li>$value</li>";
}
echo "</ol>";
