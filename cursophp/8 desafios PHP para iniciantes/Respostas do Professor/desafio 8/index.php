<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET["num"] ?? 1;

    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="idnum" value="<?= $numero; ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $raiz_quadrada = $numero ** (1/2);
            $raiz_cubica = $numero ** (1/3); 

            echo "<p>Analisando o <strong> número $numero</strong>, temos:";
            echo "<ul><li>A sua raiz quadrada é <strong>" . number_format($raiz_quadrada, 2, ",", ".") . "</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>" . number_format($raiz_cubica, 2, ",", ".") . "</strong></li></ul></p>";
        ?>
    </section>
</body>
</html>
