<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //tipos elementares
        //interger
        $tipoVariavel = 11;
        
        //float
        $tipoVariavel = 1.1;
        
        //string
        $tipoVariavel = 'cadeia de caracteres';
        
        //boolean
        $tipoVariavel = true;
        
        
        //tipos compostos
        //array
        $tipoVariavel = array(1, 2, 3);
        $tipoVariavel = [1,2];
        
        //objeto
        $tipoVariavel = new DateTime();
        
        //tipos especiais
        //resource
        $tipoVariavel = fopen("index.php", "r");
        
        //nulo
        $tipoVariavel = NULL;
        
        var_dump($tipoVariavel);
        
        echo '<br><br>';
        
        $integer = 12;
        echo "A variavel $integer é do tipo " . gettype($integer) . "<br>"; 
                
        $float = 12.12;
        echo "A variavel $float é do tipo " . gettype($float) . "<br>";  
           
        $string = 'texto';
        echo "A variavel $string é do tipo " . gettype($string) . "<br>";  
        
        $boolean = false;
        echo "A variavel $boolean é do tipo " . gettype($boolean) . "<br>";
        
        $array = array();
        echo "A variavel array é do tipo " . gettype($array) . "<br>";
        
        $object = new DateTime();
        echo "A variavel object é do tipo " . gettype($object) . "<br>";
        
        $resource = fopen("index.php", "r");
        echo "A variavel $resource é do tipo " . gettype($resource) . "<br>";
        
        $null = null;
        echo "A variavel $null é do tipo " . gettype($null) . "<br>";
          
        $soma = '1' + 2;
        echo $soma;
        
        ?>
    </body>
</html>
