<?php

	require_once("funcoes.php");
	
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
	
?>