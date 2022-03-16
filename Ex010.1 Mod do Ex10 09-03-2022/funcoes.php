<?php
    //Data de finalização: 15/03/2022
    /*Realização de 3 funções para: verificar se $num é par ou impar;
    verificar $num se é positivo ou negativo ou nulo;
    apresentar o quadrado de $num*/



    //função de retornar se o número é par ou impar
    function verifica_Par($val){
        if($val % 2 == 0){
            $resp = "\nO valor ".$val." é par!\n";
            return $resp;
        }
        else{
            $resp = "\nO valor ".$val." é impar!\n";
            return $resp;
        }
    }
    
    //função de identificar se é positivo, negativo ou 0
    function verifica_Positivo($val){
        if($val == 0){
            $resp = "O valor ".$val." é zero!";
            return $resp;
        }
        elseif($val > 0){
            $resp = "O valor ".$val." é positivo!";
            return $resp;
        }
            else{
                $resp = "O valor ".$val." é negativo!";
                return $resp;
            }
    }
    
    //função de calcurar o quadrado do número informado
    function Quadrado($val){
        $square = $val * $val;
        $resp = "\nO quadrado de ".$val." é ".$square."!";
        return $resp;
    }
    
?>