<?php
$fecha = date('2019-08-01');
$nuevafecha = strtotime ( '+2 month' , strtotime ( $fecha ) ) ;
$nuevafecha = date ( 'Y-m-j' , $nuevafecha );
echo $nuevafecha;

?>