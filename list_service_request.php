<?php 
    // 1. Connect to database
    $host = "localhost";
    $dbname = "system_computer_db_2021";
    $username = "root";
    $password = "";
    $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
 
     // 2. Build sql sentence
   $sql = "SELECT s.name as user_name, s.number_document, s.email, c.name as service_name, c.price, e.description
   FROM save_users as s JOIN save_service_request e ON s.id = e.id_user
   JOIN services c ON e.id_service = c.id ORDER By s.name ASC";

    // 3. Prepare sql sentence
    $q = $cnx-> prepare($sql);
    
   // 4. Execute sql sentence
   $result = $q->execute();
    
   $request = $q-> fetchAll();
   
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
    <head><H1>Lista Solicitudes de Servicio</H1></head>
    
<table class="default">

<tr>

  <td>Nombre</td>

  <td>Numero Documento</td>

  <td>Email</td>

  <td>Servicio</td>

  <td>Precio</td>

  <td>Descripción</td>

</tr>
<?php
for($i=0;$i<count($request);$i++) {
    ?>
    <tr>
        <td> <?php echo $request[$i]["user_name"]?></td>
        <td> <?php echo $request[$i]["number_document"]?></td>
        <td> <?php echo $request[$i]["email"]?></td>
        <td> <?php echo $request[$i]["service_name"]?></td>
        <td> <?php echo $request[$i]["price"]?></td>
        <td> <?php echo $request[$i]["description"]?></td>
    </tr>
    <?php
}

?>


</table>
<footer id="main-footer">
		<a href="https://web.facebook.com/Systemcomputermzls/?_rdc=1&_rdr">Facebook</a>
				<a href="https://twitter.com"> Twitter</a>
				<a href="https://instagram.com"> Instragram </a>
		<p>&copy; 2021 <a> System Computer Manizales</a></p>
	
	</footer>
</center>
</body>
</html>