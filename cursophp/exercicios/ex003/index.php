<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x = hexadecimal;  0b = binário;  0 = Octal;
        // $num = 0x1A;
        // echo "O valor da variável é $num";

        // Usando a funcão var_dump
        // $n = "Lucas"; 
        // $i = 19;
        // $p = 74.5; 
        // $c = false;
        // var_dump($n, $i, $p, $c);
        // Vai imprimir o seguinte: string(5) "Lucas" int(19) float(74.5) bool(false)

        // $num = (int) 3e2; //3 x 10 ao quadrado (int)->coerção
        // echo "O valor é $num";
        // var_dump($num); 

        // $num = (float) "950"; // Inicialmente era uma string, mas eu forcei e agora é float. 
        // var_dump($num);

        // $casado = true;
        // var_dump($casado); // Vai aparecer bool(true) normal. 
        // print "O valor para casado é $casado"; // Agora quando pedir para imprimir: true -> 1 ; false -> vazio. 

        // Tipo primitivo composto: array 
        //$vet = [6, 2.5, "Maria", 3, false];
        //echo "O vetor é $vet"; // Não existe conversão de array para string 
        //var_dump($vet); // vai imprimir o seguinte: array(5) { [0]=> int(6) [1]=> float(2.5) [2]=> string(5) "Maria" [3]=> int(3) [4]=> bool(false) }
                        // array de 5 posições: 0 1 2 3 4 e os valores de cada posição. 

        // Testando objetos em PHP
        // class Pessoa {
        //     private string $nome; 
        // }

        // $p = new Pessoa;
        // var_dump($p); 
    ?>
</body>
</html>