<?php

require_once 'Lat5.php';

$a = new Game('Falcom','Legend Of Heroes','JRPG');

echo "Salah satu developer game yang sedang naik daun adalah :".$a->get_dev();
echo "<br>";
echo "game yang di buat oleh falcom adalah :".$a->get_nama();
echo "<br>";
echo "Genrenya adalah :".$a->get_genre();


?>