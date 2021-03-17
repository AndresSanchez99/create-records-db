<?php
   // 1. Connect to database
   $host = "localhost";
   $dbname = "system_computer_db_2021";
   $username = "root";
   $password = "";
   $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

   // 2. Build sql sentence
   $sql = "SELECT id,name FROM save_users";

   // 3. Prepare sql sentence
	   $q = $cnx-> prepare($sql);
    
	// 4. Execute sql sentence
	   $result = $q->execute();

	$users = $q->fetchAll();

     // 2. Build sql sentence
   $sql = "SELECT id,name,price FROM products";

   // 3. Prepare sql sentence
	   $q = $cnx-> prepare($sql);
    
	// 4. Execute sql sentence
	   $result = $q->execute();

	$products = $q->fetchAll();
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Solicitar Producto</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css" type="text/css">
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
        <li><a href="purchase_services.php">Solicitar Servicio</a></li>
        <li><a href="Products.html">Productos</a></li>
        <li><a href="Contact.php">Contacto</a></li>
        
			</ul>
		</nav>

	</header>
    <center><head><H1>Solicitar producto</H1></head>
    <p> Para solicitar un producto primero tienes que estar registrado, <br/>
    Por favor llena los siguientes datos para que podamos contactarte y darte los detalles del producto que requieres</p>
    <FORM action="save_product_request.php" method="POST">
    Nombre Completo: <br/> <select name="user" required= "required">
					<?php
					for($i=0; $i<count($users); $i++) {
						?>
						<option value="<?php echo $users[$i]['id'] ?>"> 
						<?php echo $users[$i]['name'] ?></option>
						<?php
					}
						?>
            </select>  <br/>
    Correo electronico : <br/> <INPUT type="email" name="email" required = "required"> <br/>
    Productos :  <br/>  <select name="product" required= "required">
					<?php
					for($i=0; $i<count($products); $i++) {
						?>
						<option value="<?php echo $products[$i]['id'] ?>"> 
						<?php echo $products[$i]['name'] ?></option>
						<?php
					}
						?>
            </select>  <br/>
    Descripción : <br/>
            <textarea name="description" rows="10" cols="40">Escribenos detalladamente el producto que requieres</textarea>
        <br/><INPUT type="submit" value="Enviar Solicitud"> <INPUT type="reset">
        </P>
     </FORM>
    </br>
    </center>
    <center>
   <p> <input type="button" onclick="history.back()" name="volver atrás" value="Volver atrás"></p>
    </center>
    <footer id="main-footer">
		<a href="https://web.facebook.com/Systemcomputermzls/?_rdc=1&_rdr">Facebook</a>
				<a href="https://twitter.com"> Twitter</a>
				<a href="https://instagram.com"> Instragram </a>
		<p>&copy; 2021 <a> System Computer Manizales</a></p>
	
	</footer> 

</body>

</html>

