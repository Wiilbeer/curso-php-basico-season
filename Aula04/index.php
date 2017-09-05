<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validação de Dados</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        
        <div class="container">
            
           <h1>Validação de Dados</h1>
                        
           <?php include('partials/notice.php'); ?>
            <form action="exemplos/string.php" method="GET">
                
                <labe>Nome:</label>
                    <input type="text" name="nome" class="form-control">
                
                <br>
                
                <labe>Idade:</label>
                    <input type="number" name="idade" class="form-control">
                
                <br>
                
                <labe>Salário:</label>
                    <input type="number" step="0.01" name="salario" class="form-control">
                
                <br>  
                
                <label>Descrição</label>
                    <textarea rows="2" name="descricao" class="form-control"></textarea>
                
                <br>
                
                    <input type="submit" class="btn btn-danger">
            </form>
             
        </div>
        
    </body>
</html>
