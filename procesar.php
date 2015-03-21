
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
 	<?php
	
		echo "Nombre: ".$_POST['nombre']."<br>";
		echo "Email: ".$_POST['email']."<br>";
		echo "Password: ".$_POST['pass']."<br>";
		
		if(isset($_POST['hobbie1']))
			echo $_POST['hobbie1']."<br>";
			
		if(isset($_POST['hobbie2']))
			echo $_POST['hobbie2']."<br>";
		
		if(isset($_POST['hobbie3']))
			echo $_POST['hobbie3']."<br>";
			
		if(isset($_POST['hobbie4']))
			echo $_POST['hobbie4']."<br>";
			
		echo $_POST['sexo'];
			
	?>
</body>
</html>
