<?php
   $name= $_REQUEST["name"];
   $type_document= $_REQUEST["type_document"];
   $number_document= $_REQUEST["number_document"];
   $date_birth= $_REQUEST["date_birth"];
   $sex= $_REQUEST["sex"];
   $email= $_REQUEST["email"];
   $password= $_REQUEST["password"];
   
    // 1. Connect to database
    $host = "localhost";
    $dbname = "system_computer_db_2021";
    $username = "root";
    $password = "";
    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
 
     // 2. Build sql sentence
   $sql = "INSERT INTO save_users (id,name,type_document,number_document,date_birth,sex,email,password)
   VALUES(NULL,'$name','$type_document','$number_document','$date_birth','$sex','$email','$password')";

    // 3. Prepare sql sentence
    $q = $cnx-> prepare($sql);
    
   // 4. Execute sql sentence
   $result = $q->execute();
?>
<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <title>Registro </title>
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
    <head><H1>Usuario registrado </H1></head>
    <p>Felicidades, el usuario se registro correctamente </br> 
  con la siguiente información :</p>

<table class="default">

<tr>
  <td>Nombre</td>

  <td>Tipo de Documento</td>

  <td>Numero de documento</td>

  <td>Fecha de nacimiento</td>

  <td>Sexo</td>

  <td>Correo Electronico</td>

</tr>

    <tr>
        <td> <?php echo $name ?></td>
        <td> <?php echo $type_document;
        if($type_document == 0) {
         echo "Tarjeta de Identidad";
      } else {
         echo "Cedula de Ciudadanía";
      } if ($type_document == 2){
         echo "Cedula de extranjeria";
      }
        ?>
        </td>
       
        <td> <?php echo $number_document?></td>
        <td> <?php echo $date_birth?></td>
        <td> <?php echo $sex;
         if($sex == 0) {
            echo "Femenino";
         } else {
            echo "Masculino";
         }
        ?>
      </td>
        <td> <?php echo $email?></td>

    </tr>
    <?php

?>
</table>
<br>
<p>Para iniciar sesión: </p>
 <a href="Login.php"><input type="button" value="Iniciar Sesión"></a>

 <p>Para registrar otro usuario: </p>
 <a href="SignUp_page.php"><input type="button" value="Volver al formulario"></a>

<footer id="main-footer">
		<a href="https://web.facebook.com/Systemcomputermzls/?_rdc=1&_rdr">Facebook</a>
				<a href="https://twitter.com"> Twitter</a>
				<a href="https://instagram.com"> Instragram </a>
		<p>&copy; 2021 <a> System Computer Manizales</a></p>
	
	</footer> 

</body>

</html>
