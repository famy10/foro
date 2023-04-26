<?php


	$asunto =  $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	
	copy($_FILES['file']['tmp_name'], $_FILES['file']['name']);

	echo "asunto: " . $asunto;
	echo "mensaje: " . $mensaje; 
	
	$foto=$_FILES['file']['name'];
	echo "<br>";
	echo "<br>";
	echo( "<img src=" . $foto. " min-width-='150px' min-height='150px'" . ">");

	/*$completo= "<!DOCTYPE html><br><html lang='es'><br><head><br><meta charset='utf-8'><br>";
	$completo.="<meta name='viewport' content='width=device-width, initial-scale=1'><br>";
	$completo.="<title>Usuario: Maria</title><br></head><br>";
	$completo.="<body><br>";*/
	
	$completo="<table align='center'><tr><td><hr></td><td><hr></td></tr>";
	$completo.="<tr><td></td><td><h2>Re: Compras primer día de cole</h2></td></tr>";
	$completo.="<tr><td class='td-izq'><br><br><img src='perfiles/user2/foto/lorena-ghost.webp' class='tam-foto'><br>";

	$completo.="<p>";
	$pathNombre="perfiles/user2/user/user.txt";
	$gestor=fopen($pathNombre, 'r');
	$completo.=fread($gestor, 1024);
	$completo.="</p>";
	$completo.="<img src='imagen/megusta.PNG' class='me-gusta'>";
	$completo.="<br>";
	$completo.= date("d-m-Y");
	$completo.="<br>";
	$completo.= date("h:i:s");
	$completo.="</td>";
	$completo.="<br>";
	$completo.="<td class='td-der'>";
	$completo.="<h3>";
	$completo.=$asunto;
	$completo.="</h3>";
	$completo.="<p>";
	$completo.=$mensaje;
	$completo.="</p>";
	if ($foto!== "") {
		$completo.=	"<img src=" . $foto. " min-width-='150px' min-height='150px'" . ">";
		$completo.="<br>";
	}
	
	$completo.="</td></tr>";
	$completo.="<tr><td><hr></td><td><hr></td></tr>";
	$completo.="</table>";
	
	$fp=fopen('data.php','a');
	fwrite($fp,$completo);
	fclose($fp);
	
	header("location:data.php");
?>