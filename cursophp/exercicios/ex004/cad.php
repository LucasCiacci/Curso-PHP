<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header> 
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET); // No form o method deve ser get
            // var_dump($_POST); // No form o method deve ser post 
            // var_dump($_REQUEST); // Qualque method -> $_REQUEST junção de $_GET $_POST $_REQUEST

            $nome = $_GET["nome"] ??  "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido"; 
            echo "É um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!"; 
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
    </main>
</body>
</html>