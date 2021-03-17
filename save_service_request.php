<?php
   $user= $_REQUEST["user"];
   $services= $_REQUEST["services"];
   $description= $_REQUEST["description"];
   
    // 1. Connect to database
    $host = "localhost";
    $dbname = "system_computer_db_2021";
    $username = "root";
    $password = "";
    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
 
     // 2. Build sql sentence
   $sql = "INSERT INTO save_service_request (id,id_user,id_service,description)
   VALUES(NULL,'$user','$services','$description')";

    // 3. Prepare sql sentence
    $q = $cnx-> prepare($sql);
    
   // 4. Execute sql sentence
   $result = $q->execute();
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <title>Solicitudes de Servicio</title>
    <link rel="stylesheet" href="css/styletable.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css" type="text/css">
    <link rel="shortcut icon" type="imgage/x-icon" href="img/logosystemc.ico">

</head>
<body> 
<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">SCM</span>
			<span class="site-desc">A tu servicio</span>
		</a>

		<nav>
			<ul>
        <li><a href="homepage.html">Inicio</a></li>
				<li><a href="Services.html">Servicios</a></li>
        <li><a href="purchase_services.php">Solicitar Servicio</a></li>
        <li><a href="Products.html">Productos</a></li>
        <li><a href="purchase_products.php">Solicitar Producto</a></li>
        
				
			</ul>
		</nav>

	</header>
    <center>
    <head><H1>Solicitud registrada</H1></head>
    <p>Felicidades, su solicitud se registro correctamente </br> 
  con la siguiente información :</p>

<table class="default">

<tr>

  <td>Nombre</td>

  <td>Servicio</td>

  <td>Descripción</td>

</tr>

    <tr>
        <td> <?php echo $user ?></td>
        <td> <?php echo $services; 
         if($services == 0) {
            echo "Formateo e instalación sistema operativo";
         } if($services == 1) {
            echo "Mantenimiento preventivo";
         }
         if($services == 2 ) {
            echo "Diagnostico de software y Hardware";
         }
         if($services == 3 ) {
            echo "Instalación de Programas";
         } else {
            echo "Instalación de Juegos";
         }
        ?></td>
        <td> <?php echo $description?></td>
    </tr>
    <?php


?>
</table>
<br>
<p>Si deseas solicitar un nuevo servicio: </p>

<center> </br> <a href="purchase_services.php"><input type="button" value="Volver al formulario"></a>

<footer id="main-footer">
		<a href="https://web.facebook.com/Systemcomputermzls/?_rdc=1&_rdr">Facebook</a>
				<a href="https://twitter.com"> Twitter</a>
				<a href="https://instagram.com"> Instragram </a>
		<p>&copy; 2021 <a> System Computer Manizales</a></p>
	
	</footer> 

</body>

</html>