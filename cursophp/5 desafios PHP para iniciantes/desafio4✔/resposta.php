<!--Não consegui fazer! Apenas completei com o código passado na aula-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de dólar consultando API</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas v2.0</h1>
    </header>
    <main>
        <?php 
        // Parte que eu não consegui fazer
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true); 
        //var_dump($dados); 

        $cotação = $dados["value"][0]["cotacaoCompra"]; 
        
        $real = $_GET["real"];
        $dolar = $real / $cotação; 
        $padrao = numfmt_create('pt_BR', NumberFormatter::CURRENCY); 
        
        echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "*</strong>";
        
        echo '<p>*Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/"><strong>Banco Central do Brasil</strong></a></p>'
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>

