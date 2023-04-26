<?php
	//Muestra all los files de la misma carpeta
	$pathFoto="perfiles/user1/foto";
	$carpeta=opendir($pathFoto);
//distinto estricto (tmn llamado  'distinto de': distinto con doble igual: comparo 1 
	//con "1", o sea comapra sin importar q sea disnto tipos de datos
	echo "<table align='center'>";
	echo "<tr>";
	echo "<td width='200px'>";
	while ( ($file_name = readdir($carpeta)) !== false)  { 
		if ($file_name != '.' && $file_name != '..' ) {
			// code...
													//tamaño 24 ancho y alto pa la foto
		//echo( "<img src=imagen/" . $file_name. " width='24px' height='24px'" . ">");
		echo( "<img src=" .$pathFoto. "/" . $file_name. " width='34px' height='34px'" . ">");
	  }	
	}
	echo "</td>";
	closedir();
	echo "<td>";
	$pathNombre="perfiles/user1/user/user.txt";
	$gestor=fopen($pathNombre, 'r');
	$contenido=fread($gestor, 1024);
	echo $contenido;
	echo "</td>";
	echo "</tr>";
	echo "</table>";
	echo "<hr>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuario: Maria</title>
</head>
<body>
	<form action="maria-mensaje.php" method="post" enctype="multipart/form-data">
		<table align="center">
			<tr>
				<td>Asunto</td>
				<td>&nbsp</td>
				<td> <input type="text" name="asunto" size="100px"> </td>
			</tr>
			<tr>
				<td>Mensaje</td>
				<td>&nbsp</td>
				<td> <textarea rows="10" cols="88" name="mensaje"></textarea> </td>
			</tr>
			<!---->
			<!--
			<tr>	
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td align="right"><input type="submit" value="Responder"></td>
			</tr>
			-->
			<tr>
				<td>Subir foto</td> 
				<td>&nbsp</td> 
				<td><input type="file" name="file"></td>
			</tr>
			<tr>	
				<td>&nbsp</td>
				<td>&nbsp</td>
				<td align="right"><input type="submit" value="Responder"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>
