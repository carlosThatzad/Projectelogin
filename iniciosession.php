<?php
include 'conexion.php';

if(isset($_POST['submit'])&&!empty($_POST['name'])&&!empty($_POST['contrasenya'])){
	$name=$_POST['name'];
	$contrasenya=$_POST['contrasenya'];
	$pregunta=$dbcon->prepare("SELECT name FROM usuarios WHERE name=:name");//prepara la selecion de la base de datos 
	$pregunta->bindParam(':name',$name);
	$respuesta=$pregunta->execute();
	if($pregunta->rowCount()==1){
		$coincidencia= true; //Comprobacion sii se ha obtenido una fila en cuanto a coincidencia
		
		
	}
	else{
		$pregunta=$dbcon->prepare("INSERT INTO usuarios (name,password) VALUES (:name,:contrasenya)"); //preparara la insercion si es que ha salido bien
		$pregunta->bindParam(':name',$name);
		$pregunta->bindParam('contrasenya',$contrasenya);
		$respuesta=$pregunta->execute();
		session_start();
		$_SESSION['name']=$name;
		header('Location:espaciouser.php'); //redireccion a espaciouser 
	}

}



	?>