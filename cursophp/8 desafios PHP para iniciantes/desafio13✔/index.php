<!--Caixa Eletrônico-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET["valor"] ?? 0;
        $padrao = numfmt_create('PT_BR', NumberFormatter::CURRENCY);
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="idvalor" step="5" value="<?= $valor; ?>">
            
            <h6>*Notas disponíveis: R$100, R$50, R$10 e R$5</h6> 

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?= numfmt_format_currency($padrao, $valor, "BRL"); ?> realizado</h2>
        <?php 
            echo "O caixa eletrônico vai te entregar as seguintes notas:";
            $cem = ($valor / 100);
            $restoCem = $valor % 100;  
            $cinquenta = ($restoCem / 50);
            $restoCinquenta = $restoCem % 50;
            $dez = ($restoCinquenta / 10); 
            $restoDez = $restoCinquenta % 10; 
            $cinco = ($restoDez / 5);
             

            print "<ul><li> <img src='imagens/100-reais.jpg' alt='nota de 100' class='nota'> x" . (int) $cem . " </li></ul>";
            print "<ul><li> <img src='imagens/50-reais.jpg' alt='nota de 50' class='nota'> x" . (int) $cinquenta  . " </li></ul>";
            print "<ul><li> <img src='imagens/10-reais.jpg' alt='nota de 10' class='nota'> x" . (int) $dez . " </li></ul>";
            print "<ul><li> <img src='imagens/5-reais.jpg' alt='nota de 5' class='nota'> x" . (int) $cinco . " </li></ul>";
        ?>
    </section>
</body>
</html>
        

