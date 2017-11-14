<?php

require_once 'Latihan2.php';

$b = new kucing('Meoong','5Kg','Persia');

echo "Suaranya...".$b->get_Suara();
echo "<br>";
echo "Beratnya....".$b->get_Berat();
echo "<br>";
echo "Jenisnya....".$b->get_Jenis();


?>