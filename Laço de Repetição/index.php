    <?php

    /*
    //Exercício 1
    $placa = "MNS2757";
    echo($placa[strlen($placa)-1]);
    switch($placa[strlen($placa)-1]){
        case 1:
        case 2:
            echo(" Seu carro não pode andar segunda-feira!");
            break;

        case 3:
        case 4:
            echo(" Seu carro não pode andar terça-feira!");
            break;

        case 5:
        case 6:
            echo(" Seu carro não pode andar quarta-feira!");
            break;

        case 7:
        case 8:
            echo(" Seu carro não pode andar quinta-feira!");
            break;

        case 9:
        case 0:
            echo(" Seu carro não pode andar sexta-feira!");
            break;
    }
    */

    /*
    //Exercício 2

    $num1 = 1000;
    $num2 = 20;
    $num3 = 21;
    
    $variaveis = array($num1, $num2, $num3);
    echo "O maior número é: ".max($variaveis);
    echo "<br> O menor número é: ".min($variaveis);
    */

    
    /*
    //Exercício 3

    $salarioAtual = 1800;
    $depto = 2;
    $resultado;

    if($depto == 1){
        $resultado = $salarioAtual * 0.15;
    }else if($depto == 2){
        if($salarioAtual < 1750){
            $resultado = $salarioAtual * 0.12;
        } else if ($salarioAtual < 2000){
            $resultado = $salarioAtual  * 0.10;
        } else if($salarioAtual < 3000){
            $resultado = $salarioAtual * 0.07;
        }else{
            $resultado = $salarioAtual * 0.05;
        }
    }

    echo("Aumento de salário:" .$resultado);
    */

    /*
    //Exercício 4

    $numero = 2;
    $expoente = 2;
    $resultado = $numero;

    for($i = 1; $i < $expoente; $i++){
        $resultado = $resultado * $numero;
    }
    echo($resultado);
    */

    /*
    //Exercício 5
    $num = 5;
    $cont = 0;
    for($i = 1; $i <= $num; $i++){
        if($num % $i == 0){
            $cont++;
        }
    }
    if($cont == 2){
        echo "O número é primo!";
    } else {
        echo "O número não é primo!";
    }
    */

    //Exercício 6
    $soma = 0;
    $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
    $multiplicacao = $numeros[0];
    for ($i = 0; $i < count($numeros); $i++) {
        if($numeros[$i] % 2 == 0){
            $multiplicacao = $numeros[$i] * $multiplicacao;
        }else{
            $soma = $soma + $numeros[$i];
        }
    }
    echo($soma);
    echo("<br>".$multiplicacao);
    ?>