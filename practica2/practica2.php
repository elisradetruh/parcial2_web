<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>practica2. PHP dentro de HTML</title>
</head>
<body>
	<?php
	$numero = rand(1,4);
	$color = ["#bdffel", "#4336f4", "#142e45","#6897bb"];
	$numcolor = rand(0,3);

	echo "Numero generado =" . $numero . "<br>";
	echo "<div style='color:".$color[$numcolor]."'>color generado</div>" ;

		if($numero == 1){
	?>
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina</h1>
	<?php } elseif($numero == 2){?>
		<h2  style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina</h2>

	<?php } elseif($numero ==3) { ?>

		<h3  style="color: <?php echo $color[$numcolor]; ?>">titulo 3 de la pagina</h3>

	<?php } else {?>

		<h4  style="color: <?php echo $color[$numcolor]; ?>">Titulo 4 de la pagina</h4>
	<?php } ?>


	<H4>israel Josue Rodriguez Rojo </H4>
	
	
</body>
</html>