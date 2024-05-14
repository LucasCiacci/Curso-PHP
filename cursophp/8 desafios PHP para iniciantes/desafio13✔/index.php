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
            <input type="number" name="valor" id="idvalor" step="1" value="<?= $valor; ?>">
            
            <h6>*Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2 e moeda de R$1</h6> 

            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?= numfmt_format_currency($padrao, $valor, "BRL"); ?> realizado</h2>
        <?php 
            echo "O caixa eletrônico vai te entregar as seguintes notas:";
            
            //Total de notas de 100
            $cem = ($valor / 100);
            $restoCem = $valor % 100;  
            
            //Total de notas de 50
            $cinquenta = ($restoCem / 50);
            $restoCinquenta = $restoCem % 50;

            //Total de notas de 20
            $vinte = ($restoCinquenta / 20);
            $restoVinte = $restoCinquenta % 20;
            
            //Total de notas de 10
            $dez = ($restoVinte / 10); 
            $restoDez = $restoVinte % 10; 
            
            //Total de notas de 5
            $cinco = ($restoDez / 5);
            $restoCinco = $restoDez % 5;

            //Total de notas de 2
            $dois = ($restoCinco / 2);
            $restoDois = $restoCinco % 2;

            //Total de moedas de 1
            $um = $restoDois; 

            
            // Imprimindo as notas
            print "<ul><li> <img src='imagens/100-reais.jpg' alt='nota de 100' class='nota'> x" . (int) $cem . " </li></ul>";
            
            print "<ul><li> <img src='imagens/50-reais.jpg' alt='nota de 50' class='nota'> x" . (int) $cinquenta  . " </li></ul>";
            
            print "<ul><li><img src='imagens/20-reais.jpg' alt='nota de 20' class='nota'> x" . (int) $vinte . "</li></ul>";

            print "<ul><li> <img src='imagens/10-reais.jpg' alt='nota de 10' class='nota'> x" . (int) $dez . " </li></ul>";
            
            print "<ul><li> <img src='imagens/5-reais.jpg' alt='nota de 5' class='nota'> x" . (int) $cinco . " </li></ul>";
            
            print "<ul><li> <img src='imagens/2-reais.jpg' alt='nota de 2' class='nota'> x" . (int) $dois . " </li></ul>";
            
            print "<ul><li> <img src='imagens/1-real.jpg' alt='moeda de 1' class='nota'> x" . (int) $um . " </li></ul>";
        ?>
    </section>
</body>
</html> 