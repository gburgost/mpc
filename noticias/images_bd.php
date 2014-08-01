<?php require_once("config.php") ?>
<?php
error_reporting(E_ALL);
define("DBHOST", "$servidor");
define("DBNAME", "$database");
define("DBUSER", "$usuario");
define("DBPASSWORD", "$password");
$id = (isset($_GET["id"])) ? $_GET["id"] : exit();
switch($tam) {
case "1":
$campo = "foto";break;;
case "2":
default:
$campo = "foto";break;;
}
$sql = "SELECT $campo
FROM laboral
WHERE id = $id";
$link = mysql_connect(DBHOST, DBUSER, DBPASSWORD) or die(mysql_error($link));;
mysql_select_db(DBNAME, $link) or die(mysql_error($link));
$conn = mysql_query($sql, $link) or die(mysql_error($link));
$datos = mysql_fetch_array($conn);
$imagen = $datos[0];
header("Content-Type: $mime");
echo $imagen;
?>