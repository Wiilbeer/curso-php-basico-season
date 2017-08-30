<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //operadores aritmeticos
        $valor1 = 15;
        $valor2 = 7;
        
        //soma
        $soma = $valor1 + $valor2;
        echo "O valor da soma dos números $valor1 e $valor2 é $soma <br>";
        
        //subtracao
        $subtracao = $valor1 - $valor2;
        echo "O valor da subtração dos números $valor1 e $valor2 é $subtracao <br>";
        
        //multiplicao
        $multiplicacao = $valor1 * $valor2;
        echo "O valor da multiplicação dos números $valor1 e $valor2 é $multiplicacao <br>";
        
        //divisao
        $divisao = $valor1 / $valor2;
        echo "O valor da divisão dos números $valor1 e $valor2 é $divisao <br>";
                
        //modulo
        $modulo = $valor1 % $valor2;
        echo "O valor do módulo dos números $valor1 e $valor2 é $modulo <br>";
        
        //potenciacao
        $aooPotencia = $valor1 ** $valor2;
        echo "O valor da exponencição dos números $valor1 e $valor2 é $aooPotencia <br>";
        
        /*
         * Precedência
         */
        // * / % + -
        
        //media
        $media = (10 + 4) / 2;
        echo "O valor da média é $media <br><br>";
        
        /*
         * Funções Matemáticas
         */
        
        //valor absoluto
        $valorAbsoluto = -6;
        echo "O valor absoluto de $valorAbsoluto é " . abs($valorAbsoluto) . "<br>";
        
        //pontenciacao
        $valor1 = 4;
        $valor2 = 3;        
        $potenciacao = pow($valor1, $valor2);
        echo "A potência de $valor1 <sup>$valor2</sup> é $potenciacao" . "<br>";
        
        //raiz quadrada
        $valor = 4;
        $raiz = sqrt($valor);
        echo "O valor da raiz quadrada do número $valor é $raiz <br>";
        
        //round
        $valor = 4.6;
        echo "O arredondamento de $valor é " . round($valor) . "<br>";
        
        //intval
        $valor = 4.4;
        echo "O valor inteiro de 4.4 é " . intval($valor) . "<br>"; 
        
        //number format
        $valor = 40000000;
        echo "R$ " . number_format($valor,2, ",", ".") . "<br>";
        ?>
    </body>
</html>
