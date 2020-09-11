<?php 

$producto1='arroz';
$producto2='Panela';
$producto3='papa';
$producto4='cerveza';
$producto5='pasta';
$producto6='atún';
$producto7='frijoles';
$producto8='carne';
$producto9='arepas';
$producto10='huevos';

$precio1=1500;
$precio2=7000;
$precio3=8000;
$precio4=30000;
$precio5=2200;
$precio6=9000;
$precio7=4800;
$precio8=25000;
$precio9=10000;
$precio10=14000;

$productoEspecial='medellin';


switch($productoEspecial){

    case 'manzana':
        echo('tiene 10% de descuento');
    break;
    case 'banano':
        echo('tiene 5% de descuento');
    break;
    default:
        echo('no hay descuento');
    break;
    
}


$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;


/*if($total>80000){
    echo('Querido amigo, no te alcanza el dinero');
}else{
    echo('gracias por su compra');
}*/




?>