<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $resultado = $_GET["numero"];
            $antecessor = $resultado - 1;
            $sucessor = $resultado + 1;
            echo "O número escolhido foi <strong>$resultado</strong><br>";
            echo "<br>O seu <em>antecessor</em> é $antecessor";
            echo "<br>O seu <em>sucessor</em> é $sucessor";
        ?>
        <p><button onclick="javascript:window.location.href='index.html'">Voltar</button></p>
    </main>
</body>
</html>



<!--RESPOSTA DO PROFESSOR-->


<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                // $resultado = $_GET["num"] ?? 0;
                // $antecessor = $resultado - 1;
                // $sucessor = $resultado + 1;
                // echo "O número escolhido foi <strong>$resultado</strong>";
                // echo "<br>O seu <em>antecessor</em> é $antecessor";
                // echo "<br>O seu <em>sucessor</em> é $sucessor";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>
</html> -->