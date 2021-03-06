<?php
    require_once ('funcionesBDlogin.php');   
    
    if ($_POST['nombres']=='' or $_POST['nombreuser']=='' or $_POST['email']=='' or $_POST['contraseña']==''){ // Valido que traiga informacion
        $_SESSION['mensaje'] = 'Datos obligatorios';
       header('Location: login.php');     
    }//end if

    if (insertarUser($_POST)){
        $msj = "Usuario guardado correctamente";
    
    }else{
        $msj = "Problemas al guardar Usuario";
        
    }//end if
    
    $_SESSION['mensaje'] = $msj;
    

    header('Location: login.php');

    

?>