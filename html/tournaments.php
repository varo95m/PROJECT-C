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
      header("Location: /project-C/html/tournaments.php");
    };
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
            <div class="sub-navbar-item-selected sub-navbar-item-selector"></div>
          </div>
        </a>
        <a href="league.php">
          <div class="sub-navbar-item">LIGAS
            <div class="sub-navbar-item-selector"></div>
          </div>
        </div>
      </a>
    </div>
    <div class="table-container">
      <div class="table-container-navbar" style="width: 100%;">
        <div class="table-container-navbar-item" style="padding-left: 90px;">
          Nombre
        </div>
        <div class="table-container-navbar-item" style="padding-left: 20px;">
          Equipos
        </div>
        <div class="table-container-navbar-item" style="padding-right: 100px;">
          Fecha
        </div>
        <div class="table-container-navbar-item">
        </div>
      </div>
      <div class="sub-container-tournaments">
        <div class="table-left" style="width: 100%;">
          <?php
          //$consulta = $con->query('select * from equipos where id="' . $_SESSION['team'] . '"') or die($con->error);
          $consulta = $con->query('select * from tournaments') or die($con->error);
          while($fila = $consulta->fetch_assoc()){
            $fecha = strtotime($fila['DAY'] . "-" . $fila['month'] . "-" . $fila['YEAR'] . " " . $fila['HOUR'] . ":" . $fila['MINUTES'] . ":00");
            if($fecha > $fecha_actual){
             ?>
             <div class="table-left-container">
              <div style="width: 40%;text-align: center; line-height: 64px; font-size: 20px;font-weight: 400">
                <?php echo($fila['NAME']) ?>
              </div>
              <div style="width: 10%;text-align: right; line-height: 64px;font-weight: 800 ">
                <?php echo($fila['TEAMS'] . " / " . $fila['TOTAL_TEAMS']) ?>
              </div>
              <div style="width: 25%;text-align: center; margin-left: 100px; margin-top: 10px;">
                <div>
                  <?php echo($fila['DAY'] . "/" . $fila['month'] . "/" . $fila['YEAR'])?>
                </div>
                <div>
                  <?php echo($fila['HOUR'] . ":" . $fila['MINUTES']) ?>
                </div>
              </div>
              <div style="width: 40%;text-align: center; margin-top: 15px;  margin-left: 5px;font-size: 20px; font-weight: 400">
                <?php
                if(isset($_SESSION['username'])){
                  ?>
                  <button style="background-color: #0F1923; border: 1px solid grey; color: #FF4655; font-size:18px" onclick="window.location.href='register-team.php'" <?php print("value='" . $_SESSION['team'] . "'")?> name="registerTeam">INSCRIBIR EQUIPO</button>
                  <?php
                }else{
                  ?>
                  <button style="background-color: #0F1923; border: 1px solid grey; color: #FF4655; font-size:18px" onclick="window.location.href='register-team.php'" name="registerTeam">INSCRIBIR EQUIPO</button>
                  <?php
                }
                ?>
              </div>
            </div>
            <?php
          }
        }
        ?>
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