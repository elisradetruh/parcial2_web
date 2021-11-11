<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<body background="fondo2.jpg">
	<link rel="stylesheet" type="text/css" href="examen2.css">

<?php
	//
	//
	$cal = 0;

	$nombre = $_GET["nombre"];

	echo "El nombre del conocedor es: <br>" . $nombre;

	$conoces = $_GET["conoces"];
	echo "<br><br> Tu conociemiento sobre peliculas es: <br>" . $conoces;

	$robert = $_GET["robert"];
	echo "<br><br> 1.Tu respuesta es: " . $robert;
	$resp1 = "taxi driver";
	if ($robert == $resp1 ) {
		echo "<br> la respuesta es: *redobles* ,correctaaaa <br><br";
		$cal++;
	} else{
		echo "<br>Tu respuesta es: *redobles*, incorrectaaaa <br>";
	}
	$woman = $_GET["woman"];
	echo "<br><br> 2.La protagista es :<br>" . $woman;
	$resp2 = "julia roberts";
	if ($woman == $resp2) {
		echo "<br> la respuesta es *redobles* correctaaaaa";
		$cal++;
	}else{
		echo "<br> la respuesta es *redobles* incorrectaaaaa";
	}


	$cine = $_GET["cine"];
	echo "<br><br>3.empezo en :<br>" . $cine;
	$resp3 = "1985";
	if ($cine == "c") {
		echo "<br> a.1985(la respuesta es *redobles* correctaaaaa)<br> b.1986<br>c.1987";
		$cal++;
	}
	if ($cine == "d") {
		echo  "<br> a.1985<br> b.1986(la respuesta es *redobles* incorrectaaaaa)<br>c.1987";
	}
	if ($cine == "f") {
		echo "<br> a.1985<br> b.1986<br>c.1987(la respuesta es *redobles* incorrectaaaaa) ";
	}


	$filme = $_GET["filme"];
	echo "<br><br> 4.El primero en ganarlo fue: <br>" . $filme;
	$resp4 = "volver";
	if ($filme == "g") {
		echo "<br> a.la vida de otros(la respuesta es *redobles* incorrectaaaaa)<br>b.volver<br>c.parasitos";
	}
	if ($filme == "h") {
		echo "<br> a.la vida de otros<br>b.volver(la respuesta es *redobles* correctaaaaa)<br>c.parasitos";
		$cal++;
	}
	if ($filme == "i") {
		echo "<br> a.la vida de otros<br>b.volver<br>c.parasitos(la respuesta es *redobles* incorrectaaaaa)";
	}


	$oscar = $_GET["oscar"];
	echo "<br><br>5.La pelicula tiene este numero de oscares: <br> " . $oscar ;
	$resp5 = "oscar";
	if ($oscar == "j") {
		echo "<br> a.Uno(la respuesta es *redobles* correctaaaaa)<br>b.Dos<br>c.Demasiados";
		$cal++;
	}
	if ($oscar == "k") {
		echo "<br> a.Uno<br>b.Dos(la respuesta es *redobles* incorrectaaaaa)<br>c.Demasiados";
	}
	if ($oscar == "l") {
		echo "<br> a.Uno<br>b.Dos<br>c.Demasiados(la respuesta es *redobles* incorrectaaaaa)";
	}




	//$areas = $_GET["areas"];
	//echo "<br><br>Las pelis que no han ganado un oscar son : <br>";
	//if ($areas == "0") {
		//echo "<br> es incorrecto";
	//}
	//if ($areas == "1") {
	//	echo "<br>la respuesta es *redobles* correctaaaaa";

	//}

	$areas = $_GET["areas"];
	echo "<br><br>6.Las pelis que no han ganado un oscar son : ";
    if ($areas == "1") {
        echo " Cual no ha ganado <br>Respuesta correcta  <br><br> ";
        $cal++;
    } else {
        echo "<br>Cual no ha ganado<br>respuesta incorrecta  <br> ";
    }

//$peli = $_GET["peli"];

	//echo "<br><br>La Ganadora fue : <br>";
	//for ($i=0; $i < count($peli); $i++) { 
		//echo $peli[$i] . "<br>";

	//}
	$peli = $_GET["peli"];
	echo "<br><br>7. La mejor pelicula animada del 2018 es : ";
    if ($peli == "1") {
        echo " si es la mejor es por que es <br>Respuesta correcta  <br><br> ";
        $cal++;
    } else {
        echo "<br>no es la mejor por que es<br>respuesta incorrecta  <br> ";
    }
    

	//$fue = $_GET["fue"];
	//echo "<br><br>La Ganadora fue : <br>";
	//for ($i=0; $i < count($fue); $i++) { 
	//	echo $fue[$i] . "<br>";
	//}
    $fue = $_GET["fue"];
	echo "<br><br>8. Que pelicula de terror fue la ganadora en las votaciones 2021 : ";
    if ($fue == "2") {
        echo " si es la ganadora por que es <br>Respuesta correcta  <br><br> ";
        $cal++;
    } else {
        echo "<br>no es la mejor por que es<br>respuesta incorrecta  <br> ";
    }

    echo "La calificacion es: ". "$cal/8";




	


    echo "Rodriguez Rojo Israel Josue"

?>
</body>
