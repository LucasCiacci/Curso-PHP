<!--Calculadora de Tempo-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $total = $_GET["total"] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="total">Qual o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?= $total ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>
            <?php 
                echo "Analisando o valor que você digitou, <strong>" . number_format($total, 0, ",", ".") . " segundos</strong> equivalem a um total de:";
                // Considere: 
                // 1 semana = 604800 seg
                // 1 dia = 86400 seg
                // 1 hora = 3600 seg
                // 1 minuto = 60 seg

                $semanas = ($total / 604800); 
                $restoSemana = $total % 604800; 
                $dias = ($restoSemana / 86400);
                $restoDia = $restoSemana % 86400; 
                $horas = ($restoDia / 3600);
                $restoHora = $restoDia % 3600; 
                $minutos = ($restoHora / 60);
                $restoMinuto = $restoHora % 60;
                $segundos = $restoMinuto; 

                print "<ul><li>" . (int) $semanas . " semanas</li></ul>";
                print "<ul><li>" . (int) $dias  . " dias</li></ul>";
                print "<ul><li>" . (int) $horas . " horas</li></ul>";
                print "<ul><li>" . (int) $minutos . " minutos</li></ul>";
                print "<ul><li>" . (int) $segundos . " segundos</li></ul>";
            ?>
        </p>
    </section>
</body>
</html>
                