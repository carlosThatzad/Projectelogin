<?php
	include 'conexion.php';

	if(isset($_POST['name'])&&!empty($_POST['contrasenya'])){//comprobacion si lo que se envia esta lleno
			$name=$_POST['name'];
			$contrasenya=$_POST['contrasenya'];

			$pregunta=$dbcon->prepare("SELECT name,password FROM usuarios WHERE name=:name AND password=:contrasenya");
			$pregunta->bindParam(':name',$name);
			$pregunta->bindParam(':contrasenya',$contrasenya);
			$resposta=$pregunta->execute();

if($pregunta->rowCount()==1){
	if($_POST['cookie']){
			setcookie('dadesn',$name,time()+365*24*60*60);//establecemos la cookie con un  tiempo de un año 
			setcookie('dadesp',$contrasenya,time()+365*24*60*60);
	}

	session_start();
	$_SESSION['name']= $name;
	header('Location: espaciouser.php');//redireccion al espacio del usuario si todo ha salido bien 
}
}

if(isset($_POST['EXIT'])){
	session_destroy();
	//echo "SE HA DESTRUIDO LA SESSION";
	header('Location: index.php');
}
?>