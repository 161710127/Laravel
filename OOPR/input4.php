<?php

require_once 'Lat4.php';

$a = new motor('roda 2','merah','Suzuki');

echo "Mobil merupakan kendaraan :".$a->get_roda();
echo "<br>";
echo "Warna Mobil itu :".$a->get_warna();
echo "<br>";
echo "Merk mobil itu :".$a->get_merk();


?>