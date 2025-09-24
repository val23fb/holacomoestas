<html>
<head>
	<title>Hola a todos</title>
</head>
<body>
	<h1>Fecha: <? = date("d.m.y")?><</h1>
	<?php 
	if (date ("d") % 2 ==0){
		echo "hoy es un dia par";
	}else{
		echo "hoy es un dia impar";
	}
	?>
</body>
</html>