
<html >
	<head>
		<title>Untitled Document</title>
	</head>

	<body>
		<h1>
			<?php
                $myvar = "Fernando Crema";
                // Esto es un comentario
                
                /*
                Esto es un comentario
                Otro comentario
                */
               	echo "Hola $myvar";  
            ?>
        </h1>
        
        <h3>
			<?php
                $myvar = "Fernando Crema";
                // Esto es un comentario
                
                /*
                Esto es un comentario
                Otro comentario
                */
               	echo 'Hola '.$myvar.' c&oacute;mo est&aacute;s?';  
            ?>
        </h3>
        
        <h1> Hola Mundo! </h1>
        
        <?php
			//Ejemplo Numero 2: tipos de datos
			
			$att = "2b";
			$log = true;
			$flotante = 1.2e3;
			
			echo $att.' ';
			
			settype($att, "integer");
			
			echo $flotante.'  ';
			
			$octal = 0x12;
			echo $octal;
		?>
         <?php
			//Ejemplo Numero 2.1.4: Strings
			
			$a = "Hola";
			$b = $a.' Mundo';
			
			echo $b
			
		 ?>
         <br>
         <h4>
         	<?php
				echo 'Hola'.$a.' <br> ';
				define("FRASE", "PHP");
				echo FRASE.' '.PHP_VERSION.' '.PHP_OS.' '.__LINE__;
			?>
         </h4>
         
         <h5> 
         	<?php
			//ejemplo 4: operadores
				$a = 10;
				$b = 15;
				$suma = $a + $b;
				$resta = $a - $b;
				$division = $a / $b;
				$multiplicacion = $a*$b;
				$suma_total = $suma + $a + $b;
				echo $suma_total.' '.$resta.' '.$division.' '.$multiplicacion;
				
			?>
         </h5>
         
         <h4>
         	<?php
				$compra = 5000;//Valor de la compra sin IVA
				$IVA = 12; //El % del iva en ese instante
				
				//Imprimir en un echo
				
				// Gasté X bolivares y los impuestos fueron Y bolivares
				$impuesto = $compra*0.12;
				$total = $compra + $impuesto;
				
				echo "Gast&eacute; $total bol&iacute;vares y los impuestos fueron $impuesto bol&iacute;vares <br>";
				
				echo 'Gast&eacute; '.$total.' bol&iacute;vares y los impuestos fueron '.$impuesto.' bol&iacute;vares';
						
			?>
         </h4>
         
        
        
 
    </body>
</html>
