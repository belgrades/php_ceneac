<html>
	<head>
		<title>Arreglos y Matrices</title>
	</head>

	<body>
		<?php
			echo "<h3> Ejemplo 1 </h3>";
			$ciudad[] = "Caracas";
			$ciudad[] = "Maracay";
			$ciudad[] = "Valencia";
			
			echo 'Yo vivo en '.$ciudad[0].'<br>';
			echo 'Mis padres viven en '.$ciudad[2].'<br>';
			
			//ejemplo 2
			echo "<h3> Ejemplo 2 </h3>";
			
			$paises = array("Italia", "Francia", "Venezuela", "EEUU", "Alemania", "Holanda", "Colombia");
			
			$num_elementos = count($paises);
			
			for($i = 0; $i < $num_elementos; $i++){
				if($i%2==1)
					print('La ciudad '.$i.' es '.$paises[$i].'<br>');	
			}
			//Ejemplo 3: listas asociativas
			echo "<h3> Ejemplo 3 </h3>";
			$cedula["Fernando"] = 18714438;
			$cedula["Alejandro"] = 4086740;
			$cedula["Maria"] = 5540861;
			$cedula["Joali"] = 12345;
			$cedula["Ricardo"] = 2123154;
			
			echo "La tabla asociativa de cedulas tiene ".count($cedula)." elementos <br>";
			
			echo current($cedula)."<br>";
			next($cedula);
			echo current($cedula)."<br>";
			echo next($cedula)."<br>";
			echo end($cedula)."<br>";
			
			$pasaporte = array("Fernando"=>"VEN2323"   , 
							   "Alejandro"=> "VEN12121",
							   "Maria"=>"VEN27812891"  );
							   
			echo current($pasaporte)."<br>";
			next($pasaporte);
			echo current($pasaporte)."<br>";
			
			//ejemplo 4
			echo "<h3> Ejemplo 4 </h3>";

			$visitas = array("lunes"    => 40,
							 "martes"   => 68,
							 "miercoles"=> 45,
							 "jueves"   => 50,
							 "viernes"  => 90);
							 
			while(list($clave, $valor) = each($visitas)){
				echo "el dia $clave vinieron $valor 					personas <br>";	
			}
			
			echo "<h3> Ejemplo 5 </h3>";
			
			$calendario[] = array(1, "enero", 31);									    		$calendario[] = array(2, "febrero", 28);
			$calendario[] = array(3, "marzo", 31);
			$calendario[] = array(4, "abril", 30);
			$calendario[] = array(5, "mayo", 31);
			
		while(list($clave, $valor) = each($calendario)){
			echo "$clave $valor[0] $valor[1] $valor[2]<br>";		
		}
		
		echo "<h3> Ejemplo 6 </h3>";
			
		  $calendario["enero"] = array("A",2015, 31);									    	  $calendario["febrero"] = array("B", 2055, 28);
		  $calendario["marzo"] = array("C", 2013, 31);
		  $calendario["abril"] = array("D", 2012, 30);
		  $calendario["mayo"] = array("E", 1995, 31);
			
		while(list($clave, $valor) = each($calendario)){
			echo "$clave $valor[0] $valor[1] $valor[2]<br>";		
		}
			 
		echo "<h3> Ejemplo 7 : Funciones </h3>";
		
		function mayor($x, $y=100){
			if($x >$y)
				return "$x es mayor que $y<br>";
	
			return "$y es mayor que $x<br>";
		}
		
		$numero_1 = 50;
		$numero_2 = 30;
		
		echo mayor($numero_1);
		echo "Los valores son $numero_1 y $numero_2";
		
		//ejemplo 8	
		echo "<h3> Ejemplo 8 : Funciones, static </h3>";
		
		function contador(){
			static $count = 0;
			
			$count++;
			
			return $count;
		}
		
		echo contador()."<br>";
		echo contador()."<br>";
		echo contador()."<br>";
		
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
		
		?>
    </body>
</html>
