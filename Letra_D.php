<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio CPF</title>
    
</head>
<body>
    <h1>Cpf</h1>
    <?php
    $n=1;
    function formata_cpf($n){
    $cpf= str_pad($n, 11, 0, STR_PAD_LEFT);
    $cpfarray = str_split($cpf,3);
    echo "$cpfarray[0].$cpfarray[1].$cpfarray[2]-$cpfarray[3]";
    }
    formata_cpf(8541954)
    ?>
</body>
</html>