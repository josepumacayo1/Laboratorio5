<?php
    $hijos_en_edad_escolar = floatval ($_POST['hijos_en_edad_escolar']);
    $total_vendido = floatval ($_POST['total_vendido']);
    $sueldo_basico=600;
    $bonificacion=50*$hijos_en_edad_escolar;
    $comision=$total_vendido*0.075;
    $sueldo_bruto=$sueldo_basico+$comision+$bonificacion;
    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo 'Valor de bonificacion: ' . $bonificacion . "<br/>\n";
    echo 'Valor de comision: ' . $comision . "<br/>\n";
    echo 'Valor de descuento: ' . $descuento . "<br/>\n";
    echo 'Valor de sueldo basico: ' . $sueldo_basico . "<br/>\n";
    echo 'Valor de sueldo bruto: ' . $sueldo_bruto . "<br/>\n";
    echo 'Valor de sueldo neto: ' . $sueldo_neto . "<br/>\n";
?>