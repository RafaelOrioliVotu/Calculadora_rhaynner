<?php

$N1A = &_POST['N1A']
$N2A = &_POST['N2A']
$OPER = &_POST['OPER']

$resultado = 0;
echo "N1A = : " . $N1A;
echo "N2A = : " . $N2A;
echo "OPER = : " . $OPER;

switch ($OPER) {
    case 'soma':
        $resultado = $N1A + $N2A;
        break;

    case 'sub':
        $resultado = $N1A - $N2A;
        break;

    case 'mult':
        $resultado = $N1A * $N2A;
        break;

    case 'div':
        if ($N2A !- 0 ) {
            $resultado = $N1A / $N2A; 
        } else {
            $resultado = "Erro: divisão por zero";
        }
        break;

    default:
        $resultado = "Operação Inválida";
}
?>