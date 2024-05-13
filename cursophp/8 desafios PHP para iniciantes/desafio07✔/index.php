<!--Salário Mínimo-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET["salario"] ?? 0; 
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="idsalario" value="<?= $salario; ?>" step="0.01">
            <p>
                <?php 
                    $padrao = numfmt_create('PT_BR', NumberFormatter::CURRENCY);
                    $minimo = 1380;
                    echo "Considerando o salário mínimo de <strong>" . numfmt_format_currency($padrao, $minimo, 'BRL') . "</strong>";
                ?>
            </p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>
            <?php
                $quantidade = (int)($salario / $minimo) ?? 0;
                $resto = $salario % $minimo;
                echo "Quem recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha <strong>$quantidade salários mínimos</strong> + " . numfmt_format_currency($padrao, $resto, "BRL") . ".";  
            ?>
        </p>
    </section>
</body>
</html>