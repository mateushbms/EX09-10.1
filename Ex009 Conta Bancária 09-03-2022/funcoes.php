<?php

    //Função de solicitação de dados e chamada das funções conforme escolha do usuário.
    function movimentação(){
        $conta = readline("Informe o tipo de conta, e é Corrente (C) ou Poupança (P): ");
        //Validação de valores do usuário, para aceitar apenas um range de caracteres
        if($conta != "C" and $conta != "c" and $conta != "P" and $conta != "p"){
            while($conta != "C" and $conta != "c" and $conta != "P" and $conta != "p")
                $conta = readline("Informe se o tipo de conta é Corrente (C) ou Poupança (P): ");
        }
        
        $movimentação = readline("Informe o tipo de movimentação da conta. Se é Saque (S) ou Depósito (D): ");
        if($movimentação != "S" and $movimentação != "s" and $movimentação != "D" and $movimentação != "d"){
            //Validação de valores de usuário, para aceitar apenas um range de caracteres
            while($movimentação != "S" and $movimentação != "s" and $movimentação != "D" and $movimentação != "d")
                $movimentação = readline ("Informe se o tipo de movimentação é Saque (S) ou Depósito (D): ");
        }
        
        //Geração de valores pseudoaleatórios para os valores de saldo na conta corrente e poupança
        $saldo_corrente = rand(-50, 150);
        $saldo_poupanca = rand(-50, 150);
        
        echo "O saldo em sua conta corrente é de R$".$saldo_corrente.".\n";
        echo "O saldo em sua conta poupança é de R$".$saldo_poupanca.".\n";
        
        $valor = readline("Informe qual o valor da operação: ");
        if(is_numeric($valor)){
            
        }
            else{
                //Verificação de que o valor da operação é um valor numérico
                while(is_numeric($valor)==FALSE){
                    $valor = readline("Informe um valor numérico para ser o valor da operação: ");
                }
        }
        
        //Chamada da função de atualização de saldo da conta corrente ou poupança
        if($conta == "C" or $conta == "c")
            saldocorrente($movimentação, $valor, $saldo_corrente);
        else
            saldopoupanca($movimentação, $valor, $saldo_poupanca);
    }
    
    //Função de atualização de saldo na conta corrente
    function saldocorrente($mov, $val, $sal_cor){
        if($mov == "D" or $mov == "d"){
            $aux = $sal_cor;
            $sal_cor = $sal_cor + $val;
            echo "\nConta Corrente\nSaldo: R$".$sal_cor."\nSaldo antes da operação: R$".$aux."\n\n";
            escolha();
        }
        else{
            //Verificação se o saldo é maior que 0, para realizar ou não o saque
            if($sal_cor > 0){
                $aux = $sal_cor;
                $sal_cor = $sal_cor - $val;
                echo "\nConta Corrente\nSaldo: R$".$sal_cor."\nSaldo antes da operação: R$".$aux."\n\n";
                escolha();
            }
            else{
                echo "\nSaldo da conta corrente: R$".$sal_cor.". Não é possível realizar saque.\n\n";
                escolha();
            }
        }
    }
    
    //Função de atualização de saldo na conta poupança
    function saldopoupanca($mov, $val, $sal_pou){
        if($mov == "D" or $mov == "d"){
            $aux = $sal_pou;
            $sal_pou = $sal_pou + $val;
            echo "\nConta Poupança\nSaldo: R$".$sal_pou."\nSaldo antes da operação: R$".$aux."\n\n";
            escolha();
        }
        else
        //Verificar se o saldo da conta é maior que 0, para continuar ou não a realizar o saque
            if($sal_pou > 0){
                $aux = $sal_pou;
                $sal_pou = $sal_pou - $val;
                echo "\nConta Poupança\nSaldo: R$".$sal_pou."\nSaldo antes da operação: R$$".$aux."\n\n";
                escolha();
            }
            else{
                echo "\nSaldo da conta corrente: R$".$sal_pou.". Não é possível realizar saque.\n\n";
                escolha();
            }
    }
    
    //Função para o e=usuário escolher se quer realizar uma nova movimentação em uma conta nova ou terminar a execução do algoritmo
    function escolha(){
        $escolha = readline("Quer tentar realizar uma nova operação, sim (S) ou não (N)? ");
        //Verificação para aceitar apenas o range de caracteres aceitáveis para a escolha de terminar o programa
            if($escolha != "S" and $escolha != "s" and $escolha != "N" and $escolha != "n"){
                while($escolha != "S" and $escolha != "s" and $escolha != "N" and $escolha != "n")
                    $escolha = readline("Quer tentar realizar uma nova operação, sim (S) ou não (N)? ");
            }
            else{
                if($escolha == "S" or $escolha == "s"){
                    system("clear");
                    movimentação();
                }
                else
                    echo ("\n\nObrigado pela confiança no banco!\nEsperamos te ver novamente!");
            }
    }
    
    //Chamada da função principal para começar o algoritmo
    movimentação();
    
?>