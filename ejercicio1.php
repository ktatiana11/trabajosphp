<?php
// Función para consignar dinero
function consignar ($cantidad){
    if($cantidad>0){
        $array ['saldo'] += $cantidad;
        return "Se ha consignado $cantidad";
    }
    else{
        return "La cantidad a consignar debe ser mayor a cero.";
    }
}
// Función para consultar el saldo
function consultar(){
    
}
?>