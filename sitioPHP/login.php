<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/styleLR.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="img/login.svg">
		</div>
		<div class="login-content">
			<form action="login.html">
				<h2 class="title"><span style="color: #ff6339;">Inicia</span> sesión</h2> 
				<h5>Ingresa tu información de inicio de sesión</h5>
				<br>
				<div class="label" >
           			<h4>Correo Electrónico</h4>
           		</div>
           		<div class="input-div one">
           		   <div class="div">
           		   		<h5 class="inputLabel">Correo</h5>
           		   		<div class="i">
	           		   		<i class="fa fa-at"></i>
	           		    </div>
           		   		<input type="text" class="input" id="correo">
           		   </div>
           		</div>
           		<br>
           		<div class="label">
           			<h4>Contraseña</h4>
           		</div>
           		<div class="input-div pass">
           			<p>
           		   <div class="div">
           		    	<h5 class="inputLabel">Contraseña</h5>
           		    	<div class="i"> 
	           		    	<i class="fas fa-lock"></i>
	           		   </div>
           		    	<input type="password" class="input" id="password">
            	   </div>
            	</div>
            	<a href="#">Recuperar contraseña</a>
            	<input type="submit" class="btn" value="Ingresar">
            	<a href="#">¿No tienes cuenta? <span style="color: #ff6339;">Regístrate</span></a>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="js/jsLR.js"></script>
</body>
</html>
