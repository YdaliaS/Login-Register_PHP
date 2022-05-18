<?php

  // Inicia la session con el nombre del usario
  session_start();

  $user = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head></head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    Document Title
    =============================================
    -->
    <title>Mashylo</title>
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9b9e679290.js" crossorigin="anonymous"></script>
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="assets/css/style2.css" rel="stylesheet">
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
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php">Mashylo</a>
          </div>
          <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav">
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Categorias</a>
                <ul class="dropdown-menu">
                  <table class="tabless">
                    <tr>
                      <td><li><a href="pelicula/accion/accion.php">Acción</a></li></td>
                      <td><li><a href="pelicula/anime/anime.php">Animes</a></li></td>
                      <td><li><a href="pelicula/aventura/aventura.php">Aventuras</a></li></td>
                    </tr>
                    <tr>
                      <td><li><a href="pelicula/ciencia-ficcion/Ciencia-Ficcion.php">Ciencia ficcion</a></li></td>
                      <td><li><a href="pelicula/clasicos/clasicos.php">Clásicos</a></li></td>
                      <td><li><a href="pelicula/comedia/comedia.php">Comedia</a></li></td>
                    </tr>
                    <tr>
                      <td><li><a href="pelicula/fantasia/fantasia.php">Fantasía</a></li></td>
                      <td><li><a href="pelicula/intantil/infantil.php">Infantil</a></li></td>
                      <td><li><a href="pelicula/religion/religion.php">Religion</a></li></td>
                    </tr>
                    <tr>
                      <td><li><a href="pelicula/romance/romance.php">Romance</a></li></td>
                      <td><li><a href="pelicula/suspenso/suspenso.php">Suspenso</a></li></td>
                      <td><li><a href="pelicula/terror/terror.php">Terror</a></li></td>
                    </tr>
                  </table>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a class="dropdown-toggle" href="#" 
              data-toggle="dropdown">Hola <?php echo $user;?></a>
                <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a  class="logouti" href="../perfil.php?id=<?php echo $user;?>">
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
        <li><a href="pelicula/accion/DobleMortal.php"><i class="fas fa-search"></i>Doble Mortal</a></li>
        <li><a href="pelicula/accion/ElGranJefe.php"><i class="fas fa-search"></i>El Gran Jefe</a></li>
        <li><a href="pelicula/accion/Hacker.php"><i class="fas fa-search"></i>Hacker</a></li>
        <li><a href="pelicula/ciencia-ficcion/ElObjetivo.php"><i class="fas fa-search"></i>El Objetivo</a></li>
        <li><a href="pelicula/clasicos/ElMillonario.php"><i class="fas fa-search"></i>El Millonario</a></li>
        <li><a href="pelicula/aventura/ElPlanetadelTesoro.php"><i class="fas fa-search"></i>El Planeta delTesoro</a></li>
        <li><a href="pelicula/aventura/Heidi.php"><i class="fas fa-search"></i>Heidi</a></li>
        <li><a href="pelicula/anime/Hakubo.php"><i class="fas fa-search"></i>Hakubo</a></li>
        <li><a href="pelicula/ciencia-ficcion/code8.php"><i class="fas fa-search"></i>Code 8</a></li>
        <li><a href="pelicula/accion/PeleadorSinLey.php"><i class="fas fa-search"></i>Peleador Sin Ley</a></li>
        <li><a href="pelicula/terror/CampamentodelTerror.php"><i class="fas fa-search"></i>Campamento del Terror</a></li>
        <li><a href="pelicula/religion/Noe.php"><i class="fas fa-search"></i>Noe</a></li>
        <li><a href="pelicula/suspenso/ObjetivoTierra.php"><i class="fas fa-search"></i>Objetivo Tierra</a></li>
        <li><a href="pelicula/religion/HijoVueleaCasa.php"><i class="fas fa-search"></i>Hijo Vuele a Casa</a></li>
        <li><a href="pelicula/ciencia-ficcion/Entre2Mundos.php"><i class="fas fa-search"></i>Entre 2 Mundos</a></li>
        <li><a href="pelicula/fantasia/EldecimoReino.php"><i class="fas fa-search"></i>El decimo Reino</a></li>
        <li><a href="pelicula/anime/GokuVsVegeta.php"><i class="fas fa-search"></i>Goku Vs Vegeta</a></li>
        <li><a href="pelicula/ciencia-ficcion/LaPresencia.php"><i class="fas fa-search"></i>La Presencia</a></li>
        <li><a href="pelicula/terror/Belzebuth.php"><i class="fas fa-search"></i>Belzebuth</a></li>
        <li><a href="pelicula/religion/DanielProfeta.php"><i class="fas fa-search"></i>Daniel Profeta</a></li>
        <li><a href="pelicula/comedia/LasLeyendasdelasZorrasBellas.php"><i class="fas fa-search"></i>Las Leyendas de las Zorras Bellas</a></li>
    </ul>
    <div id="cover-ctn-search"></div>
      <section class="bg-dark-30 showcase-page-header module parallax-bg" data-background="../../img/image2.jpg">
        <div class="titan-caption">
          <div class="caption-content">
            <div class="font-alt mb-30 titan-title-size-1">Movies</div>
            <div class="font-alt mb-40 titan-title-size-4">Mashylo</div>
            <div class="Nxx2i" style="background: linear-gradient(to top, rgb(38, 38, 45), rgba(38, 38, 45, 0.4) 70%, rgba(0, 0, 0, 0));"></div>
          </div>
        </div>
      </section>
      <div class="main showcase-page">
        <section>
          <div class="Carousel">
            <h2>Accion</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/accion/DobleMortal.php"><picture><img src="assets/images/peliculas-img/doblmortal.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/ElDiaDespues.php"><picture><img src="assets/images/peliculas-img/elDiaDespuesdeMañana.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/ElGranJefe.php"><picture><img src="assets/images/peliculas-img/ElGranJefe.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/ElMaestroDelTaiChi.php"><picture><img src="assets/images/peliculas-img/TaiChiMaster.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/Hacker.php"> <picture><img src="assets/images/peliculas-img/Hacker.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/LaMujerMaravilla.php"><picture><img src="assets/images/peliculas-img/La-Mujer-Maravilla.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/LasGuerrasInmortales.php"><picture><img src="assets/images/peliculas-img/LasGuerrasInmortales.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/LoboGuerrero.php"><picture><img src="assets/images/peliculas-img/LoboGuerrero2.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/MatameKillKone.php"><picture><img src="assets/images/peliculas-img/killkane.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/Operacion-Fortune.php"><picture><img src="assets/images/peliculas-img/operacionfortuna.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/PeleadorSinLey.php"><picture><img src="assets/images/peliculas-img/PeleadorSinLey.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/Resistencia.php"><picture><img src="assets/images/peliculas-img/resistance.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/SalvandoAlSoldadoRyan.php"><picture><img src="assets/images/peliculas-img/salvando-al-soldado-ryan.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/Subterraneo.php"><picture><img src="assets/images/peliculas-img/Metro.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/accion/WuKong.php"><picture><img src="assets/images/peliculas-img/Wukong.jpg" alt="Image"></picture></a></div></div>
                </div>
                  <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Animes</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/anime/AzurLain.php"><picture><img src="assets/images/peliculas-img/Azur_Lane.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/BigFishandBegonia.php"><picture><img src="assets/images/peliculas-img/BigFishandBegonia.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/Danmachi.php"><picture><img src="assets/images/peliculas-img/Danmachi.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/DeathParade.php"><picture><img src="assets/images/peliculas-img/DeathParade.png" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/DragonNest2.php"><picture><img src="assets/images/peliculas-img/DragónNest2.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/ElZorrodelas5Colas.php"><picture><img src="assets/images/peliculas-img/Slime-taoshite-300-nen.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/GokuVsVegeta.php"><picture><img src="assets/images/peliculas-img/gokuvsvegeta.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/Hakubo.php"><picture><img src="assets/images/peliculas-img/Hakubo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/Jaku-Chara-Tomozaki-kun.php"><picture><img src="assets/images/peliculas-img/Jaku-CharaTomozaki-kun.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/LeyendaDeHei.php"><picture><img src="assets/images/peliculas-img/LaleyendadeHei.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/LucesenelCieloielo.php"><picture><img src="assets/images/peliculas-img/LucesenelCielo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/anime/Yamada.php"><picture><img src="assets/images/peliculas-img/Yamadaylas7brujas.webp" alt="Image"></picture></a></div></div>
                </div>
                  <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Aventura</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/aventura/Aladinn.php"><picture><img src="assets/images/peliculas-img/Aladdin.jpeg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/Archie.php"><picture><img src="assets/images/peliculas-img/A_R_C_H_I_E.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/BunyanBabe.php"><picture><img src="assets/images/peliculas-img/BunyanyBabe.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/ElPlanetadelTesoro.php"><picture><img src="assets/images/peliculas-img/ElPLANETAdelTESORO.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/Hachi.php"><picture><img src="assets/images/peliculas-img/Hachi.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/Heidi.php"><picture><img src="assets/images/peliculas-img/Heidi.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/Mulan.php"><picture><img src="assets/images/peliculas-img/Mulan.jpeg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/PetherRabbit.php"><picture><img src="assets/images/peliculas-img/PeterRabbit.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/aventura/Ratatouille.php"><picture><img src="assets/images/peliculas-img/Ratatouille.webp" alt="Image"></picture></a></div></div>
                </div>
                  <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Ciencia - Ficcion</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/ALIEN-Warfare.php"><picture><img src="assets/images/peliculas-img/alien-Warfaree.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/AmenazaEspacio.php"><picture><img src="assets/images/peliculas-img/amenaza-en-el-espacio.png" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/Apex.php"><picture><img src="assets/images/peliculas-img/A-P-E-X.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/CazadoradeGigantes.php"><picture><img src="assets/images/peliculas-img/YomatoGigantes.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/Chronical-2067.php"><picture><img src="assets/images/peliculas-img/chronical2067.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/code8.php"><picture><img src="assets/images/peliculas-img/code-8-japanese-movie-cover.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/ElObjetivo.php"><picture><img src="assets/images/peliculas-img/TheObjetivo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/ElSantuariolaPoblacion.php"><picture><img src="assets/images/peliculas-img/santuario.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/Entre2Mundos.php"><picture><img src="assets/images/peliculas-img/UnAmorentre-2-Mundos.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/GeminiselPlanetaOscuro.php"><picture><img src="assets/images/peliculas-img/GeminiselPlanetaOscuro.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/LaPresencia.php"><picture><img src="assets/images/peliculas-img/LaPresencia.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/ciencia-ficcion/PiratasCaribe1.php"><picture><img src="assets/images/peliculas-img/Piratas-del-caribe1-LaMaldiciondelPerlaNegra.webp" alt="Image"></picture></a></div></div>
                </div>
                  <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Clasicos</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/clasicos/Cleopatra.php"><picture><img src="assets/images/peliculas-img/Cleopatra.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/ElAnalfabeto.php"><picture><img src="assets/images/peliculas-img/El-analfabeto.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/ElCondeMontecristo.php"><picture><img src="assets/images/peliculas-img/ElCondeMontecristo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/ElMiedoAndaenBurro.php"><picture><img src="assets/images/peliculas-img/El_miedo_no_anda_en_burro.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/ElMillonario.php"><picture><img src="assets/images/peliculas-img/Elmillonario.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/EnvueltoenlaSombra.php"><picture><img src="assets/images/peliculas-img/Envuelto_en_la_sombra.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/LaBellaylaBestia.php"><picture><img src="assets/images/peliculas-img/BellayBestia.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/LaHMoctezuma.php"><picture><img src="assets/images/peliculas-img/La-Hija-de-Moctezuma.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/LaMadrecita.php"><picture><img src="assets/images/peliculas-img/Madrecita.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/NievesdelKilimanjaro.php"><picture><img src="assets/images/peliculas-img/LasNievesdelKilimanjaro.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/Marcelino.php"><picture><img src="assets/images/peliculas-img/Marcelino_pan_y_vino.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/PríncipeyelMendigo.php"><picture><img src="assets/images/peliculas-img/El_Principe_y_el_Mendigo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/SorTequila.php"><picture><img src="assets/images/peliculas-img/SorTequila.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/clasicos/Willow.php"><picture><img src="assets/images/peliculas-img/Willow-deron-howard.webp" alt="Image"></picture></a></div></div>
                </div>
                  <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
                </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Comedia</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/comedia/ElChicoNuevo.php"><picture><img src="assets/images/peliculas-img/ElChico-Nuevo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/ElPaseodeOficina.php"><picture><img src="assets/images/peliculas-img/El_paseo_5_El_paseo_de_oficina.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/ElPermiso.php"><picture><img src="assets/images/peliculas-img/elpermiso.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/holgardulceHogar.php"><picture><img src="assets/images/peliculas-img/hogardulcehogar.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/JefaporAccidente.php"><picture><img src="assets/images/peliculas-img/jefaporaccidente.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/LaFamiliaZurron.php"><picture><img src="assets/images/peliculas-img/LaFamiliaZurron.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/LasLeyendasdelasZorrasBellas.php"><picture><img src="assets/images/peliculas-img/laleyendadelaszorrasbellas.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/LosCargadores.php"><picture><img src="assets/images/peliculas-img/loscargadores.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/PequeñoPeroPeligroso.php"><picture><img src="assets/images/peliculas-img/pequeñoperopeligroso.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/QueCulpaTieneElNiño.php"><picture><img src="assets/images/peliculas-img/QueCulpatienelNiño.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/QueDespadre.php"><picture><img src="assets/images/peliculas-img/QueDespadre.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/RebelionGodinez.php"><picture><img src="assets/images/peliculas-img/rebeliongodinez.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/SoloAmigos.php"><picture><img src="assets/images/peliculas-img/soloamigos.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/SuperBomberos.php"><picture><img src="assets/images/peliculas-img/Súper-Bomberos.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/comedia/TresTurcosunBebe.php"><picture><img src="assets/images/peliculas-img/3turcosunabebe.jpg" alt="Image"></picture></a></div></div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
              </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Fantasia</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/fantasia/Cascanueces.php"><picture><img src="assets/images/peliculas-img/Cascanuecess.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/fantasia/EldecimoReino.php"><picture><img src="assets/images/peliculas-img/El_decimo_reino_.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/fantasia/ElsecretodelaLuna.php"><picture><img src="assets/images/peliculas-img/elsecreto-delaluna.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/fantasia/LahijadelLobo.php"><picture><img src="assets/images/peliculas-img/la-hija-del-lobo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/fantasia/LaleyendedelgiganteMontaña.php"><picture><img src="assets/images/peliculas-img/laleyendadelgigantedelamontaña.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/fantasia/ViajealTiempo.php"><picture><img src="assets/images/peliculas-img/Viaje-tiempo-la-maldicion-de-la-bruja.jpg" alt="Image"></picture></a></div></div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
              </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Infantil</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/infantil/AgenteGato.php"><picture><img src="assets/images/peliculas-img/Agente_00-Gato.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/Coco.php"><picture><img src="assets/images/peliculas-img/Coco.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/Dospavosenapuros.php"><picture><img src="assets/images/peliculas-img/Dos-pavos-en-apuros.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/Ellibrodelavida.php"><picture><img src="assets/images/peliculas-img/ElLibrodelaVida.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/Elprogresodelperegrino.php"><picture><img src="assets/images/peliculas-img/ElProgresodePeregrino.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/HermanosGuardianes.php"><picture><img src="assets/images/peliculas-img/Los_hermanos_guardianes.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/lahistoriadeunsoñador.php"><picture><img src="assets/images/peliculas-img/Delfin.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/RioII.php"><picture><img src="assets/images/peliculas-img/Rio2.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/Tarzan.php"><picture><img src="assets/images/peliculas-img/TarzanyJane.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/infantil/ungalloconmuchos.php"><picture><img src="assets/images/peliculas-img/UnGalloConMuchosHuevos.webp" alt="Image"></picture></a></div></div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
              </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Religion</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/religion/DanielProfeta.php"><picture><img src="assets/images/peliculas-img/The_Book_of_Daniel.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/Elemisario.php"><picture><img src="assets/images/peliculas-img/ElEmisario.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/ElhijoProdigo.php"><picture><img src="assets/images/peliculas-img/hijoprodigo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/ElreySalomon.php"><picture><img src="assets/images/peliculas-img/ElReySalomon.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/FuegoFundidor.php"><picture><img src="assets/images/peliculas-img/Fuego-de-Fundidor.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/HijoVueleaCasa.php"><picture><img src="assets/images/peliculas-img/Hijovuelvecasa.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/Jesus.php"><picture><img src="assets/images/peliculas-img/Jesus.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/Jesúsdenazaret.php"><picture><img src="assets/images/peliculas-img/JesusdeNazaret.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/Noe.php"><picture><img src="assets/images/peliculas-img/Noe.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/religion/UnNiñoLlamadoJesús.php"><picture><img src="assets/images/peliculas-img/UnNiñoLlamadoJesús.jpg" alt="Image"></picture></a></div></div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
              </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Romance</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/romance/AguayFuego.php"><picture><img src="assets/images/peliculas-img/AguayFuego.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/romance/AmorRebelde.php"><picture><img src="assets/images/peliculas-img/AmorRebelde.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/romance/ElAmordeNina.php"><picture><img src="assets/images/peliculas-img/el-amor-de-nina.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/romance/EsposaFicticia.php"><picture><img src="assets/images/peliculas-img/EsposaFicticia.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/romance/LosCaminosdelCorazon.php"><picture><img src="assets/images/peliculas-img/Caminos_del_Corazon.webp" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/romance/LosGirosdelAmor.php"><picture><img src="assets/images/peliculas-img/losgirosdelamor.jpg" alt="Image"></picture></a></div></div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
              </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Suspenso</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/suspenso/AvengersGrimm.php"><picture><img src="assets/images/peliculas-img/AvengersGrimm.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/suspenso/AzulMagia.php"><picture><img src="assets/images/peliculas-img/azul_magia.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/suspenso/ELRastro.php"><picture><img src="assets/images/peliculas-img/elrastro.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/suspenso/JuntoaDioses.php"><picture><img src="assets/images/peliculas-img/juntodioses.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/suspenso/MounstruodelaNiebla.php"><picture><img src="assets/images/peliculas-img/mounstruodelaniebla.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/suspenso/ObjetivoTierra.php"><picture><img src="assets/images/peliculas-img/objetivo-tierra.jpg" alt="Image"></picture></a></div></div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
              </button></div>
          </div>
        </section>
        <section>
          <div class="Carousel">
            <h2>Terror</h2>
            <div class="slick-list" id="slick-list">
                <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
                </button>
                <div class="slick-track" id="track">
                  <div class="slick"><div><a href="pelicula/terror/Belzebuth.php"><picture><img src="assets/images/peliculas-img/belzebuth.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/terror/BrujasdeAmityville.php"><picture><img src="assets/images/peliculas-img/BrujasdeAmityville.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/terror/CampamentodelTerror.php"><picture><img src="assets/images/peliculas-img/campamentodelterror.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/terror/LaCuevadelTiempo.php"><picture><img src="assets/images/peliculas-img/LaCueva-del-Tiempo.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/terror/Masacre-en-Abril.php"><picture><img src="assets/images/peliculas-img/masacre4120.jpg" alt="Image"></picture></a></div></div>
                  <div class="slick"><div><a href="pelicula/terror/NoviaCibernetica.php"><picture><img src="assets/images/peliculas-img/CyberBride.jpg" alt="Image"></picture></a></div></div>
                </div>
                <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
              </button></div>
          </div>
        </section>
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
    <script src="assets/lib/jquery/dist/jquery.js"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/wow/dist/wow.js"></script>
    <script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="assets/lib/smoothscroll.js"></script>
    <script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main2.js"></script>
    <script src="assets/js/main3.js"></script>
  </body>
</html>