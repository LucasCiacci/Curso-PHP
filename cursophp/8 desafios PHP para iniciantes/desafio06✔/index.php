<!--Analisando uma divisão-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $dividendo = $_GET["dividendo"] ?? 0;
        $divisor = $_GET["divisor"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="iddividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="idivisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <p>
            <?php 
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;
                echo "<ul>";
                print "<li>O valor do dividendo é $dividendo</li>";
                print "<li>O valor do divisor é $divisor</li>";
                echo "<li>O resultado é $quociente</li>"; 
                echo "<li>O resto é $resto</li>"; 
                echo "</ul>";
            ?>
        </p>
    </section>
</body>
</html>


