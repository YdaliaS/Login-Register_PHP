<?php
    //incluir el archivo de conexion
    include_once('home/connection/db_conn.php');

	// Llamar al metodo conectarMySQL()
	$conect = Conexion::conectarMySQL();

    //verificar si el form ha sido enviado ,insertar
    //data de usuario dentro de la base de datos
    if(isset($_POST['register'])){
		// Reemplaza losparametros por los ingresados por el usario
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepara la sentencia SQL
    $query = $conect->prepare("SELECT * FROM user WHERE dni=:dni and email=:email");
	// Reemplaza los parametros
	$query->bindParam("dni", $dni, PDO::PARAM_STR);
	$query->bindParam("email", $email, PDO::PARAM_STR);
	// Ejecuta la sentencia SQL
    $query->execute();

	// Verifica si el email se repite
    if($query->rowCount() > 0){
		// El usuario con este email email ya existe
		echo '<div style="z-index: 100; position: absolute; bottom: 500px;color: #000; padding: 10px; background: #ffffff65; border-radius: 10px;">El usuario con este email <?php echo $email ?> ya existe</div>';
    }else{
        // Prepara la ejecucion
        $query = $conect->prepare("INSERT INTO user (name,dni,email,password)VALUES(:name, :dni, :email, :password);");
		//Insertar la data dentro de la base de datos
        $query->bindParam(":name", $name, PDO::PARAM_STR);
        $query->bindParam(":dni", $dni, PDO::PARAM_STR);
        $query->bindParam(":email", $email, PDO::PARAM_STR);
        $query->bindParam(":password", $password, PDO::PARAM_STR);

		// Ejecuta la sentencia
        $result = $query->execute();
		//si la data ha sido insertada exitosamente
        if($result){
			echo '<div style="z-index: 100; position: absolute; bottom: 500px;color: #000; padding: 10px; background: #ffffff65; border-radius: 10px;">Los datos fueron guardados exitosamente</div>';
		}else{
			echo '<div style="z-index: 100; position: absolute; bottom: 500px;color: #000; padding: 10px; background: #ffffff65; border-radius: 10px;">El usuario y email no estan registrados</div>'.mysqli_error($conn);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/9b9e679290.js" crossorigin="anonymous"></script>
	<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
	<title>Register</title>
</head>
<body>
	<div class ="container">
		<div class="form-group">
			<form action="" method ="POST" class="formulario">
				<h3>Registrate</h3>
				<div class="fle formulario__grupo" id="formulario">
					<span><i class="fa-solid fa-user" ></i></span>
					<input type="text" name="name" id="name" placeholder="Nombre">
				</div>
                <div class="fle">
					<span><i class="fa-solid fa-address-card"></i></span>
					<input style="margin-right: 5px;" type="text" name="dni" id="dni" placeholder="Dni">
				</div>
                <div class="fle">
					<span><i class="fa-solid fa-envelope"></i></span>
					<input type="email" name="email" id="email" placeholder="Correo Electrónico">
				</div>
				<div class="fle">
					<span><i class="fa-solid fa-key"></i></span>
					<input type="password" name="password" autocomplete="current-password" required="" id="id_password" placeholder="Contraseña">
					<span>
						<i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
					</span>
				</div>
				<div class="fle">
					<button class="iniciar" type="submit" name="register" >Registrarse</button>
				</div>
			</form>
			<div class="fle">
				<a href="login.php">¿Ya tienes una cuenta?</a>
			</div>
		</div>
	</div>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
	<script src="../js/formulario.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
</body>
</html>