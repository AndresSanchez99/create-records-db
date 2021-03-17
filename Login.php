<?php
   // 1. Connect to database
   $host = "localhost";
   $dbname = "system_computer_db_2021";
   $username = "root";
   $password = "";
   $cnx = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

   // 2. Build sql sentence
   $sql = "SELECT id,name,email FROM save_users";

   // 3. Prepare sql sentence
	   $q = $cnx-> prepare($sql);
    
	// 4. Execute sql sentence
	   $result = $q->execute();

	$users = $q->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="utf-8">
	<title>SYSTEM COMPUTER MANIZALES</title>
	<link rel="icon" href="img/logosystemc.ico">
	<link rel="stylesheet" href="css/styleIndex.css" type="text/css">
	
	
</head>
<body background="img/fondo.jpg" style="background-repeat: no-repeat;
background-position: center center;" width:100 height:100>

	<main>
	<h1>SYSTEM COMPUTER MANIZALES</h1>
		<section id="main-content" >
				<center><header>
				<h2>Iniciar Sesión</h2>
				<p>Para adquirir algunos de nuestros servicios tienes que ingresar como usuario <br/>
			Recuerda que para iniciar sesión tienes que estar registrado con anterioridad </p>
				</header>
				<div class="content">
				<FORM action="homepage.html" method="POST">
				Nombre : <br/>  <select name="name" required= "required">
					<?php
					for($i=0; $i<count($users); $i++) {
						?>
						<option value="<?php echo $users[$i]['id'] ?>"> 
						<?php echo $users[$i]['name'] ?></option>
						<?php
					}
						?>
            </select>  <br/>
				Correo : <br/>  <select name="email" required= "required">
					<?php
					for($i=0; $i<count($users); $i++) {
						?>
						<option value="<?php echo $users[$i]['id'] ?>"> 
						<?php echo $users[$i]['email'] ?></option>
						<?php
					}
						?>
            </select>  <br/>
				Contraseña : <br/> <INPUT type="password" name ="password" required="required"> <br/> 
					<br/><INPUT type="submit" value="Ingresar"> <INPUT type="reset">
					 </FORM>
		</main>
</body>
        
</html>