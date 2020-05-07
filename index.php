<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-media-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/Social-Icon-Circle.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/Video-Responsive-YouTube.css">
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script> 
        $(function(){
            $("#mainNav").load("/project-C/navbar.html"); 
            $("#footerpad").load("/project-C/footer.html"); 
        });
    </script> 
    <?php
    if(isset($_POST['submit'])){
        $con = mysqli_connect("localhost", "root", "", "valorantesp");
        mysqli_set_charset($con,'UTF8');
        $usuario=$_POST['username'];
        $password=$_POST['password'];
        $consulta = $con->query("select * from users where username='".$usuario. "' AND password='".$password."'") or die($con->error);
        $numeroFilas=mysqli_num_rows($consulta);
        if($numeroFilas!=0)
            header("Location: html/matches.php");
        {
        }
        ?>
    </head>

    <body id="page-top">
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="border-bottom: 1px solid rgba(104,110,115);">
        </nav>
        <header class="masthead text-center text-white d-flex" style="background-image: url(&quot;assets/img/fondo-body.png&quot;);height: 888px;background-size: auto;background-position: 50% -600%;">
            <div class="container my-auto" style="background-position: 10%;height: 399px;">
                <div class="row" style="margin-right: -15px;">
                    <div class="col-lg-10 mx-auto" style="background-image: url(&quot;assets/img/logo2.png&quot;);height: 353px;background-size: contain;background-repeat: no-repeat;">
                        <h1 class="text-uppercase"></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col" style="margin-top: -74px;">
                        <a class="btn btn-primary visible btn-circle" role="button" style="border-radius: 50px;border: 1px solid black;background-color: #ffffff;" href="https://twitter.com/Valorant_ESP"><i class="icon ion-social-twitter" style="color: #0F1923;font-size: 30px;"></i></a>
                        <a class="btn btn-link btn-circle" role="button" style="border-radius: 50px;border: 1px solid black;background-color: #ffffff;margin-left: 14px;" href="https://www.instagram.com/valorant_esp/">
                            <i class="icon ion-social-instagram" style="color: #0F1923;font-size: 30px;"></i>
                        </a>
                        <button class="btn btn-link btn-circle" style="border-radius: 50px;border: 1px solid black;background-color: #ffffff;margin-left: 14px;" type="button">
                            <i class="fab fa-discord" style="color: #0F1923;font-size: 30px;">
                            </i>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <section class="text-white bg-primary" id="about" style="background-color: #0F1923;padding: 50px;max-height: 1091px;">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-8 mx-auto text-center">
                        <h2 class="text-white section-heading">¿QUE ES VALORANT?</h2>
                        <hr class="light my-4">
                        <p class="text-faded mb-4"><em>Valorant</em> es un ‘<em>shooter</em>’ táctico y competitivo <strong>free-to-play</strong> para <strong>PC</strong> que se juega en partidas de dos equipos con cinco personajes cada uno. Durante cada partida, los jugadores podrán elegir a un agente
                            con habilidades únicas que pueden afectar el campo de batalla de distintas formas..<br /><br />
                        </p>
                        <div class="video-container">
                            <iframe allowfullscreen="" frameborder="0" src="https://www.youtube.com/embed/g8amyzDHOKw" width="560" height="315"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="p-0">
            <div class="container-fluid p-0">
                <div class="row no-gutters popup-gallery">
                    <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/ESCG15nWAAISmWs.jpg"><img class="img-fluid" src="assets/img/fullsize/ESCG15nWAAISmWs.jpg"><div class="portfolio-box-caption" style="background-color: rgba(255,70,85,0.56);"><div class="portfolio-box-caption-content"><div class="project-category text-faded"></div><div class="project-name"></div></div></div></a></div>
                    <div
                    class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/ESCGwPIXsAAcplE.jpg"><img class="img-fluid" src="assets/img/fullsize/ESCGwPIXsAAcplE.jpg"><div class="portfolio-box-caption" style="background-color: rgba(255,70,85,0.56);"><div class="portfolio-box-caption-content"><div class="project-category text-faded"></div><div class="project-name"></div></div></div></a></div>
                    <div
                    class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/ESCGxMjWsAAnsvO.jpg"><img class="img-fluid" src="assets/img/fullsize/ESCGxMjWsAAnsvO.jpg"><div class="portfolio-box-caption" style="background-color: rgba(255,70,85,0.56);"><div class="portfolio-box-caption-content"><div class="project-category text-faded"></div><div class="project-name"></div></div></div></a></div>
                    <div
                    class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/ESCGyVJWoAEZ4_l.jpg"><img class="img-fluid" src="assets/img/fullsize/ESCGyVJWoAEZ4_l.jpg"><div class="portfolio-box-caption" style="background-color: rgba(255,70,85,0.56);"><div class="portfolio-box-caption-content"><div class="project-category text-faded"></div><div class="project-name"></div></div></div></a></div>
                    <div
                    class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/ESCHrc3W4AA_cbN.jpg"><img class="img-fluid" src="assets/img/fullsize/ESCHrc3W4AA_cbN.jpg"><div class="portfolio-box-caption" style="background-color: rgba(255,70,85,0.56);"><div class="portfolio-box-caption-content"><div class="project-category text-faded"></div><div class="project-name"></div></div></div></a></div>
                    <div
                    class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/ESCHtduXkAAv3kA.jpg"><img class="img-fluid" src="assets/img/fullsize/ESCHtduXkAAv3kA.jpg"><div class="portfolio-box-caption" style="background-color: rgba(255,70,85,0.56);"><div class="portfolio-box-caption-content"><div class="project-category text-faded" style="background-color: rgba(255,70,85,0.56);"></div><div class="project-name"></div></div></div></a></div>
                </div>
            </div>
        </section>
        <footer id="footerpad" style="background-color: #0F1923;">
        </footer>

    </body>
    </html>