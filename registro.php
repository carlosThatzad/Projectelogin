<?php
include 'iniciosession.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
     <div class="w3-container w3-black">
        <h1>BIENVENIDO A CARLOSBLOG</h1>
    </div>
</head>
<body>
<div class="w3-container w3-green ">
            <h1>Registrarse</h1>
        </div>
<div>
    <form class="w3-container" action="<?= $_SERVER[PHP_SELF];?>" method="post">
        <p>
            <label class="w3-label">NAME:</label>
            <input class="w3-input w3-border" type="text" name="name">
        </p>
        <p>
            <label class="w3-label">PASSW:</label>
            <input class="w3-input w3-border " type="password" name="contrasenya">
        </p>
        <p>
            <input type="submit" name="submit" value="registrarse">
        </p>
        <p><a href="index.php" class=" w3-btn w3-green">Torna</a></p>
    </form>

</div>
<div class=" w3-container alert alert-success" role="alert"><?php if($coincidencia==true){ ?><h1 class="alert-heading">El usuario ya esta en la base de datos</h1><?php }?></div>
</body>
</html>