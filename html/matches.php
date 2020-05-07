<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Temporada</title>
  <link rel="stylesheet" href="/project-C/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/project-C/assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="/project-C/assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="/project-C/assets/fonts/ionicons.min.css">
  <link rel="stylesheet" href="/project-C/assets/fonts/fontawesome5-overrides.min.css">
  <link rel="stylesheet" href="/project-C/assets/css/Footer-with-social-media-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <link rel="stylesheet" href="/project-C/assets/css/Social-Icon-Circle.css">
  <link rel="stylesheet" href="/project-C/assets/css/untitled.css">
  <link rel="stylesheet" href="/project-C/assets/css/Video-Responsive-YouTube.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <script src="/project-C/assets/js/jquery.min.js"></script>
  <script src="/project-C/assets/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <script> 
    $(function(){
      $("#mainNav").load("/project-C/navbar.php"); 
      $("#footerpad").load("/project-C/footer.html"); 
    });
  </script> 
  <?php
  include($_SERVER['DOCUMENT_ROOT'].'/project-C/php/connection.php');
  $consulta = $con->query('select * from partido_uno') or die($con->error);
  ?>
</head>

<body>
  <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav"></nav>
  <header class="masthead text-center text-white d-flex">
   <div class="center">
     <div class="image-header">
     </div>
     <div class="sub-navbar">
      <div class="sub-navbar-container">
        <a href="index.php">
          <div class="sub-navbar-item">INICIO
            <div class="sub-navbar-item-selector"></div>
          </div>
        </a>
        <a href="tournaments.php">
          <div class="sub-navbar-item">TORNEOS
            <div class="sub-navbar-item-selector"></div>
          </div>
        </a>
        <a href="league.php">
          <div class="sub-navbar-item">LIGAS
            <div class="sub-navbar-item-selected sub-navbar-item-selector"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="page-container">
      <div class="page-container-navbar">
        <a class="page-container-navbar-item" href="league.php">
          Ranking
        </a>
        <a class="page-container-navbar-selected page-container-navbar-item" href="matches.php">
          Temporada actual
        </a>
        <a class="page-container-navbar-item-last" href="rules.php">
          Normas
        </a>
      </div>
      <div class="sub-container">
        <div class="table-left">
          <?php
          while($fila = $consulta->fetch_assoc()){
            $cunsultaEquipoUno = $con->query('select NOMBRE from equipos where id=' . $fila['EQUIPO_UNO_ID']) or die($con->error);
            $cunsultaEquipoDos = $con->query('select NOMBRE from equipos where id=' . $fila['EQUIPO_DOS_ID']) or die($con->error);
            $equipoUno = $cunsultaEquipoUno->fetch_assoc();
            $equipoDos = $cunsultaEquipoDos->fetch_assoc();
            ?>
            <div class="table-left-container">
              <div style="width: 40%;text-align: center; line-height: 64px; font-size: 20px;font-weight: 400">
                <?php print($equipoUno['NOMBRE'] )?>
              </div>
              <div style="width: 10%;text-align: right; line-height: 64px;font-weight: 800 ">
                <?php print($fila['RESULTADO_EQUIPO_UNO'])?>
              </div>
              <div style="width: 25%;text-align: center; line-height: 64px; margin-left: 5px">
                -
              </div>
              <div style="width: 10%;text-align: left; line-height: 64px; margin-left: 5px;font-weight: 800">
                <?php print( $fila['RESULTADO_EQUIPO_DOS'] )?>
              </div>
              <div style="width: 40%;text-align: center; line-height: 64px; margin-left: 5px;font-size: 20px; font-weight: 400">
                <?php print($equipoDos['NOMBRE'])?>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
        <div class="right-column">
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</header>
<footer id="footerpad" style="background-color: #0F1923;">
</footer>
</body>

<script src="/project-C/assets/js/javascript.js"></script>

</html>