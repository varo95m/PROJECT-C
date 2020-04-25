<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
	<link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
	<link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/fonts/ionicons.min.css">
	<link rel="stylesheet" href="../../assets/fonts/fontawesome5-overrides.min.css">
	<link rel="stylesheet" href="../../assets/css/Footer-with-social-media-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
	<link rel="stylesheet" href="../../assets/css/Social-Icon-Circle.css">
	<link rel="stylesheet" href="../../assets/css/untitled.css">
	<link rel="stylesheet" href="../../assets/css/Video-Responsive-YouTube.css">
	<title>Noticias - ValorantESP</title>
	<meta http-equiv='cache-control' content='no-cache'>
	<meta http-equiv='expires' content='0'>
	<meta http-equiv='pragma' content='no-cache'>
	<?php 
	$con = mysqli_connect("localhost", "root", "", "valorantesp");
	mysqli_set_charset($con,'UTF8');
	$consulta = $con->query('select tipo, titular, foto, escritor, fecha, noticia from noticias where id=1') or die($con->error);
	$fila = $consulta->fetch_assoc();
	?>
        <!--<meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@tftesp">
        <meta name="twitter:creator" content="@tftesp">
        <meta name="twitter:title" content= "<?php// print "[" . $fila['tipo']. "]" . $fila['titular'];?>">
        <meta name="twitter:description"
        content="<?php// print $fila['descMeta']?>">
        <meta name="twitter:image:src" content="<?php //print "https://tftesp.com/fotos_head/" . $fila['foto'];?>">
        ?>-->
    </head>
    <body style="background-color:#0F1923">
    	<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="display: block">
    		<div class="container">
    			<a class="navbar-brand js-scroll-trigger" href="#page-top">VALORANT ESPAÑOL</a>
    			<button data-toggle="collapse" data-target="#navbarResponsive" 
    			class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
    			aria-label="Toggle navigation">
    			<i class="fa fa-align-justify"></i>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarResponsive">
    			<ul class="nav navbar-nav ml-auto">
    				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="agentes.html" style="color: #ffffff;font-size: 18px;">AGENTES</a></li>
    				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services" style="font-size: 18px;color: #ffffff;">ARMAS</a></li>
    				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio" style="font-size: 18px;color: #ffffff;">NOTICIAS</a></li>
    				<li  class="nav-item" role="presentation"><a id="iniciarSesion" class="nav-link js-scroll-trigger" href="#portfolio" style="font-size: 18px;color: #ffffff;">INICIAR SESIÓN</a>
    					<div id="iniciarSesionBox" style=" margin-left: -90;margin-top: 8; border:solid 1px rgba(104,110,115); padding: 10px; color: #FF4655">
    						<form enctype="multipart/form-data" action="redactores.php" method="POST" style="font-size: 15px">
    							<p style="margin-bottom: 0">Usuario</p>
    							<input style="margin-bottom: 10; text-align: left;" id="titular" type="text" name="titular" maxlength="38" required>
    							<p style="margin-bottom: 0">Contraseña</p>
    							<input id="titular" type="text" name="titular" maxlength="38" required>
    							<p>¿Has olvidado tu contraseña?</p>
    						</form>
    					</div>
    				</li>
    			</ul>
    		</div>
    	</div>
    </nav>
    <header class=" text-center text-white d-flex" style="margin-top: 100px">
    	<div id="menuNot">
    		<div style="display: flex;">
    			<div id="leftColNot">
    				<div
    				>
    				<div style="width: 100%;text-align: center">
    					<!--<img src="fotos_noticias/<?php //print ($fila['foto']);?>" />-->
    					<img style="width: 80%" src="assets/img/1.jpg" />
    					<div id="tituloNoticia">
    						<?php 
    						print ('<h1 style="color:white">"' . $fila['titular'] . '"</h1>'); 
    						echo "<font style='color: white'>Por <b>" . $fila['escritor'] ."</b>, " . $fila['fecha'] ."</font>";
    						?>
    					</div>
    					<?php $arr = explode(PHP_EOL,$fila['noticia']);
    					echo 
    					"
    					<div class='descripcionNoticia'>";
    					$noticia = str_replace("[b]", "<b>", $fila['noticia']);
    					$noticia = str_replace("[/b]", "</b>", $noticia);
    					$noticia = str_replace("[u]", "<u>", $noticia);
    					$noticia = str_replace("[/u]", "</u>", $noticia);
    					$noticia = str_replace("[i]", "<i>", $noticia);
    					$noticia = str_replace("[/i]", "</i>", $noticia);
    					$noticia = str_replace("[img][center]", "[center][img]", $noticia);
    					$noticia = str_replace("[/center][/img]", "[/img][/center]", $noticia);
    					$noticia = str_replace("[img][left]", "[left][img]", $noticia);
    					$noticia = str_replace("[/left][/img]", "[/img][/left]", $noticia);
    					$noticia = str_replace("[img][right]", "[right][img]", $noticia);
    					$noticia = str_replace("[/right][/img]", "[/img][/right]", $noticia);
    					$noticia = str_replace("[left]", "<div style='text-align:left'>", $noticia);
    					$noticia = str_replace("[/left]", "</div>", $noticia);
    					$noticia = str_replace("[right]", "<div style='text-align:right'>", $noticia);
    					$noticia = str_replace("[/right]", "</div>", $noticia);
    					$noticia = str_replace("[center]", "<div style='text-align:center'>", $noticia);
    					$noticia = str_replace("[/center]", "</div>", $noticia);
    					$noticia = str_replace("[link]", "<a src='", $noticia);
    					$noticia = str_replace("[/link]", "'></a>", $noticia);
    					$noticia = str_replace("[img]", "<img style='max-width:100%;'src='", $noticia);
    					$noticia = str_replace("[/img]", "'/>", $noticia);
    					$noticia = str_replace("[title]", "<div class='titularNoticias'>
    						", $noticia);
    					$noticia = str_replace("[/title]", "</div>", $noticia);
    					print($noticia . "</div>");
    					?>
    				</div>
    			</div>
    		</div>
    		<div>
    		</div>
    	</div>
    </div>
</header>
<footer id="footerpad" style="background-color: #0F1923;">
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
	<script src="../../assets/js/jquery.min.js"></script>
	<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/javascript.js"></script>
</body>
</html>