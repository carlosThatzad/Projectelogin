<?php

$bdusuario=['name'=>'carlos1',
			'contrasenya'=>'linuxlinux']; //datos de la conexion de la base de datos para que establezca la conexion 
try{
	$dbcon= new PDO('mysql:host=localhost;dbname=carloslogin',$bdusuario['name'],$bdusuario['contrasenya']);}
catch(PDOException $error){echo $error->getMessage();}

//hacemos uso del try y el catch para intentar hacer la conexion en caso negativo nos devuelve error con el catch
?>

