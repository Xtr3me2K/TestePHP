<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Este documento é tudo, menos uma aula de PHP, sim ou não?</title>
</head>
<body>
    <?php

        //Declaração de variáveis
        $hora = date("H");
    
        if($hora <12) {
            echo "<p>Bom dia a todos!<p>";
        }else if ($hora < 18) {
          echo "<p>Boa tarde a todos!</p>";
        } else {
                echo "<p>Boa noite a todos!</p>";
        }
    ?>
</body>
</html>