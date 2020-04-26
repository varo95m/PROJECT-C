<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script type=" text/javascript" src="assets/js/redactar.js"></script> 
	<script src="https://cdn.tiny.cloud/1/ly9vdm5lktddv34vjkv3up6n997rg9w0ogd3ancdhk8g1tqp/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

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
	<script>
		tinymce.init({
			selector: '#mytextarea',
			plugins: "image link",
			menubar: "insert link",
			images_upload_url: 'fotos_noticias/',
			width : 794.953,
		});
	</script>
	<?php
	session_start();
	?>

	<?php
	//font forget to change the foto upload from the textarea to all images. Set a new folder for every notice
	if(isset($_POST['submit'])){
		$titular = $_POST['titular'];
		$tipo = $_POST['tipo'];
		$slug = str_replace(" ", "-", $titular);
		$foto = basename( $_FILES['uploadedfile']['name']);
		date_default_timezone_set('Europe/London');
		$fecha = date('m/d/Y h:i:s a', time());
        //test the next line 
		$con = mysqli_connect("localhost", "root", "", "valorantesp");
		$consulta =  $con->query("SELECT NOMBRE, APELLIDO_UNO, APELLIDO_DOS FROM redactores WHERE user='" . $_SESSION["session_username"] . "'")  or die($con->error);
		$fila = $consulta->fetch_assoc();
		$escritor = $fila['NOMBRE'] . " " . $fila['APELLIDO_UNO'] . " " . $fila['APELLIDO_DOS'];
		mysqli_set_charset($con,'UTF8');
		$noticia = mysqli_real_escape_string($con, $_POST['noticia']);
		$descMeta = substr ($noticia , 0 , 145);
		$consulta = "INSERT into NOTICIAS(tipo,titular,noticia,foto,escritor,fecha) values 
		('" . $tipo . "','" . $titular . "','" . $noticia . "','". $foto . "','". $escritor . "','" . $fecha . "'" . ")";
		mysqli_query($con, $consulta);
		$newId = mysqli_insert_id($con);
		//Change target path to upload the image in the desired folder .
		$target_path = "fotos_noticias/" . $newId . "/";
		mkdir($target_path, 0777);
		$target_path= $target_path . basename( $_FILES['uploadedfile']['name']); 
		move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);
		copy($target_path . "/". $foto, "fotos_head/" .$foto);
		print ("<script languaje='javascript'>
			alert('Noticia enviada. Gracias!')
			</script>");
	}
	?>
</head>

<body style="background-color:#0F1923">
	<div style="display: block;">
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
				</ul>
			</div>
		</div>
	</nav>
	<header class=" text-center text-white d-flex" style="margin-top: 100px">
		<div id="menuNoticias">
			<div>
				<div style="width: 95%;margin:auto; text-align:center">
					<form enctype="multipart/form-data" action="redactores.php" method="POST">
						<br>
						Titular <p><input id="titular" type="text" name="titular" maxlength="38" required></p>
						Noticia<p>
							<div style="text-align:center;">
								<div style="margin:0px auto;width:75%;">
									<textarea id="mytextarea" name="noticia"></textarea>
								</div>
							</div>

						</p>
						Tipo Noticia [ "Lo que va entre corchetes" ] <p><input id="texto" type="text" name="tipo" maxlength="28" required></p>
						Foto encabezado (Formato 16:9)<br><br>
						<input name="uploadedfile" type="file" required /><br><br>
						<button type="submit" value="Subir archivo" name="submit">Enviar</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</body>

</html>
</body>

</html>