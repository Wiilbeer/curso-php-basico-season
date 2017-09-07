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
            <form action="string.php" method="POST">
                
                <labe>Nome:</label>
                    <input type="text" name="nome" class="form-control">
                
                <br>
                
                
                
                <select name="linguagem[]" class="form-control" multiple="">
                    <option value="Java">Java</option>
                    <option value="PHP">PHP</option>
                    <option value="Python">Python</option>
                </select>      
                
                <br>
                
                <label>Sabe PHP?</label>
                <br>
                
                <label>Sim:</label>                
                <input type="radio" name="conhecimento" value="1" checked="">
                <label>Não:</label>                
                <input type="radio" name="conhecimento" value="0">
                
                <br>
                <br>
               
                <label>Quais linguagens eu sei</label>
                
                <br>
                
                <label>JAVA</label>
                <input type="checkbox" name="php[]" value="java"</label>
                
                <br>
                
                <label>PHP</label>
                <input type="checkbox" name="php[]" value="php"</label>
                
                <br>
                
                <label>Python</label>
                <input type="checkbox" name="php[]" value="python"</label>
                
                <br>
                <br>
                <br>
                
                <labe>Rua:</label>
                    <input type="text" name="endereco[rua]" class="form-control">
                
                <br>
                
                <labe>Número:</label>
                    <input type="text" name="endereco[numero]" class="form-control">
                
                <br>
                
                <labe>CEP:</label>
                    <input type="text" name="endereco[cep]" class="form-control">
                
                <br>
                    <input type="submit" class="btn btn-danger">
            </form>
             
        </div>
        
    </body>
</html>
