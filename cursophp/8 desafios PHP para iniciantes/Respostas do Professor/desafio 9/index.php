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
        $v1 = $_GET["v1"] ?? '';
        $p1 = $_GET["p1"] ?? '';
        $v2 = $_GET["v2"] ?? '';
        $p2 = $_GET["p2"] ?? '';
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="idv1" value="<?= $v1; ?>" required>
    
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="idp1" value="<?= $p1; ?>" min="1" required>
            
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="idv2" value="<?= $v2; ?>" required>
    
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="idp2" value="<?= $p2; ?>" min="1" required>
            
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <?php 
            $ma = ($v1 + $v2) / 2;
            $mp = ($v1 * $p1 + $v2 * $p2) / ($p1 + $p2); 
        ?>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?= $v1;?> e <?= $v2; ?> </p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($ma, 2, ",", "."); ?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $p1 ?> e <?= $p2; ?> é igual a <?= number_format($mp, 2, ",", "."); ?>.</li>
        </ul>
    </section>
</body>
</html>
            
