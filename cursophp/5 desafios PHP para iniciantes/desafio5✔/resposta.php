<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de um Número Real</h1>
    </header>
    <main>
        <?php 
            $numeroReal = $_GET["numeroreal"];
            $parteInteira = intdiv($numeroReal, 1); 
            $parteFracionaria = fmod($numeroReal, 1); 
            echo "<p>Analisando o número <strong>$numeroReal</strong> informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é <strong>$parteInteira</strong></li></ul>";
            echo "<ul><li>A parte fracionária do número é <strong>$parteFracionaria</strong></li></ul>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>



<!--RESPOSTA DO PROFESSOR-->

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de um Número Real</h1>
        <?php 
            // $numeroReal = $_POST["num"];
            // $parteInteira = (int) $numeroReal; 
            // $parteFracionaria = $numeroReal - $parteInteira; 
            // echo "<p>Analisando o número <strong>$numeroReal</strong> informado pelo usuário:</p>";
            // echo "<ul><li>A parte inteira do número é <strong>$parteInteira</strong></li></ul>";
            // echo "<ul><li>A parte fracionária do número é <strong>$parteFracionaria</strong></li></ul>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html> -->



