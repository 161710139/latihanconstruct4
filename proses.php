<?php
require_once 'rumah.php';

$rumah= new rumah(2,88,1);
echo 'Jumlah Kamar...'.$rumah->get_kamar(). '<br>';
echo 'Type...'.$rumah->get_type(). '<br>';
echo 'Kamar Mandi...'.$rumah->get_mandi(). '<br>';
?>