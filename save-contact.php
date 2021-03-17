<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>CONTACTO</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css" type="text/css">
    <link rel="stylesheet" href="css/styletable.css" type="text/css">
    <link rel="shortcut icon" type="imgage/x-icon" href="img/logosystemc.ico">


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
                <li><a href="Products.html">Productos</a></li>
				
			</ul>
		</nav>

	</header>
    <?php
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $cellphone = $_REQUEST["cellphone"];   
    $description = $_REQUEST["description"];

     // 1. Connect to database
   $host = "localhost";
   $dbname = "system_computer_db_2021";
   $username = "root";
   $password = "";
   $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

    // 2. Build sql sentence
    $sql = "INSERT INTO clients_contact (id,name,email,cellphone,description)
    VALUES(NULL,'$name','$email','$cellphone','$description')";

     // 3. Prepare sql sentence
     $q = $cnx-> prepare($sql);

     // 4. Execute sql sentence
     $result = $q->execute();

?>
    <center>
    <head><H1>Solicitud registrada</H1></head>
    <p>Felicidades, su solicitud de contacto se registro correctamente </br> 
  con la siguiente información :</p>

<table class="default">

<tr>

  <td>Nombre</td>

  <td>Correo Electronico</td>

  <td>Celular</td>

  <td>Descripción</td>

</tr>

    <tr>
        <td> <?php echo $name ?></td>
        <td> <?php echo $email ?></td>
        <td> <?php echo $cellphone?></td>
        <td> <?php echo $description?></td>
    </tr>
    <?php


?>
</table>
<br>
<p>Si deseas solicitar una nueva solicitud de contacto: </p>

<center> </br> <a href="contact.php"><input type="button" value="Volver al formulario"></a>

<footer id="main-footer">
		<a href="https://web.facebook.com/Systemcomputermzls/?_rdc=1&_rdr">Facebook</a>
				<a href="https://twitter.com"> Twitter</a>
				<a href="https://instagram.com"> Instragram </a>
		<p>&copy; 2021 <a> System Computer Manizales</a></p>
	
	</footer> 

</body>

</html>