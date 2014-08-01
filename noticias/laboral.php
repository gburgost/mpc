<!DOCTYPE html>
<html lang="es">
<head>


<?php include_once("config.php"); ?>

<title>Metalurgica Puerto Caldera</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">



<link href="estilo_noticias.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="js/responsivemobilemenu.js"></script>

<script src="../js/jquery.smint.js" type="text/javascript" ></script>

<script type="text/javascript">


$(document).ready( function() {
    $('.subMenu').smint({
      'scrollSpeed' : 1000
    });
});


</script>

<!-- FlexSlider -->
<link rel="stylesheet" href="../flexslider/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../flexslider/flex.css" type="text/css" media="screen" />
  <!-- Modernizr -->

<script defer src="../flexslider/jquery.flexslider.js"></script>

<script type="text/javascript">

    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemWidth: 210,
        itemMargin: 5,
        minItems: 2,
        maxItems: 4,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
   <script src="../flexslider/jquery.flex.js"/></script>
      <script type="text/javascript">
          $(window).load(function() {
                  $('.flex').flex();
                      });
      </script>



  <!--FIN FLEXSLIDER-->

 <script type="text/javascript">
  $(document).ready(function(){ // Script del Navegador
    $("ul.subnavegador").not('.selected').hide();
    $("a.desplegable").click(function(e){
      var desplegable = $(this).parent().find("ul.subnavegador");
      $('.desplegable').parent().find("ul.subnavegador").not(desplegable).slideUp('slow');
      desplegable.slideToggle('slow');
      e.preventDefault();
    })
 });
</script>

</head>
<body>
<div class="wrap ">
  <div class="subMenu" >
    <div class="inner">
      <div class="rmm">
        <ul>
          <li><a href="../index.html#sTop" class="subNavBtn">Inicio</a></li>
          <li><a href="../index.html#s1" class="subNavBtn">Nosotros</a></li>
          <li><a href="../index.html#s2" class="subNavBtn">Servicios</a></li>
          <li><a href="../index.html#s3" class="subNavBtn">Clientes</a></li>
          <li><a href="../index.html#s4" class="subNavBtn">Noticias</a></li>
          <li><a href="../index.html#s5" class="subNavBtn">Contacto</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="section labor">
    <div class="inner">
      <div id="laboral">
        <h1>Laboral</h1>
        <?php
        $conex = mysql_connect ("$servidor","$usuario","$password");
        if (!$conex)
        {
        die('NO puede conetarse: ' . mysql_error());
        }
        mysql_select_db ("$database", $conex);
        $resultado = mysql_query ("SELECT * FROM laboral ORDER BY id DESC");
        while($mostrador = mysql_fetch_array($resultado))
        {
        echo "<div id='noticia'>";
        echo "<img src=".$mostrador['foto'].">";
        echo "<div id='cont_noticia'>";
        echo "<a href=detalle_laboral.php?id=$mostrador[id]>";
        echo $mostrador['titulo'];
        echo "</a></br><br>";
        echo $mostrador['subtitulo'];
        echo "</div>";
        echo "<br><br>";
        echo "</div>";
        }
        mysql_close($conex);
        ?>
      </div>

    </div>
  </div>
</div>
</body>
</html>
