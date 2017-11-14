<?php

require_once 'Latihan1.php';

$a = new Laptop('Toshiba','Satelite L7440','NVIDIA 520m','2Gb','Intel Core i5');

echo "Merk Laptop :".$a->get_merk();
echo "<br>";
echo "Seri Laptop ini :".$a->get_seri();
echo "<br>";
echo "VGA :".$a->get_VGA();
echo "<br>";
echo "RAM :".$a->get_RAM();
echo "<br>";
echo "Processor :".$a->get_Processor();

?>