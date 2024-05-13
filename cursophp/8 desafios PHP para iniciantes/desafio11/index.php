<!--Reajustando Preços-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustando Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET["valor"] ?? 0; 
        $porcent = $_GET["porcent"] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor">Preço do Produto (R$)</label>
            <input type="number" name="valor" id="idvalor" step="0.01" value="<?= $valor ?>">

            <label for="porcent">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="porcent" id="idporcent" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $porcent ?>">

            <input type="submit" value="Reajustar">
            
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>
            <?php
                $aumento = ($valor * $porcent) / 100;
                $resultado = $valor + $aumento;
                echo "O produto que custava R$" . number_format($valor, 2, ",", ".") . ", com <strong>$porcent% de aumento</strong> vai passar a custar <strong>R$" . number_format($resultado, 2, ",", ".") . " </strong>a partir de agora."
            ?>
        </p>
    </section>
    
    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = idporcent.value; 
        }
    </script>
</body>
</html>