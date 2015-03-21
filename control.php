<html>
	<head>
		<title>Untitled Document</title>
	</head>

	<body>
	
    	<?php
			$numero = 3;
			$control = 5;
			//if else
			if($numero < $control){
				echo 'el n&uacute;mero es menor a '.$control;
				echo '<br> El n&uacute;mero de control es '.$control.'<br>';
			}else
				echo 'el n&uacute;mero es mayor o igual a '.$control.'<br>';
			
			//if elseif else
		    $x = 3;
			$y = 3;
			if($x>=0 && $y>=0){
				// primer cuadrante
				echo 'I: '.$x.' es positivo y '.$y.' es positivo';
			}elseif($x<0 && $y>=0){
				// segundo cuadrante
				echo 'II: '.$x.' es negativo y '.$y.' es positivo';
			}elseif($x<0 && $y<0){
				// tercer cuadrante
				echo 'III: '.$x.' es negativo y '.$y.' es negativo';
			}else{
				// cuarto cuadrante
				echo 'IV: '.$x.' es positivo y '.$y.' es negativo';
			}
		?>
        <br>
        <?php
			$dia = "Miercoles";
			
			switch($dia){
				case "Lunes":
					echo 'Hoy comemos pasta';
				break;
				
				case "Martes":
					echo 'Hoy comemos paella';
				break;
				
				case "Miercoles":
					echo 'Hoy comemos pizza';				
				break;
				
				case "Jueves":
					echo 'Hoy comemos hamburguesa';				
				break;
				
				case "Viernes":
					echo 'Hoy comemos sushi';
				break;
				
				default:
					echo "Fin de semana, comemos pasticho";
				
			}
			
		?>
        <br>
    <?php
			//While, for, do while
			
			$i = 1;
			$j = 50;
			while($i<=10 && $j>=10){
				echo $i.' ';
				$i++;	//$i = $i + 1;
				$j-=5;
			}
			
			echo '<br>';
			
			$i = 1;
			do{
				echo $i.' ';
				$i++;
			}while($i%2==0);
			
			echo '<br>';
			
			for($k = 0; $k<100 ;$k+=5){
				echo $k.' ';	
			}
		?>
    
    </body>
</html>
