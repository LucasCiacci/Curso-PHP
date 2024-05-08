<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
	<body>
		<?php 
			$cotação = 5.12;
			$real = 10000;
			$dolar = $real / $cotação;
	
			$padrão = numfmt_create('pt_BR', NumberFormatter::CURRENCY);
			echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD"); 
		?>
		
	</body>
</html>
<?php

	