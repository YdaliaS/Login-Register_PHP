<?php
	// llamo a la funcion session para iniciar nuestra sesion en PHP
	session_start();

	//Llamna al archivo db_conn.php
	require 'home/connection/db_conn.php';

	// Llamar al metodo conectarMySQL()
	$conect = Conexion::conectarMySQL();

	// Si presiona iniciar session
	if (isset($_POST['login'])){
		// Reemplaza los parametros por los datos enviados por el usuario
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Prepara la sentencia SQL
		$query = $conect->prepare("SELECT * FROM user WHERE email=:email");
		// Reemplaza los parametros
		$query->bindParam('email', $email, PDO::PARAM_STR);
		// Ejecuta la sentencia
		$query->execute();

		// Convierte la sentencia en String
		$resul = $query->fetch(PDO::FETCH_ASSOC);

		//si el usuario con el email existe que nos redireccione a alguna pagina
		$pass = $resul['password'];
		if($password == $pass){
			// la session se usa con el nombre de usuario
			$user = $resul['name'];
			$_SESSION['usuario'] =$user;
			// Te dirige al index
			header("location: home/index.php");
		}else{
			// la respuesta sera 2 para pasar al ajax
			$respuesta = 2;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/styles.css">
	<script src="https://kit.fontawesome.com/9b9e679290.js" crossorigin="anonymous"></script>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<title>login</title>
</head>
<body>
	<div  class ="container">
		<div>
			<!-- error.php -->
			<div id="mensajeerror"></div>
			<form action="" method ="POST">
				<h3>Iniciar Sesión</h3>
				<div class="fle">
					<span><i class="fa-solid fa-user" ></i></span>
					<input type="email" name="email" id="email" placeholder="Correo Electronico">
				</div>
				<div class="fle">
					<span><i class="fi fi-ss-lock" ></i></span>
					<input type="password" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Contraseña">
					<span>
						<i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
					</span>
				</div>
				<div class="fle "style="justify-content: start;">
					<input type="checkbox" name="" id="" value="">
					<label>Recuerdame</label>
				</div>
				<div class="fle">
					<button class="iniciar" type="submit" name="login">Iniciar sesión</button>
				</div>
			</form>
			<div>
				<a href="#">¿Olvidaste tu cuenta?</a>
				<span> | </span>
				<a href="register.php">Crear una cuenta nueva</a>
			</div>
		</div>
	</div>

	<script>
		const togglePassword = document.querySelector('#togglePassword');
		const password = document.querySelector('#id_password');

		togglePassword.addEventListener('click', function (e) {
			// toggle the type attribute
			const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
			password.setAttribute('type', type);
			// toggle the eye slash icon
			this.classList.toggle('fa-eye-slash');

		});
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		// recoge la variable enviada por el php
		var res = <?php echo $respuesta;?>;

		if(res == 2){
			// Si es 2 va a mostrar la pagina error.php
			$.get('error.php', function(mensaje, estado){
				// Se va a mostrar en el div con el id mensajeerror
				$('#mensajeerror').html(mensaje);
			});
		}
	</script>
</body>
</html>