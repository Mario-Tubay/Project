<?php

session_start();

function conectar(){
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $base = "shopcorp";

    $cnx = mysqli_connect($host,$user,$passwd,$base); // Conectar a la BD

    if (!$cnx){
        die ("Error en conexión"); // Detiene la ejecución del programa
    }//end if

    return $cnx; // retornar enlace de conexion

}//end function

function insertarUser($datos){
    $cnx = conectar(); //establecer la conexion a la BD
    $sql = "INSERT INTO usuario
            SET 
            id = 0,
            nombres = '".trim($datos['nombres'])."',
            email = '".trim($datos['email'])."',
            contraseña = '".trim($datos['contraseña'])."',
            nombreuser = '".trim($datos['nombreuser'])."'
            "; // Query para la consulta

    $result = mysqli_query($cnx,$sql); // Ejecutar la consulta en la BD

    if (mysqli_affected_rows($cnx)<=0){ // Verificar si se inserto el usuario
        return false;
    }//end if

    return true;

}//end function


?>