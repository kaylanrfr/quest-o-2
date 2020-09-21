<?php
$str="subinoonibus";//string teste
function palindromo($str)
{
    if ($str == strrev($str)) { //verifica se a string reversa é igual a string normal
        return "String : '" . $str . "' = True"; //rfetorna verdadeiro caso seja logicamente verdadeiro
    };
    return "String '" . $str . "' = False"; //retorna falso caso não tenha sido retornado verdadeiro
};

var_dump(palindromo($str));//display basico para teste
