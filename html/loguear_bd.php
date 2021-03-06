<?php
  
  include('funcionesBDlogin.php');
  $nombreuser=$_POST['nombreuser'];
  $contraseña=$_POST['contraseña'];
  
  $_SESSION['nombreuser']=$nombreuser;

  $cnx = conectar(); //establecer la conexion a la BD
  

  $sql="SELECT*FROM usuario where nombreuser='$nombreuser' and contraseña='$contraseña'";
  $resultado=mysqli_query($cnx,$sql);

  $filas=mysqli_num_rows($resultado);

  if($filas){
    
      header("location:index.php");

  }else{
      ?>
      <?php
      include("login.php");

    ?>
    <h3 class="bad">Datos erróneos. Por favor, inténtelo otra vez.</h3>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($cnx);