<?php
function validaCPF($cpf){
    $cpf = preg_replace('/\D/','',$cpf);

    if (strlen($cpf) != 11 || preg_match('/^(\d)\1{10}$/', $cpf)) {
        return false;
    }

    for ($i = 9; $i <11 ; $i++){
        $d = 0;
        for($j=0; $j<$i; $j++){
            $d += $cpf[$j] * (($i + 1) - $j);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$i] != $d){
            return false;
        }
    }
    return true;
}
?>