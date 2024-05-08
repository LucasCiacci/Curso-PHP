<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arquivo Cad Sozinho</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Testando o cad sozinho</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET ["nome"] ?? "Sem nome";
            $sobrenome = $_GET ["sobrenome"] ?? "Desconhecido";   
            $data = $_GET ["data"] ?? "Sem data" ;
            $email = $_GET ["email"] ?? "Email indefinido" ;
            $senha = $_GET ["senha"] ?? "Senha nula" ;
            echo "Olá meu nome é <strong>$nome $sobrenome</strong> e nasci em <strong>$data</strong>. Meu email é <strong>$email</strong> e minha senha é <strong>$senha</strong>."
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>