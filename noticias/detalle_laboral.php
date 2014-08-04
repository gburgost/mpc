<html>
<head>
	<title></title>
	<link href="../css/estilo.css" rel="stylesheet" type="text/css">
	<link href="estilo_noticias.css" rel="stylesheet" type="text/css">
</head>
<body>

<div id="detalle">
<?php include_once("config.php"); ?>
<?php
$conex = mysql_connect ("$servidor","$usuario","$password");
if (!$conex)
{
die('NO puede conetarse: ' . mysql_error());
}
mysql_select_db ("$database", $conex);
$id = (isset($_GET["id"])) ? $_GET["id"] : exit();
$resultado = mysql_query ("SELECT * FROM laboral WHERE id=$id");
while($mostrador = mysql_fetch_array($resultado))
{
echo "<h1>".$mostrador['titulo']."</h1>";
echo "<img src=".$mostrador['foto'].">";
echo "<h2>".$mostrador['subtitulo']."</h2>";
echo "<br>";
echo $mostrador['detalle'];
}
mysql_close($conex);
?>
</div>

</body>
</html>