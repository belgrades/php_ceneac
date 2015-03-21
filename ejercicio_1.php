
<html >
    <head>
    
    	<title>Untitled Document</title>
    </head>
    
    <body>
    	<?php
			function validate($input){
				echo "<h3> $input </h3>";
				$pos_arroba = strpos($input, chr(64));
				$pos_punto = strpos($input, '.');
				
				$diff = $pos_punto - ($pos_arroba + 1);
				
				echo $pos_arroba." ".$pos_punto." ".$diff;
				
				if($pos_arroba>6 || $pos_arroba < 3)
					return "NV: longitud de login invalida";
					
				// verificar caracteres alfanumericos
				
				$input = stristr($input, chr(64));
				$input = substr($input, 1, strlen($input));
				
				$pos_punto = strpos($input, '.');
				
				if($pos_punto <1 || $pos_punto > 10)
					return "NV: dominio invalido";
					
				// verificar caracteres alfanumericos
					
				$input = stristr($input, '.');
				
				echo $input."<br>";
				
				if($input == ".com")
					return "Email valido";
				else
					return "NV: el final no es .com";
					
			}
			
			$entrada = "prueba@gmail.com";
			
			echo validate("praaaaa@gmail.com")."<br>";
			echo validate("pr@gmail.com")."<br>";
			echo validate("prueba@abcdfghdjl.com")."<br>";
			echo validate("prueba@abcdgfhsjss.co")."<br>";
			echo validate("prueba@gmail.co")."<br>";
			echo validate("prueba@.cOm")."<br>";
		
		?>
        
    </body>
</html>
