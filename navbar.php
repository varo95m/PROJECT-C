<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "valorantesp");
mysqli_set_charset($con,'UTF8');
$consulta = $con->query('select * from users where username="koke"') or die($con->error);
$fila = mysqli_fetch_assoc($consulta);
if(isset($_SESSION['username'])){
	?>
		<div class="container" style="margin-bottom: 5px;"><a style="font-size: 25px;" class="navbar-brand js-scroll-trigger" href="/project-C/index.html">VALORANK</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
		aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="/project-C/html/agentes/agentes.html" style="color: #ffffff;font-size: 15px;">AGENTES</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services" style="font-size: 15px;color: #ffffff;display: none">ARMAS</a></li>
				<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio" style="font-size: 15px;color: #ffffff; display: none">NOTICIAS</a></li>
				<div style="border: solid 1px white; margin-left: 20px; margin-right: 20px"></div>
				<li id="iniciarSession" class="nav-item" role="presentation">
					<a href="/project-C/html/profile.php"  class="nav-link js-scroll-trigger" style="font-size: 15px;color: #ffffff; cursor:pointer; "><?php print($fila['USERNAME'])?></a>
				</li>
				<?php
			}else{
				?>
				<div class="container" style="margin-bottom: 5px;"><a style="font-size: 25px;" class="navbar-brand js-scroll-trigger" href="/project-C/index.html">VALORANK</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false"
					aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
					<div class="collapse navbar-collapse" id="navbarResponsive">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="/project-C/html/agentes/agentes.html" style="color: #ffffff;font-size: 15px;">AGENTES</a></li>
							<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#services" style="font-size: 18px;color: #ffffff;display: none">ARMAS</a></li>
							<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#portfolio" style="font-size: 18px;color: #ffffff; display: none">NOTICIAS</a></li>
							<div style="border: solid 1px white; margin-left: 20px; margin-right: 20px"></div>
							<li id="iniciarSession" class="nav-item" role="presentation">
								<a class="nav-link js-scroll-trigger" style="font-size: 15px;color: #ffffff; cursor:pointer; ">INICIAR SESIÓN	</a>
							</li>
							<div id="iniciarSesionBox" style="display:none; position: absolute;margin-left: 135px; margin-top: 52px; border:solid 1px white; padding: 10px; color: #FF4655; background-color: #0F1923">
								<form enctype="multipart/form-data" action="/project-C/html/tournaments.php" method="POST" style="font-size: 15px">
									<p style="margin-bottom: 0">Usuario</p>
									<input style="margin-bottom: 10px; text-align: left;" id="titular" type="text" name="username" maxlength="38" required>
									<p style="margin-bottom: 0">Contraseña</p>
									<input id="titular" type="text" name="password" maxlength="38" required>
									<p class="forgetPassword">¿Has olvidado tu contraseña?</p>
									<button type="submit" value="Subir archivo" name="submit">Iniciar sesion</button>
								</form>
							</div>
							<script src="javascript.js"></script>
							<?php
						}
						?>