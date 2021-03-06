<?php 
$tipo = $_POST['tipo'];

if($tipo == 'insert'){
    $nombre = $_POST['nombre'];
    $cedula = $_POST['cedula'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $horario = $_POST['horario'];
    $transporte = $_POST['transporte'];
    $pass = $_POST['pass'];

    try {
        include ('bd.php');
        $stmt = $conn->prepare("INSERT INTO repartidor(id, nombres, correo, telefone,transporte, horario, pass) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param('sssssss',$cedula, $nombre, $correo, $telefono, $transporte, $horario, $pass);
        $stmt->execute();
        if($stmt->affected_rows>0){
            $respuesta = array(
                'respuesta'=>'correcto'
            );
        }else{
            $respuesta = array(
                'respuesta'=>'error'
            );
        }
        $stmt->close();
        $conn->close();
        echo json_encode($respuesta);

    }catch(Exception $e){
        $respuesta = array(
            'error' => $e->getMessage()
        );
    }


}
if($tipo == 'login'){
    include ('bd.php');
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $query = "SELECT pass, correo from repartidor where correo = '$user'";
    $resultado = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($resultado)){
        $respuesta = array(
            'pass' => $row['pass'],
            'user' => $row['correo'],
            'respuesta' => 'correcto'
        );
    }
    echo json_encode($respuesta);
}




?>