<!DOCTYPE html>
<html lang="es">
    <!-- Esta es la pantalla de los negocios, aqui visualizaremos noticias referente a esta rama, misma estructura que el index-->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Periodico El Faro</title>
        <!-- Link que hace la referencia y la union del css al html -->   
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <!-- Link que nos permite usar la fuente externa de google font-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/85c43dc871.js" defer crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9" defer></script>
        <script src="assets/js/funciones.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark p-4 fs-2">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Left Element -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <button class="nav-link text-white fs-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <span class="navbar-toggler-icon d-none d-sm-block"></span>
                            <span class="d-block d-sm-none">MENÚ</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-2" style="text-decoration: none;color: white;" href="index.php"> INICIO </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-2" style="text-decoration: none;color: white;" href="deporte.php"> DEPORTES </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-2" style="text-decoration: none;color: white;" href="negocios.php"> NEGOCIOS </a>
                    </li>
                </ul>
            </div>
            <!-- End Left Element -->
            <!-- Center Element -->
            <div class="collapse navbar-collapse d-none d-sm-block">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto ">
                    <div class="nav-item" id="fecha-hora"></div>
                </ul>
            </div>
            <!-- End Center Element -->
            <!-- Right Element -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2 form-control-lg fs-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success btn-lg fs-2" type="submit">Buscar</button>
                    </form>
                </ul>
            </div>
            <!-- End Right Element -->
        </div>
    </nav>
        <!-- Aquí comienza el encabezado de la pagina-->
        <header>
            <div class="container-header">
                <div>
                    <a href="index.php">          
                        <img id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                    </a> 
                </div>
                <div class="carusel">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div  class="carousel-inner ">
                        <div class="carousel-item active">
                            <a href="https://tienda.paula.cl/?utm_source=digital&amp;utm_medium=marketing&amp;utm_campaign=mama" target="_blank">
                                <img class="imgCarusel"  src="https://picsum.photos/800/100?1" class="d-block w-10" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://tienda.paula.cl/?utm_source=digital&amp;utm_medium=marketing&amp;utm_campaign=mama" target="_blank">
                                <img class="imgCarusel"  src="https://picsum.photos/800/100?1" class="d-block w-10" alt="...">
                            </a>                    </div>
                        <div class="carousel-item">
                            <a href="https://tienda.paula.cl/?utm_source=digital&amp;utm_medium=marketing&amp;utm_campaign=mama" target="_blank">
                                <img class="imgCarusel"  src="https://picsum.photos/800/100?1" class="d-block w-10" alt="...">
                            </a>                    </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>  
                    <div class="anuncios-txt">
                        <h3 style="border: 1px solid black;">
                            Avisos y Anuncios
                        </h3>
                    </div>
                </div> 
            </div>
            
            <!--Menú lateral-->
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                    <div>
                        <a href="index.php">
                            <img style="width: 340px; height: 80px; margin: 15px;" id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                </div>
                
                <div class="offcanvas-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button style="font-size: 24px; bottom: 10%;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              Secciones
                            </button>
                          </h2>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <ul style="justify-content: flex-start; list-style: none;">
                                <li style="display: list-item; text-align: start;"><a style="font-size: 15px; text-decoration: none;color: var(--color-black);" href="index.php"> INICIO </a></li>
                                <li style="display: list-item; text-align: start;"><a style="font-size: 15px; text-decoration: none;color: var(--color-black);" href="deporte.php"> DEPORTES </a></li>
                                <li style="display: list-item; text-align: start;"><a style="font-size: 15px; text-decoration: none;color: var(--color-black);" href="negocios.php"> NEGOCIOS </a></li>                                
                            </ul>
                          </div>
                        </div>
                    </div>
                    <hr>
                    <!-- En este item se abrira la ventana emergente para cargar las noticias dinámicas-->
                    <div style="display: flex;flex-direction: row; justify-content:start;margin-left: 8px;">
                        <a style="font-size: 24px; text-decoration: none; color: var(--color-black);" onunload="abrirComentario()" href="comentario.php" target="_blank">Tus comentarios aquí</a>
                        </div>
                    <hr>
                    <div style="display: flex;flex-direction: row; justify-content:start;margin-left: 8px;">
                    <a style="font-size: 24px; text-decoration: none; color: var(--color-black);" onclick="abrirComentario()" class="dropdown-item" href="viewuser.php" target="_blank" >Administrar usuarios(SOLO ADMIN)</a>
                    </div>
                    <hr>
                    <div style="display: flex;flex-direction: row; justify-content:start;margin-left: 8px;">
                        <a style="font-size: 24px; text-decoration: none; color: var(--color-black);" onclick="abrirVentana()" href="#" target="_blank">Ingresar artículos(SOLO ADMIN)</a>
                    </div>
                    <hr>
                    <div>
                        <p style="font-size: 24px; text-align: start; margin-left: 10px;">Visita nuestras Redes Sociales</p>
                        <div class="social">
                            <i style="margin: 7px;" class="fa-brands fa-facebook fa-2xl"></i>
                            <i style="margin: 7px;" class="fa-brands fa-twitter fa-2xl"></i>
                            <i style="margin: 7px;" class="fa-brands fa-instagram fa-2xl"></i>
                            <i style="margin: 7px;" class="fa-brands fa-telegram fa-2xl"></i>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>            
        </header> 

        <main>
            <h1>NOTICIAS DE NEGOCIO</h1>
            <div class="bloque">
                <div class="bloque" id="noticias"></div>
                <div class="noticia1">
                    <h2>Internacional | Dólar cierra al alza tras cuatro bajas consecutivas y termina la semana al borde de los $795Con todo, la divisa registró un desplome semanal de $18,7.</h2>
                    <img class="foto" src="assets/src/dolar.jpeg">
                    <h3>Ricardo Bustamante, jefe de estudios trading de Capitaria, dijo que "el billete verde repunta desde los mínimos del día debido a que los mercados dudan si el dato conocido será suficiente para que la Reserva Federal (Fed) finalice su proceso de alzas de tasas.</h3>
                </div>   

                <div class="noticia1">
                    <h2>Nacional | Los Pincheira: la picada de los completos y as gigantes de Ñuñoa</h2>
                    <img class="foto" src="assets/src/los pincheira.jpeg">
                    <h3>Los Pincheira es un local legendario. Te hablamos de la picada para comer al paso que abrieron en septiembre de 2002 en la calle Jorge Monckeberg 756, a dos cuadras de Av. Grecia en Ñuñoa, los hermanos Víctor y Genaro Pincheira. </h3>
                </div>   

                <div class="noticia1">
                    <h2>Internacional | Nuevo socio para Chile: Reino Unido entra al TPP11 y concreta su mayor acuerdo comercial tras Brexit </h2>
                    <img class="foto" src="assets/src/reinounido.jpg">
                    <h3>Chile tiene un nuevo socio: Reino Unido, y es que el país europeo se convertirá en la nación número 12 en ingresar al Tratado Integral y Progresivo de Asociación Transpacífico, más conocido en territorio nacional como TPP11.</h3>    
                </div>

            </div>
            <hr>
            <p id="contadorArt"></p>
        </main>
        <footer>
            <section class="footerStyle">
                <div class="imagenFooter">
                    <a href="index.php">
                        <img style="width: 500px; height: 200px; margin-top: 20px;" id="logo-el-faro" src="assets/src/logo-el-faro.svg" alt="">
                    </a>
                </div>
                <div class="listasFooter">
                    <nav class="links">
                        <ul class="menu-footer">
                            <li><a class="linkFooter" href="quienesSomos.php">Quénes somos</a></li>
                            <hr>
                            <li><a class="linkFooter" href="tarifasElectorales.php">Tarifas electorales</a></li>
                            <hr>
                            <li><a class="linkFooter" href="tarifasPublicidad.php">Tarifas publicidad</a></li>

                        </ul>
                        <ul class="menu-footer">
                            <li><a class="linkFooter" href="terminosCondiciones.php">Términos y condiciones</a></li>
                            <hr>
                            <li><a class="linkFooter" href="politicasPrivacidad.php">Políticas de privacidad</a></li>
                            <hr>
                            <li><a class="linkFooter" href="preguntasFrecuentes.php">Preguntas frecuentes</a></li>i>
                        </ul>
                    </nav>
                </div>
            </section>
            <div style="display: flex;flex-direction: row; align-items: flex-end; background-color:#c9d2d0;height: fit-content;">
                <p style="margin-left: 0.3%; font-size:large; margin-top: 0.8%;">2023, El Faro. Todos los derechos reservados ®.</p>
                <div class="social">
                    <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-facebook fa-2xl"></i>
                    <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-twitter fa-2xl"></i>
                    <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-instagram fa-2xl"></i>
                    <i style="margin: 6px; margin-bottom: 20px; margin-left: 10px;" class="fa-brands fa-telegram fa-2xl"></i>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            listarNoticias("Negocio");
        </script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      
</html>   