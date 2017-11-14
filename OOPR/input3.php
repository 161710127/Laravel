<?php

require_once 'Lat3.php';

$a = new mobil('roda 4','Hitam','Suzuki');

echo "Mobil merupakan kendaraan :".$a->get_roda();
echo "<br>";
echo "Warna Mobil itu :".$a->get_warna();
echo "<br>";
echo "Merk mobil itu :".$a->get_merk();


?>