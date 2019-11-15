<?php
include('controladorinicio.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <div class="w3-container w3-black">
        <h1>BIENVENIDO A CARLOSBLOG</h1>
    </div>
</head>
<body>
	<div class="w3-container w3-green d-flex justify-content-center">
            <h1>Iniciar session</h1>
        </div>

	<h1 class="row justify-content-center">HOLA!</h1>
	<form action="<?= $_SERVER[PHP_SELF];?>" method="post">
		  <p>
        <label class="w3-label">
            Usuario
        </label>
        <input class="w3-input w3-border  " type="text" name="name">
    </p>
    <p>
        <label class="w3-label">Contraseña</label>
        <input class="w3-input w3-border" type="password" name="contrasenya">
    </p>
    <p>
        <!--<input class="w3-btn w3-green s" type="submit" name="entrar" value="submit">-->
        <button class="w3-btn w3-green ">Entrar</button>
        <a class="w3-btn w3-green " href="registro.php">Registrate Ahora</a>
		

	</form>
</body>
</html>