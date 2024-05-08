<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $real = $_GET["real"];
            $cotação = 5.12; 
            $dolar = $real / $cotação;
            echo "<p>Seus R\$$real equivalem a <strong>US\$$dolar</strong> </p>";
            echo "<p><strong>*Cotação fixa de $cotação</strong> informada diretamente no código</p>"; 
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>



<!--RESPOSTAS DO PROFESSOR-->
<!--1ª RESOLUÇÃO-->


<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
	        // $cotação = 5.12;
            // $real = $_GET["din"];
            // $dolar = $real / $cotação;

            // echo "Seus R\$ " . number_format($real, 2, ",", ".") . "equivalem a US\$ " . number_format($dolar, 2, ",", ".");
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html> -->



<!--2ª RESOLUÇÃO-->
<!--Formatação de moedas com internacionalização-->

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            // $cotação = 5.12;
	        // $real = $_GET["din"] ?? 0;
	        // $dolar = $real / $cotação;

            // $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
	        // echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD");
        ?>
        <p><button onclick="javascript:history.go(-1)">Voltar</button></p>
    </main>
</body>
</html> -->