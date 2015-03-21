<html >
    <head>
        <title>Untitled Document</title>
    </head>
    
    <body>
    <?php
		// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
		setLocale(LC_TIME, "esp");
		date_default_timezone_set('America/Caracas');
		$e = "<br>";
		
		// Imprime algo como: Monday
		echo date("l").$e;
		echo date("M").$e;
		
		// Imprime algo como: Monday 8th of August 2005 03:12:46 PM
		echo date('e W l jS \of F Y h:i:s A').$e;
		
		// Imprime: July 1, 2000 is on a Saturday
		echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000)).$e;
		
		/* Usar las constantes en el parámetro de formato */
		// Imprime algo como: Wed, 25 Sep 2013 15:28:57 -0700
		echo date(DATE_RFC2822).$e;
		
		// Imprime algo como: 2000-07-01T00:00:00+00:00
		echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000)).$e;
		?>
    </body>
</html>
