<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Untitled</title>
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
        <a class="page-container-navbar-selected page-container-navbar-item" href="league.php">
          Ranking
        </a>
        <a class="page-container-navbar-item" href="matches.php">
          Temporada actual
        </a>
        <a class="page-container-navbar-item-last" href="rules.php">
          Normas
        </a>
      </div>
      <div class="sub-container">
        <div class="table-left">
          <div class="table-left-header">
            <div style="width: 10%; text-align: center; line-height: 40px; float: left; padding-left: 15px">
              POSICION
            </div>
            <div style="width: 45%;padding-left: 50px; line-height: 40px; margin-left: 0; display: inline-block;">
              EQUIPO
            </div>
            <div style="width: 15%; line-height: 40px; margin-left: 10px;float: right; padding-right: 30px;">
              PUNTOS
            </div>
            <div style="width: 24%; line-height: 40px; margin-left: 10px;float: right; ">
              W - L
            </div>
          </div>
          <?php
          $i = 0;
          while($fila = $consulta->fetch_assoc()){
            $i++ 
            ?>
            <div style="height: 80px;background-color: #181818;color: white; border-bottom: solid 1px; padding: 7px; padding-left: 30px;text-align: center; " >
              <div style="width: 50px; text-align: center; line-height: 64px; float: left;">
                <?php print($i)?>
              </div>
              <div style="width: 250px; line-height: 64px; margin-left: 0; display: inline-block;<?php  if($fila['ID']==$_SESSION['team'])print('color:red;')?>">
               <?php print($fila['NOMBRE']);?>
             </div>
             <div style="width: 150px; line-height: 64px; margin-left: 10px;float: right;">
              <?php print($fila['PUNTOS'])?>
            </div>
            <div style="width: 100px; line-height: 64px; margin-left: 10px;float: right; ">
              <?php print($fila['VICTORIAS'] . " - " . $fila['DERROTAS'])?>
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
</header>
<footer id="footerpad" style="background-color: #0F1923;">
</footer>
</body>
<script src="javascript.js"></script>
<script src="/project-C/assets/js/javascript.js"></script>
</html>