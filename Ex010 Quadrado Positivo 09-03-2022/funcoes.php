<?php
    //Data de finalização: 15/03/2022
    /*Realização de 3 funções para: verificar se $num é par ou impar;
    verificar $num se é positivo ou negativo ou nulo;
    apresentar o quadrado de $num*/


    //solicitação do número, validação se o valor é número ou não
    do{
        $num = readline("Informe um número: ");
        if(is_numeric($num)==FALSE){
            while(is_numeric($num)==FALSE)
                $num = readline("Informe um número: ");
        }
        echo verifica_Par($num);
        echo verifica_Positivo($num);
        echo Quadrado($num)."\n";
        
        //solicitação de resposta do usuário se vai querer realizar mais uma vez
        $stop = readline("Quer realiar mais uma operação (S/N)? ");
        if($stop != "S" && $stop != "s" && $stop != "N" && $stop != "n")
            while($stop != "S" && $stop != "s" && $stop != "N" && $stop != "n")
                $stop = readline("\nQuer realizar mais uma operação (S/N)? ");
        echo chr(27).chr(91).'H'.chr(27).chr(91).'J';
    }while($stop == "S" or $stop == "s");
    
    echo "Obrigado, até mais! :)";
    
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