<html>
<head>
<title>Registro Datos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	// Convertimos la matriz a una cadena con formato XML.
	$xml = '<?xml version="1.0" encoding="UTF-8"?>
<tns:creditoRequest xsi:schemaLocation="http://itq.edu/credito credito.xsd" xmlns:tns="http://itq.edu/credito" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	<tns:nombre>'.htmlspecialchars($_POST['firstname']).'</tns:nombre>
	<tns:apellidos>'.htmlspecialchars($_POST['lastname']).'</tns:apellidos>
	<tns:curp>'.htmlspecialchars($_POST['curptype']).'</tns:curp>
	<tns:domicilio>'.htmlspecialchars($_POST['address']).'</tns:domicilio>
	<tns:salario>'.(int)$_POST['salary'].'</tns:salario>
	<tns:monto>'.(int)$_POST['amount'].'</tns:monto>
	<tns:tasaInteres>'.(int)$_POST['interestRate'].'</tns:tasaInteres>
	<tns:plazo>'.(int)$_POST['term'].'</tns:plazo>
</tns:creditoRequest>';
	// Grabamos el XML en el servidor como un fichero plano, para
	// poder ser leido por otra aplicación.
	$nombrearchivo = "infcliente.xml";
	$gestor = fopen($nombrearchivo, 'w+');
	fwrite($gestor, $xml);
	fclose($gestor);
?>
<section id="contenido">
<h1>Archivo Creado</h1>
<button id = "boton" onclick="location.href='index.html'">Crear Nuevamente</button>
</section>
</body>
</html>