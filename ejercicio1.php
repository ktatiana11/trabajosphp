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
    return "Su saldo actual es de:" .$array ['saldo'];
}

// Función para retirar dinero
function retirar ($cantidad){
    if ($cantidad>0){
        if ($cantidad <=$array ['saldo'] ){
            $array ['saldo'] -= $cantidad;
            return "Ha retirado $cantidad. Su nuevo saldo es: " . $array ['saldo'];
        }
        else {
            return "Saldo insuficiente. Su saldo actual es: " . $array['saldo'];
        }
    } else {
        return "La cantidad a retirar debe ser mayor a cero";
    }
}
?>