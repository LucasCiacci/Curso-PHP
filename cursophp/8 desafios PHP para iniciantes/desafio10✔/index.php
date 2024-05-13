<!--Cálculo de Idade-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ano1 = $_GET["ano1"] ?? 2000;
        $ano2 = $_GET["ano2"] ?? date("Y");
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="ano1">Em que ano você nasceu?</label>
            <input type="number" name="ano1" id="idano1" value="<?= $ano1; ?>" max="<?= date("Y", strtotime("-1 year"));?>">
            
            <label for="ano2">Quer saber a sua idade em que ano? 
                (atualmente estamos em <strong><?= date("Y");?></strong>)
            </label>
            <input type="number" name="ano2" id="idano2" value="<?= $ano2; ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p><?= "Quem nasceu em $ano1 vai ter <strong>" . $ano2 - $ano1 . " anos</strong> em $ano2!"; ?></p>
            
        
    </section>
</body>
</html>