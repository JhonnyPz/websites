<?php
 $conectar = mysqli_connect("127.0.0.1","root","123","jugadores");

 if (!$conectar) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

 $nombre = $_POST['Nombre'];
 $apellidos = $_POST['Apellidos'];
 $email= $_POST['Email'];
 $celular = $_POST['Celular'];
   
 $sql = "INSERT INTO usuarios (`Nombre`, `Apellidos`, `Email`, `Celular`) VALUES ('$nombre','$apellidos','$email','$celular')";
   
 $ejecutar = mysqli_query($conectar, $sql);
   
 if(!$ejecutar){
    echo "Hay algun error";
    header("Location:Form.html");
       
 }else{
    echo "Datos almacenados correctamente";
    header("Location:Database.php");
 }
?>