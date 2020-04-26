<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/FAQ-Frequentlly-Asked-Questions-1.css">
    <link rel="stylesheet" href="assets/css/FAQ-Frequentlly-Asked-Questions.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Social-Icon-Circle.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive-YouTube.css">
    <?php 
	$con = mysqli_connect("localhost", "root", "", "valorantesp");
	mysqli_set_charset($con,'UTF8');
	$consulta = $con->query('select * from agentes where cod_agente=' . $_GET["a"]) or die($con->error);
	$fila = $consulta->fetch_assoc();
    ?>
    <title><?php print $fila['NOM_AGENTE'] ?> - VALORANT ESP</title>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">VALORANT ESP</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#about" style="color: #ffffff;font-size: 18px;">AGENTES</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services" style="font-size: 18px;color: #ffffff;">ARMAS</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio" style="font-size: 18px;color: #ffffff;">NOTICIAS</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="text-white bg-primary" id="about" style="background-color: #0F1923;padding: 50px;min-height:890px; height:auto;">
        <div class="container" style="height: 404px;">
            <div class="row" style="margin-top: 74px;margin-bottom: 67px;height: 516px;">
                <div class="col-xl-6 offset-lg-8 mx-auto text-center" style="height: 532px;margin-top: 0px;width: 770px;">
                    <h2 class="text-white section-heading" style="font-size: 60px;font-style: normal;font-weight: bold;"><?php print $fila['IMG_AGENTE'] ?></h2>
                    <hr class="light my-4" style="border-color: <?php print $fila['HIST_AGENTE'] ?>!important; "><p class="text-faded mb-4"><?php print $fila['DES_AGENTE'] ?><br /><br /></p><div class="container" style="padding-top:40px;padding-bottom:40px;">
    <div id="accordion" style="margin-top: -70px; height:auto;">
  <div class="card" style="background-color: #0F1923">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-controls="collapseOne" style="color:white;">
        <img style="width:45px; height:45px; object-fit: cover;" src=<?php print '"assets/img/agents/'.$fila['COD_AGENTE']. '/1.svg"' ?>><?php print $fila['NOM_HABILIDAD1'] ?>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body" style="color:white;">
        <?php print $fila['DES_HABILIDAD1'] ?>
      </div>
    </div>
  </div>
  <div class="card" style="background-color: #0F1923;">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="color:white;">
        <img style="width:45px; height:45px; object-fit: cover;" src=<?php print '"assets/img/agents/'.$fila['COD_AGENTE']. '/2.svg"' ?>><?php print $fila['NOM_HABILIDAD2'] ?>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body" style="color:white;">
      <?php print $fila['DES_HABILIDAD2'] ?>
      </div>
    </div>
  </div>
  <div class="card" style="background-color: #0F1923">
    <div class="card-header" id="headingThree" >
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="color:white;">
        <img style="width:45px; height:45px; object-fit: cover;" src=<?php print '"assets/img/agents/'.$fila['COD_AGENTE']. '/3.svg"' ?>><?php print $fila['NOM_HABILIDAD3'] ?>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body" style="color:white;">
      <?php print $fila['DES_HABILIDAD3'] ?>
      </div>
    </div>
  </div>
  <div class="card" style="background-color: #0F1923">
    <div class="card-header" id="headingFour" >
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="color:white;">
        <img style="width:45px; height:45px; object-fit: cover;" src=<?php print '"assets/img/agents/'.$fila['COD_AGENTE']. '/4.svg"' ?>><?php print $fila['NOM_HABILIDAD4'] ?>
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body" style="color:white;">
      <?php print $fila['DES_HABILIDAD4'] ?>
      </div>
    </div>
  </div>
</div>
</div></div>
                <div class="col" style="width: 436px;background-image: url(&quot;assets/img/agents/<?php print $fila['COD_AGENTE'] ?>/splash.png&quot;);background-size: cover;color: rgb(255,112,9);"></div>
            </div>
        </div>
    </section>
    <footer id="footerpad" style="background-color: #0F1923;margin-top: 0px;border-top: 2px #FF4655 solid;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8 mx-auto" style="height: 123px;">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg" style="color: rgb(255,255,255);"><i class="fa fa-circle fa-stack-2x"></i><i class="fab fa-discord fa-stack-1x fa-inverse" style="color: #0F1923;"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x" style="color: rgb(255,255,255);"></i><i class="fa fa-twitter fa-stack-1x fa-inverse" style="color: #0F1923;"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x" style="color: rgb(255,255,255);"></i><i class="fa fa-instagram fa-stack-1x fa-inverse" style="color: #0F1923;"></i></span></a></li>
                        <li class="list-inline-item"><a href="#"></a></li>
                    </ul><p class="copyright text-muted text-center">Copyright © VALORANT ESP 2020 | Web Design by @JoseOhMyGod &amp; @varo95m.<br> This site is in no way associated with or endorsed by Riot Games Inc.<br>We work with embeded videos and we do not own any rights on them.</p></div>
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>