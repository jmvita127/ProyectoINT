

<?php

$promo[0]='imagenes/promo1.jpg';
$promo[1]='imagenes/promo2.jpg';
$promo[2]='imagenes/promo3.jpg';
$promo[3]='imagenes/promo4.jpg';
$promo[4]='imagenes/promo5.jpg';
$promo[5]='imagenes/promo6.jpg';

$i= rand(0,5);

print '<img src="'.$promo[$i].'">';

?>
