<?php include_once("config.php"); ?>
<?php
define("DBHOST", "$servidor");
define("DBNAME", "$database");
define("DBUSER", "$usuario");
define("DBPASSWORD", "$password");
// Verificamos que el formulario no ha sido enviado aun
$postback = (isset($_POST["enviar"])) ? true : false;
if($postback){
    // Hacemos una condicion en la que solo permitiremos que se suban imagenes y que sean menores a 20 KB
    if ((($_FILES["foto"]["type"] == "image/gif") ||
    ($_FILES["foto"]["type"] == "image/jpeg") ||
    ($_FILES["foto"]["type"] == "image/pjpeg")) &&
    ($_FILES["foto"]["size"] < 2000000)) {

    //Si es que hubo un error en la subida, mostrarlo, de la variable $_FILES podemos extraer el valor de [error], que almacena un valor booleano (1 o 0).
      if ($_FILES["foto"]["error"] > 0) {
        echo $_FILES["foto"]["error"] . "<br />";
      } else {
          // Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido
          if (file_exists("archivos/" . $_FILES["foto"]["name"])) {
            echo $_FILES["foto"]["name"] . " ya existe. ";
          } else {
           // Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida
            move_uploaded_file($_FILES["foto"]["tmp_name"],
            "archivos/" . $_FILES["foto"]["name"]);
            $titulo = (ucfirst($_POST["titulo"]));
              $subtitulo = $_POST["subtitulo"];
              $tfoto = "archivos/".$_FILES["foto"]["name"]."";
              $detalle = (nl2br(htmlspecialchars(urldecode($_POST["detalle"]))));
              $link = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBNAME) or die(mysql_error($link));

              $sql = "INSERT INTO laboral(titulo, subtitulo, detalle, foto)
              VALUES
              ('$titulo', '$subtitulo', '$detalle', '$tfoto')";
              mysqli_query($link, $sql) or die(mysql_error($link));
              echo " Archivo Guardado, correctamente ";
              exit();

          }
      }
    } else {
        // Si el usuario intenta subir algo que no es una imagen o una imagen que pesa mas de 20 KB mostramos este mensaje
        echo "Archivo no permitido";
    }



}
?>
<html>
<head>
<title>Mi Sistema de Noticia</title>
<link rel="stylesheet" type="text/css" href="estilo_noticias.css">
</head>
<body>
  <h1>Subir Noticias Sociales</h1>
<form name="frmimage" id="frmimage" method="post"
enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
<h1>Titulo<br />
<input name="titulo" type="text" class="text" id="titulo" />
</h1>
<h1> Subtitulo<br />
<textarea name="subtitulo" id="subtitulo" cols="60" rows="5"></textarea>
</h1>
<h1> Detalle<br />
<textarea name="detalle" id="detalle" cols="60" rows="10"></textarea>
</h1>
<h1>
Seleciones una imagen<br>
<input name="foto" type="file" class="text" id="foto" />
</h1>
<h1>
<input name="fecha" type="hidden" id="fecha" />
<button name="enviar" type="submit" id="enviar">Publicar</button>
</h1>
</form>
</body>
</html>
