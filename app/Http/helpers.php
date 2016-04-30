<?php

/**
 * Helper para formatar o número no padrão brasileiro de moeda
 * @param double $valor
 * @return double
 */
function formataNumero($valor = 0.00){
    return number_format($valor, 2, ",", ".");
}