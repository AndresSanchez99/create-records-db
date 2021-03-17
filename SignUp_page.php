<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8″ />
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Registro de usuarios</title>
    <link rel="icon" href="img/logosystemc.ico">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
		<link rel="stylesheet" href="css/styles2.css" type="text/css">
</head>
<body>
<header id="main-header">
		<a id="logo-header" href="">
			<span class="site-name">SCM</span>
			<span class="site-desc">A tu servicio</span>
		</a>
	</header>
    <main>
    <section id="main-content">
    <h1>Registro </h1>
    <center>   <p>Por favor completa los siguientes campos para registrarte </p>

 <FORM action="save_users.php" method="POST">
    Nombre : <br/> <INPUT type="text" name="name" required="required"> <br/>
    Tipo de documento :
    <INPUT type="radio" name="type_document" value="0"> Tarjeta de identidad
    <INPUT type="radio" name="type_document" value="1"> Cedula de ciudadanía
    <INPUT type="radio" name="type_document" value="2"> Cedula de extranjería<br/>
    Número de documento : <br/> <INPUT type="text" name="number_document" required="required"><br/>
    Fecha de nacimiento: <br/>
    <input type="date" id="start" name="date_birth"
     value="2021-01-01"
       min="1965-01-01" max="2030-01-01" required="required"> <br/>
    Sexo : 
    <INPUT type="radio"name="sex" value="0"> Femenino
    <INPUT type="radio" name="sex" value="1"> Masculino
    <INPUT type="radio" name="sex" value="2"> Otro<br/>
    Correo electronico : <br/> <INPUT type="email" name="email" required="required"> <br/>
    Contraseña : <br/> <INPUT type="password" name="password" required="required"><br/>
    <br/><INPUT type="submit" value="Almacenar datos"> <INPUT type="reset">
    </P>
 </FORM>
</center>
</section>
</main>
 <footer id="main-footer">
	
				<a href="https://web.facebook.com/Systemcomputermzls/?_rdc=1&_rdr">Facebook</a>
				<a href="https://twitter.com"> Twitter</a>
				<a href="https://instagram.com"> Instragram </a>
		<p>&copy; 2021 <a> System Computer Manizales</a></p>
		<p><span class="oi oi-inbox"></span>Systemcomputermzls@gmail.com</p>
	
	</footer> 
 </body>

</html>