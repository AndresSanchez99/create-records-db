<?php
   $user= $_REQUEST["user"];
   $email= $_REQUEST["email"];
   $product= $_REQUEST["product"];
   $description= $_REQUEST["description"];
   
    // 1. Connect to database
    $host = "localhost";
    $dbname = "system_computer_db_2021";
    $username = "root";
    $password = "";
    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
 
     // 2. Build sql sentence
   $sql = "INSERT INTO save_product_request (id,id_user,email,id_product,description)
   VALUES(NULL,'$user','$email','$product','$description')";

    // 3. Prepare sql sentence
    $q = $cnx-> prepare($sql);
    
   // 4. Execute sql sentence
   $result = $q->execute();
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <title>Solicitudes de Productos</title>
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

  <td>Correo Electronico</td>

  <td>Producto</td>

  <td>Descripción</td>

</tr>

    <tr>
        <td> <?php echo $user ?></td>
        <td> <?php echo $email ?></td>
        <td> <?php echo $product; 
        if($product == 0) {
          echo "disco duro 1 tera";
       } if($product == 1) {
          echo "Teclado y mouse inalámbrico";
       }
       if($product == 2 ) {
          echo "Disco duro de 2 teras";
       }
       if($product == 3 ) {
          echo "Control inalámbrico para juegos en pc";
       } else {
          echo "Parlantes para pc";
       }
        ?></td>
        <td> <?php echo $description?></td>
    </tr>
    <?php


?>
</table>
<br>
<p>Si deseas solicitar un nuevo producto: </p>
<center> </br> <a href="purchase_products.php"><input type="button" value="Volver al formulario"></a>

<footer id="main-footer">
		<a href="https://web.facebook.com/Systemcomputermzls/?_rdc=1&_rdr">Facebook</a>
				<a href="https://twitter.com"> Twitter</a>
				<a href="https://instagram.com"> Instragram </a>
		<p>&copy; 2021 <a> System Computer Manizales</a></p>
	
	</footer> 

</body>

</html>
