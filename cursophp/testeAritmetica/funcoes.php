<?php 

    // //Função abs() //Serve para mostrar o valor absoluto de um número.
    // $absoluto = abs(50);
    // echo "$absoluto" ; //Resultado = 50
    
    // $absoluto2 = abs(-2000); 
    // echo "$absoluto2" ; //R = 2000

    
    // //Função base_convert() //Serve para converter um nº em diferentes bases numéricas. 
    // $base = base_convert(7, 10, 2); //O 1º número (7) -> nº a ser convertido.
    // echo "$base";                   //O 2º -> base numérica do 1º número.
    // //R = 111                       //O 3º -> para qual base converter.

    // $base2 = base_convert(254, 10, 16);
    // echo "$base2"; //R = FE -> 0xFE 

    
    // //Funções de arredondamento:
    // //ceil() [teto] arredonda para cima
    // //floor() [chão] arredonda para baixo
    // //round() [arredondar] aritmético padrão
    // $arredondar = ceil(5.4);
    // echo "$arredondar"; //R = 6
    // $arredondar2 = floor(5.6); 
    // echo "$arredondar2"; //R = 5
    // //O round() faz um arredondamento padrão, ou seja, arredonda para o mais próximo. 


    // //Função hypot() -> calcula hipotenusa (fornecer os catetos)
    // $hipotenusa = hypot(3, 4);
    // echo "$hipotenusa"; //R = 5


    // //Função intdiv() -> calcula o valor inteiro de uma divisão. 
    // $inteiro = intdiv(5, 2);
    // echo "$inteiro"; //R = 2 


    // //Funções min() e max() -> mostram o valor mínimo e máximo de uma sequência. 
    // $minimo = min(2, 5, 1, 7, 12, 9);
    // echo "$minimo"; //R = 1
    
    // $maximo = max(2, 5, 1, 7, 12, 9);
    // echo "$maximo"; //R = 12 


    // //Função pi() -> obtem-se o valor de pi.
    // $valorDePi = pi(); // Pode se usar uma função. 
    // echo "$valorDePi"; //R = 3.14...
    // // ou 
    // $valor_de_pi = M_PI; // Pode se usar uma constante ja declarada no PHP. 
    // echo "$valor_de_pi"; //R = 3.14... 


    // //Função pow() -> serve para criar uma potência. (Em versões antigas ñ existia **) 
    // $potencia = pow(5, 2);
    // echo "$potencia"; //R = 25 


    //Funções sin(), cos(), tan() -> seno, cosseno, tangente. 


    // //Função sqrt() -> calcula raiz quadrada de um nº.
    // $raiz = sqrt(9);
    // echo "$raiz"; //R = 3
    // // essa função ñ é tão eficiente, pois ñ existe funções para calcular outras raízes. 
    // // então faça:
    // $raiz_quadrada = 9 ** (1/2);
    // echo "$raiz_quadrada"; //R = 3 
    // // Se eu quiser raiz cúbica, por exemplo. 
    // $raiz_cubica = 27 ** (1/3);
    // echo "$raiz_cubica"; //R = 3