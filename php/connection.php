 <?php
 if(session_status()!= PHP_SESSION_ACTIVE){
 	session_start();
 };
 $con = mysqli_connect("localhost", "root", "", "valorantesp");
 mysqli_set_charset($con,'UTF8');
 ?>