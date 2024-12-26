<?php
 function conectar(){
    $server="localhost";
    $user="root";
    $pass="";
    $bd="misistematico";
    $conexion=new mysqli($server,$user,$pass,$bd);
    return $conexion;
 }
?>