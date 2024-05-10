<!--Médias Aritméticas-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        $v2 = $_GET["v2"] ?? 0;
        $p2 = $_GET["p2"] ?? 1;
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="idv1" value="<?= $v1; ?>">
    
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="idp1" value="<?= $p1; ?>">
            
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="idv2" value="<?= $v2; ?>">
    
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="idp2" value="<?= $p2; ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    
    <section>
    <h2>Cálculo das Médias</h2>
        <p>
            <?php 
                echo "Analisando os valores $v1 e $v2:";
                $media_aritmetica_simples = ($v1 + $v2) / 2;
                $media_aritmetica_ponderada = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2);
                print "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a " . number_format($media_aritmetica_simples, 2, ",", ".") . ".</li></ul>";
                print "<ul><li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a " . number_format($media_aritmetica_ponderada, 2, ",", ".") . ".</li></ul>";
            ?>
        </p>
    </section>
        
</body>
</html>