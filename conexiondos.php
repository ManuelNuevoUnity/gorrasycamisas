<?php
    include("conexion.php");
    $conec=conectar();
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido']; 
    $clave=$_POST['clave']; 
    try{
        $sql="INSERT INTO miu(NOMBRE,APELLIDO,CLAVE) VALUES 
                             ('$nombre','$apellido','$clave') ";
    $ejecutar=mysqli_query($conec,$sql);
    echo "datos guardados";

    }
    catch(Exception)
    {
        echo "Error al intentar guardar los datos";
    }
?>