<?php 

	echo "Hola mundo";
	echo "<br><br>";

	echo "<h1 style='color:red;'>Lista de numeros</h1>";

	for ($i=0; $i < 10 ; $i++) { 
		echo $i+1 . "<br>";
	}

	for ($i=0; $i < 10; $i++) { 
		
		echo "<div style='border: 1px solid green; padding:30px; width:30px; display:inline-flex'>";
		echo $i+1;
		echo "</div>";
	}
	echo "<br>";
	for ($i=0; $i < 10 ; $i++) { 
		
	if ($i % 2 == 0){
			echo "<div style='border: 1px solid green; padding:30px; width:30px; display:inline-flex; background-color:blue'>";
		} else {
			echo "<div style='border: 1px solid green; padding:30px; width:30px; display:inline-flex; background-color:orange'>";
		}

		echo $i+1;
		echo "</div>";
	}
	echo "Rodriguez Rojo Israel Josue 5AVP"
 ?>