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
  <link rel="stylesheet" href="css/style-tournaments.css">
  <script> 
    $(function(){
      $("#mainNav").load("/project-C/navbar.php"); 
      $("#footerpad").load("/project-C/footer.html"); 
    });
  </script> 
  <?php
  include($_SERVER['DOCUMENT_ROOT'].'/project-C/php/connection.php');
  $hoy = getdate();
  $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
  include($_SERVER['DOCUMENT_ROOT'].'/project-C/php/connection.php');
  $consulta = $con->query('select * from equipos order by PUNTOS desc') or die($con->error);
  if(isset($_POST['submit'])){
    $con = mysqli_connect("localhost", "root", "", "valorantesp");
    mysqli_set_charset($con,'UTF8');
    $usuario= $_POST['username'];
    $password= $_POST['password'];
    $consulta = $con->query("select * from users where username='".$usuario. "' AND password='".$password."'") or die($con->error);
    $numeroFilas=mysqli_num_rows($consulta);
    if($numeroFilas!=0){
      $fila = $consulta->fetch_assoc();
      $_SESSION['username'] = $usuario;
      $_SESSION['team'] = $fila['ID'];
      header("Location: /project-C/html/torneos.php");
    };
  };
  if(isset($_SESSION['username'])){
    $teamConsulta = $con->query("select NOMBRE from equipos where id=" . $_SESSION['team']) or die($con->error);
    $team = $teamConsulta->fetch_assoc();
  }
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
            <div class="sub-navbar-item-selected  sub-navbar-item-selector"></div>
          </div>
        </a>
        <a href="league.php">
          <div class="sub-navbar-item">LIGAS
            <div class="sub-navbar-item-selector"></div>
          </div>
        </a>
      </div>
    </div>
    <?php
    if(isset($_SESSION['username'])){
      ?>
      <div style="border:solid 1px; height: 120px; width: 1100px; margin: 0 auto 20px auto; background-color: #0F1923">
        <div style="font-size: 35px; margin-top: 10px;">
          <?php print($team['NOMBRE']) ?>
        </div>
        <div>
          <button style="background-color: #FF4655; border: 1px solid grey; color: white;padding: 5px; font-size:18px" >Inscribir equipo</button>
        </div>
      </div>
      <?php
    }
    ?>
    <div class="table-container">
      <div class="page-container-navbar" style="width: 100%">
        <a class="page-container-navbar-selected page-container-navbar-item" href="torneos.php">
          Normas
        </a>
        <a class="page-container-navbar-item" href="matches.php">
          Equipos inscritos
        </a>
        <a class="page-container-navbar-item-last" href="rules.php">
          Premios
        </a>
      </div>
      <div class="sub-container-tournaments">
        <div class="table-left" style="text-align: left; background-color: #181818; padding: 15px; width: 100%">
          Hay un tiempo límite de 15 minutos para presentarse al partido, pasado este tiempo, si uno de los jugadores o equipos no se ha presentado, el bando que sí lo haya hecho será considerado ganador del partido por incomparecencia del oponente. Se deberá aportar las pruebas donde se vea claramente que no están los jugadores en la sala de partido mediante la protesta.

          Puede haber espectadores en la sala siempre y cuando ambos equipos estén de acuerdo. Si uno de los dos equipos se queja, el espectador deberá abandonar la sala. No se permiten espectadores en las partidas en las que haya una retransmisión oficial.


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