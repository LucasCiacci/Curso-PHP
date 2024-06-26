<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Testando Formulário Retroalimentado</h1>
        <form action="testFormAlim.php" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <main>
        <p>
            <?php 
                // $nome = $_GET["nome"] ?? "<strong>desconhecido</strong>";
                // echo "O seu nome é <strong>$nome</strong>"; 
            ?>
       </p>
   </main>
</body>
</html> -->


<!--FORMA CORRETA-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nome = $_GET["nome"] ?? "desconhecido";
    ?>
    <main>
        <h1>Formulário Retroalimentado</h1>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome" value="<?= $nome ?>">
            <input type="submit" value="Enviar">
        </form>
    </main>
    <section>
        <?php 
            echo "O nome é $nome";
        ?>
    </section>
</body>
</html>
                
