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
                print "O valor do dividendo é $dividendo<br>";
                print "O valor do divisor é $divisor<br>";
                echo "O resultado é $quociente<br>"; 
                echo "O resto é $resto"; 
            ?>
        </p>
    </section>
</body>
</html>


