<?php
    function agruparNumeros($numeros) {
        $grupos = array();
        $inicio = $numeros[0];
        $fin = $numeros[0];
        
        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] == $fin + 1) {
                $fin = $numeros[$i];
            } else {
                if ($inicio != $fin) {
                    $grupos[] = $inicio . '-' . $fin;
                } else {
                    $grupos[] = $inicio;
                }
                
                $inicio = $numeros[$i];
                $fin = $numeros[$i];
            }
        }
        
        if ($inicio != $fin) {
            $grupos[] = $inicio . '-' . $fin;
        } else {
            $grupos[] = $inicio;
        }
        
        return implode(',', $grupos);
    }

    $numeros = array(1, 2, 3, 5, 6, 8, 9, 10, 12, 15);
    $resultado = agruparNumeros($numeros);
    echo $resultado;
?>