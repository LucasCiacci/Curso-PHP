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
        $real = $_GET["real"] ?? 0; 
        
        $porcent = $_GET["porcent"] ?? 0;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="real">Preço do Produto (R$)</label>
            <input type="number" name="real" id="idreal" step="0.01">

            <label for="">Qual será o percentual de ajuste? ()</label>
            <input type="range" name="" id="">

            <input type="submit" value="Reajustar">
            
        </form>
    </main>
</body>
</html>