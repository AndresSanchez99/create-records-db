<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>CONTACTO</title>

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
        <li><a href="purchase_products.php">Solicitar Producto</a></li>
        
				
			</ul>
		</nav>

	</header>
    <center><head><H1>CONTACTO</H1></head>
    <h2>Si deseas que te contactemos , por favor rellena los siguientes campos</h2>
    <FORM action="save-contact.php" method="POST">
    Nombre : <br/> <INPUT type="text" name="name" required = "required"> <br/>
    Correo Electronico: <br/> <INPUT type="email" name ="email" required = "required"> <br/>
    Celular : <br/> <INPUT type="text" name ="cellphone" required = "required"> <br/>
    Descripción : <br/>
            <textarea name="description" rows="10" cols="40" required = "required">Escribenos el motivo de tu solicitud</textarea>
        <br/><INPUT type="submit" value="Enviar Solicitud"> <INPUT type="reset">
        </P>
     </FORM>
    </br>
    </center>
    <center>
        <h2>Nuestra ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.283429739774!2d-75.5078516857364!3d5.0577363398676765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e47655e38d4497b%3A0x75001d40f2a36fb9!2sCra.%2033%20%26%20Cl.%2049b%2C%20Manizales%2C%20Caldas!5e0!3m2!1ses!2sco!4v1614234385042!5m2!1ses!2sco"
         width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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

