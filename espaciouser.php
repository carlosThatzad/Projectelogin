
<?php include('controladorinicio.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<div class="w3-container w3-black">
        <h1>Bienvenido <?php echo $_SESSION['name']?></h1>/
    </div>
</head> 
<body>
	<h1>Este es tu espacio</h1>
	<form method="POST" action="<?= $_SERVER[PHP_SELF];?>"> 
		<img clas="col-4" src="hola.png"><br>
		<input class="w3-btn w3-red " type="submit" name="EXIT" value="DESCONECTAR"> <!--Utilizaremos esto para desconectarnos-->
	</form>
</body>
</html>