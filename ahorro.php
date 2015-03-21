
<?php
	include("header.inc");
//ejemplo 9
	echo "<h3> Ejemplo 9 : Funciones, globales </h3>";
	
	$ID = 10;
	
	function ejemplo_global(){
		global $ID;
		
		echo $ID."<br>";
		$ID++;
	}
	
	ejemplo_global();
	ejemplo_global();
	
	$ID = 2;
	
	ejemplo_global();
	ejemplo_global();
	
	echo "<h3> Ejemplo 10 : Funciones de strings </h3>";
	//ejemplo #1: errores de input de usuarios
	
	$a = "  FeRnAnDo CreMA";
	$b = "Fernando Crema   ";
	$c = "fernando crema";
	
	// el comando == es equivalente a strcmp
	// si son iguales, strcmp retorna 0
	echo "<h4>Comparando $a y $b </h4>";
	if($a == $b)
		echo "Son iguales<br>";
	else
		echo "No son iguales<br>";
		
	
	
	
	echo "<h4>Comparando".strtoupper($a)." y ".strtoupper($b)." </h4>";
	echo "Estamos usando strtoupper<br>";
	if(strtoupper($a)==strtoupper($b)){
		echo "Son iguales<br>";
	}else{
		echo "No son iguales<br>";	
	}
	
		echo "<h4>Comparando ".trim(strtoupper($a))." y ".trim(strtoupper($b))." </h4>";
		echo "Estamos usando strtoupper + trim<br>";
	if(trim(strtoupper($a))==trim(strtoupper($b))){
		echo "Son iguales<br>";
	}else{
		echo "No son iguales<br>";	
	}
	
	
	echo "<h3> Ejemplo 11 : Usando wordwrap </h3>";
	
	$texto = "Yo creo es posible lograr un acuerdo pues no existe nada que sea irresoluble, manifest&oacute; el mandatarioioioioio iran&iacute; en el primer d&iacute;a del Nouruz, el nuevo a&ntilde;o persa, al concluir su visita a un centro de discapacitados en Teher&aacute;n";
	
	echo wordwrap($texto, 10, "<br>", true);
	
	include("footer.inc");
?>
