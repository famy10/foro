<?php
	error_reporting(0);
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
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Foro</title>
</head>
<h1>Compras primer día de cole</h1><table align='center'><tr><td><hr></td><td><hr></td></tr><tr><td></td><td><h2>Re: Compras primer día de cole</h2></td></tr><tr><td class='td-izq'><br><br><img src='perfiles/user1/foto/maria-torrez.png' class='tam-foto'><br><p>Maria Torrez</p><img src='imagen/megusta.PNG' class='me-gusta'><br>26-04-2023<br>05:13:12</td><br><td class='td-der'><h3>que bien</h3><p>a balanza turística arrojó en los primeros cinco meses del año un déficit de 361 millones de dólares, informó este lunes el INDEC. En mayo último ingresaron al país 394.800 turistas, lo cual representó un aumento del 16% interanual.

En cambio, los residentes que viajaron al exterior sumaron 435.700, que representó un aumento del 14,2%, comparado con mayo del año anterior. El turismo que ingresó a la Argentina solamente por los aeropuertos Ezeiza y Jorge Newbery gastó en el país durante mayo 198,1 millones de dólares, mientras que los residentes que viajaron al exterior tuvieron un gasto de 281,6 millones de dólares, con un déficit de 83,5 millones.

En los primeros cinco meses del año el turismo receptivo gastó en el país un total de 1.107,8 millones de dólares, mientras que los que los residentes que viajaron al exterior desembolsaron U$S 1.469,5 millones. Entre enero y mayo la pérdida de divisas por el intercambio turístico llega a los 361.700 millones de dólares, según datos oficiales.</p><img src=nombreLapizaPaNoPerder.jpg min-width-='150px' min-height='150px'><br></td></tr><tr><td><hr></td><td><hr></td></tr></table><table align='center'><tr><td><hr></td><td><hr></td></tr><tr><td></td><td><h2>Re: Compras primer día de cole</h2></td></tr><tr><td class='td-izq'><br><br><img src='perfiles/user2/foto/lorena-ghost.webp' class='tam-foto'><br><p>Lorena Ghost</p><img src='imagen/megusta.PNG' class='me-gusta'><br>26-04-2023<br>05:17:10</td><br><td class='td-der'><h3>te felicito</h3><p>L'Oréal se inició en el negocio con los tintes para el cabello, pero la compañía pronto se diversificó en otros productos de limpieza y belleza. Con más de 86.000 empleados, L'Oréal está presente en 150 países, comercializando 36 marcas 6​ y miles de productos individuales en todos los sectores del negocio de la belleza: tintes de cabello, permanentes, estilismo del cabello, cuidado de la piel y el cuerpo, productos de limpieza, maquillaje y fragancias. Los productos de la compañía se encuentran en una amplia variedad de canales de distribución, desde peluquerías y perfumerías de hiper y supermercados, hasta establecimientos de salud, belleza, farmacias y correo directo.</p><img src=office-manager.jpg min-width-='150px' min-height='150px'><br></td></tr><tr><td><hr></td><td><hr></td></tr></table><table align='center'><tr><td><hr></td><td><hr></td></tr><tr><td></td><td><h2>Re: Compras primer día de cole</h2></td></tr><tr><td class='td-izq'><br><br><img src='perfiles/user1/foto/maria-torrez.png' class='tam-foto'><br><p>Maria Torrez</p><img src='imagen/megusta.PNG' class='me-gusta'><br>26-04-2023<br>05:18:27</td><br><td class='td-der'><h3>sos crack</h3><p>En 1929, Schueller lanzó la revista profesional Boletín L'Oréal, que fue distribuida en salones de belleza, luego una revista para mujeres, Tu Belleza.9​ En 1929 creó el primer sistema de teñido rápido, Imedia y en 1934, lanzó al público champú familiar Dop. En 1935, desarrolló el "Amber Solar", el primer protector solar.</p></td></tr><tr><td><hr></td><td><hr></td></tr></table>