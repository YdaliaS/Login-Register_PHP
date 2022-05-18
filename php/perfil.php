<?php

    // Inicia sesion con el nombre de usuario
    session_start();
    $user = $_SESSION['usuario'];
    // llama al archivo de conexion
    require 'home/connection/db_conn.php';
    // Llama al metodo conectarMySQL()
    $conect = Conexion::conectarMySQL();

    // Prepara la sentencia SQL
    $snt = $conect->prepare("select * from user where name=:user;");
    // Reemplaza los parametros
    $snt->bindParam(':user', $user);
    // Ejecuta la sentencia
    $snt->execute();
    // Convierte la sentencia ek String
    $fila=$snt->fetch();

    // Reemplaza variables por los que estan en la base de datos
    $nombre = $fila['name'];
    $correo = $fila['email'];
    $passwo = $fila['password'];

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>Perfil</title>
    <!-- Default stylesheets-->
    <link href="home/assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="home/assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="home/assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="home/assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="home/assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="home/assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="home/assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="home/assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="home/assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b9e679290.js" crossorigin="anonymous"></script>
    <!-- Main stylesheet and color file-->
    <link href="home/assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="home/assets/css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://proicons.netlify.app/css/icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  </head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
    <div class="page-loader">
    <div class="loader">Cargando...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="home/index.php">Mashylo</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
        <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Categorias</a>
            <ul class="dropdown-menu">
                <table class="tabless">
                <tr>
                    <td><li> <a href="pelicula/accion/accion.php">Acción</a></li></td>
                    <td><li><a href="pelicula/anime/anime.php">Animes</a></li></td>
                    <td><li><a href="pelicula/aventuras/">Aventuras</a></li></td>
                </tr>
                <tr>
                    <td><li> <a href="#">Ciencia ficcion</a></li></td>
                    <td><li><a href="#">Clásicos</a></li></td>
                    <td><li><a href="#">Comedia</a></li></td>
                </tr>
                <tr>
                    <td><li> <a href="#">Documentales</a></li></td>
                    <td><li><a href="#">Drama</a></li></td>
                    <td><li><a href="#">Fantasía</a></li></td>
                </tr>
                <tr>
                    <td><li> <a href="#">Indu</a></li></td>
                    <td><li><a href="#">Infantil</a></li></td>
                    <td><li><a href="#">Musical</a></li></td>
                </tr>
                <tr>
                    <td><li> <a href="#">Religion</a></li></td>
                    <td><li><a href="#">Romance</a></li></td>
                    <td><li><a href="#">Suspenso</a></li></td>
                </tr>
                <tr>
                    <td><li><a href="#">Terror</a></li></td>
                </tr>
                </table>
            </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Hola <?php echo $user;?></a>
            <ul class="dropdown-menu">
                <li class="dropdown">
                <a class="logouti" href="../perfil.html">
                <div>Perfil</div>
                <i style="font-size: 25px;" class="fa-regular fa-user" aria-hidden="true"></i></a></li>
                <li class="dropdown">
                <a class="logouti" href="../logout.php">
                <div>Cerrar sesion</div>
                <i style="font-size: 25px;" class="far fa-portal-enter" aria-hidden="true"></i></a></li>
            </ul>
            </li>
        </ul>
        <div id="ctn-icon-search">
            <i class="fas fa-search" id="icon-search"></i>
        </div>
        </div>
    </div>
    </nav>
    <div id="ctn-bars-search">
    <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
</div>
<ul id="box-search">
    <li><a href="pelicula/accion/accion-resistencia.php"><i class="fas fa-search"></i>Resistencia</a></li>
    <li><a href="#"><i class="fas fa-search"></i>Mujer Maravilla</a></li>
    <li><a href="#"><i class="fas fa-search"></i>Juego de ladrones</a></li>
    <li><a href="#"><i class="fas fa-search"></i>Hacker</a></li>
    <li><a href="#"><i class="fas fa-search"></i>El Gran Jefe</a></li>
    <li><a href="#"><i class="fas fa-search"></i>El Tesoro</a></li>
    <li><a href="#"><i class="fas fa-search"></i>Archie</a></li>
    <li><a href="#"><i class="fas fa-search"></i>Aliens</a></li>
</ul>
<div id="cover-ctn-search"></div>
    <section class="perfil">
    <div class="container">
        <div><h3>Mi Cuenta</h3></div>
        <div>
            <i style="font-size: 10em;" class="fi fi-rr-portrait"></i>
        </div>
        <form action="">
            <div class="input-content">
                <div class="input-file">
                    <!-- Llama a la variable nombre y el email -->
                    <input class="input-input" type="text" value="<?php echo $nombre;?>">
                    <span class="input-label">Nombre</span>
                </div>
                <div class="input-file">
                    <input class="input-input" type="text" value="<?php echo $correo;?>">
                    <span class="input-label">Email</span>
                </div>
            </div>
        </form>
    </div>
    </section>
    <div class="main showcase-page">
    <div class="form-group">
        <div class="module-small bg-dark">
        <div class="container">
            <div class="row">
            <div class="col-sm-3">
                <div class="widget">
                <h5 class="widget-title font-alt">Acerca de Mashylo
                    <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                    </div>
                </></h5>
                <p>MASHYLO:Una plataforma gratuita de ver peliculas de manera diferente.Sin duda, esta es la mejor y original,  adaptado a tu gusto.</p>Fax: 924799017
                    <p>Email:<a href="#">mashylo@gmail.com</a></p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <hr class="divider-d">
    <footer class="footer bg-dark">
        <div class="container">
        <div  class="row">
            <div class="col-sm-6">
            <p class="copyright font-alt">&copy; 2022&nbsp;<a href="../../index.php">Mashylo</a>,Todos los derechos reservados</p>
            </div>
        </div>
        </div>
    </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--
    JavaScripts
    =============================================
    -->
    <script src="home/assets/lib/jquery/dist/jquery.js"></script>
    <script src="home/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="home/assets/lib/wow/dist/wow.js"></script>
    <script src="home/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="home/assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="home/assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="home/assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="home/assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="home/assets/lib/smoothscroll.js"></script>
    <script src="home/assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="home/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="home/assets/js/plugins.js"></script>
    <script src="home/assets/js/main.js"></script>
    <script src="home/assets/js/main2.js"></script>
    <script src="home/assets/js/main3.js"></script>
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