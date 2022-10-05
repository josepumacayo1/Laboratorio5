<?php
    $gaseosa_3_litros = floatval ($_POST['gaseosa_3_litros']);
    $cantidad = floatval ($_POST['cantidad']); 
    $nuePrecio=0.05*$gaseosa_3_litros;
    $icompra=$nuePrecio*$cantidad;
    $idescuento=0.07*$icompra;
    $ipagar=$icompra-$idescuento;
    $obsequio=2*$cantidad;
    echo 'Importe de compra:' .$icompra ."<br/>\n";
    echo 'Importe de descuento:' .$idescuento ."<br/>\n";
    echo 'Importe a pagar:' .$ipagar."<br/>\n";
    echo 'Obsequio:' .$obsequio ."<br/>\n";
?>
