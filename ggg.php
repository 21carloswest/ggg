<?php //include 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action = 'ggg.php' method = 'POST'>
        Gasto:<input type = "number" name =  "gasto"></input>
        Ganho:<input type = "number" name =  "ganho"></input>
        
        <input type = "submit"></input>
</form>
<?php 
$gasto = @$_POST["gasto"];
$ganho = @$_POST["ganho"];
$guardo = @$_POST["guardo"];
echo "Seu balanço mensal é " . $ganho - $gasto . ", o recomendado é poupar " . $ganho/10 . "  (10% do valor ganho.)"  
?> 
</body>
</html>