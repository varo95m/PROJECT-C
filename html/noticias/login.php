<?php
session_start();
?>

<?php

if(isset($_SESSION["session_username"])){
    header("Location: introEmpleado.php");
}

if(isset($_POST["login"])){

    if(!empty($_POST['usuarioEmpleado']) && !empty($_POST['claveEmpleado'])) {
        $usuarioEmpleado=$_POST['usuarioEmpleado'];
        $claveEmpleado=$_POST['claveEmpleado'];
        $con = mysqli_connect("localhost", "root", "", "valorantesp");
        $consulta =mysqli_query($con, "SELECT * FROM redactores WHERE USER='".$usuarioEmpleado."' AND PASSWORD='".$claveEmpleado."'");

        $numeroFilas=mysqli_num_rows($consulta);
        if($numeroFilas!=0){
            while($fila=mysqli_fetch_assoc($consulta))
            {
                $bdUsuarioEmpleado=$fila['user'];
                $bdClaveEmpleado=$fila['password'];
            }

            if($usuarioEmpleado == $bdUsuarioEmpleado && $claveEmpleado == $bdClaveEmpleado){
                $_SESSION['session_username']=$usuarioEmpleado;

                /* Redireccionar el navegador */
                header("Location: redactores.php");
            }
        } else {

         $mensaje =  "Nombre de usuario o contraseña invalida!";
     }

 } else {
    $mensaje = "Todos los campos son requeridos!";
}
}
?>
<body style="background-color: #0F1923;">
    <div style="text-align: center; margin-top: 50px">
        <h1 style="font-size: 70px; color: white">VALORANT ESP</h1>
        <form name="loginform" id="loginform" action="" method="POST">
            <p>
                <label style="color: white" for="user_login">Usuario<br />
                    <input type="text" name="usuarioEmpleado" id="usuarioEmpleado" class="input" value="" size="20" />
                </label>
            </p>
            <p>
                <label style="color: white" for="user_pass">Contraseña<br />
                    <input type="password" name="claveEmpleado" id="claveEmpleado" class="input" value="" size="20" />
                </label>
            </p>
            <p class="submit">
                <input type="submit" name="login" class="button" value="Entrar" />
            </p>

        </form>
    </div>
    <?php if (!empty($mensaje)) {echo "<p class=\"error\">" . "MENSAJE: ". $mensaje . "</p>";} ?>
</body>