<?php
    include("conexion.php");
    $conec=conectar();
    $Nombre=$_POST['Nombre'];
    $Apellido=$_POST['Apellido'];  
    $Contrasena=$_POST['Contrasena']; 
    try{
        $sql="INSERT INTO usuario(NOMBRE,APELLIDO,CONTRASEÑA) VALUES 
                             ('$Nombre','$Apellido','$Contrasena') ";
    $ejecutar=mysqli_query($conec,$sql);
    echo "datos guardados";

    }
    catch(Exception)
    {
        echo "Error al intentar guardar los datos";
    }
?>