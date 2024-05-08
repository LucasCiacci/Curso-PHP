<!--Sorteador de Números-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>
            <?php
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);
                echo "Gerando um número aleatório entre $min e $max...";
                echo "<br>O valor gerado foi <strong>$num</strong>";
            ?>
        </p>
        <button onclick="javascript:history.go()">Gerar outro</button> 
    </main>
</body>
</html>




<!--RESPOSTA DO PROFESSOR-->


<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com número aleatórios</h1>
        <p>
            <?php
                // $min = 0;
                // $max = 100;
                // $num = mt_rand($min, $max);
                // echo "Gerando um número aleátório entre $min e $max...";
                // echo "<br>O valor gerado foi <strong>$num</strong>";
            ?>
        </p>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html> -->

