<?php

//Conexion
    $direccion_bd = "localhost";
    $nombre_bd = "lafruteria";
    $usuario_bd = "root";
    $contraseña_bd = "";
//Datos
    $nuevo= $_GET["nuevo"];
    $art= $_GET["art"];
    $prec= $_GET["prec"];
    $stock= $_GET["stock"];
//Consulta
    $conexion = mysqli_connect ($direccion_bd, $usuario_bd, $contraseña_bd, $nombre_bd);
    $consulta = "INSERT INTO PRODUCTOS (idproducto, producto, precio, stock) VALUES ('$art', '$nuevo','$prec','$stock')";
    $resultado = mysqli_query ($conexion, $consulta);
 if($resultado==false){
    
    echo "ERROR"."<br>";
 } 
 else{
    echo "producto insertado"."<br>";
 }
 //delet
 $borrar=$_GET["borrar"];
 $consulta2 = "DELETE FROM PRODUCTOS WHERE producto= '$borrar'";
 $resultado2 = mysqli_query ($conexion, $consulta2);
 if($resultado2==false){
    
    echo "ERROR";
 } 
 else{
    echo "producto eliminado";
 }
?>


