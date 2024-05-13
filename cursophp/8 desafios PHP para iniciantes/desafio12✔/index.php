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
            <label for="total">Qual é o total de segundos?</label>
            <input type="number" name="total" id="total" value="<?= $total ?>" min="0" step="1" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>
            <?php 
                echo "Analisando o valor que você digitou, <strong>" . number_format($total, 0, ",", ".") . " segundos</strong> equivalem a um total de:";
                // Considere: 
                // 1 ano = 31.104.000 seg 
                // 1 mês = 2.592.000 seg
                // 1 semana = 604.800 seg
                // 1 dia = 86.400 seg
                // 1 hora = 3.600 seg
                // 1 minuto = 60 seg

                //Total de anos
                $ano = ($total / 31_104_000);
                
                //Total de meses
                $restoAno = $total % 31_104_000;
                $mes = ($restoAno / 2_592_000);
                
                //Total de semanas
                $restoMes = $restoAno % 2_592_000; 
                $semanas = ($restoMes / 604_800); 
                
                //Total de dias
                $restoSemana = $restoMes % 604_800; 
                $dias = ($restoSemana / 86_400);
                
                //Total de horas
                $restoDia = $restoSemana % 86_400; 
                $horas = ($restoDia / 3_600);
                
                //Total de minutos
                $restoHora = $restoDia % 3_600; 
                $minutos = ($restoHora / 60);
                
                //Total de segundos
                $restoMinuto = $restoHora % 60;
                $segundos = $restoMinuto; 

                print "<ul><li>" . (int) $ano . " anos</li></ul>";
                print "<ul><li>" . (int) $mes . " meses</li></ul>";
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
                