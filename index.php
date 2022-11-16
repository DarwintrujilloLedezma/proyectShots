<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shot's | Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="view/client-side/assets/img/favicon.png" rel="icon">
  <link href="view/client-side/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="view/client-side/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="view/client-side/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="view/client-side/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="view/client-side/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="view/client-side/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: EstateAgency - v4.8.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  

  <!-- <div class="click-closed"></div> -->
  <!--/ Form Search Star /-->
  <!-- <div class="box-collapse">
   <div class="title-box-d">
    <span class="close-box-collapse right-boxed bi bi-x"></span>
     <h3 class="title-d">Registro de Usuarios</h3>
   </div>
   <div class="signupFrm">
     <form action="" class="form">
       <div class="inputContainer">
         <input type="text" class="input" placeholder="a">
         <label for="" class="label">Correo</label>
       </div>
 
       <div class="inputContainer">
         <input type="text" class="input" placeholder="a">
         <label for="" class="label">Nombre de Usuario</label>
       </div>
 
       <div class="inputContainer">
         <input type="text" class="input" placeholder="a">
         <label for="" class="label">Contraseña</label>
       </div>
 
       <div class="inputContainer">
         <input type="text" class="input" placeholder="a">
         <label for="" class="label">Confirmar Contraseña</label>
       </div>
       <input type="submit" class="submitBtn" value="Registrarse">
     </form>
   </div>
</div> -->

<div class="offcanvas offcanvas-end" tabindex="-1" id="loginModal" aria-labelledby="loginModalLabel">
  <div class="offcanvas-header">
    
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">

    
    <form action="controller/iniciarSesion.php" method="POST">
      <h2>LOGIN</h2>
      <p>Por favor ingresar usuario y contraseña para acceder al sitio</p>
      <div class="inputContainer">
        <label for="" class="label">Correo</label>
        <input type="text" name="correo" class="input" placeholder="a">
      </div>

      <div class="inputContainer">
        <label for="" class="label">Contraseña</label>
        <input type="text" name="clave" class="input" placeholder="a">
      </div>

      <a href="#">¿Olvidó su contraseña?</a>
      

      
      <input type="submit" class="submitBtn" value="Iniciar Sesión">
    </form>
  </div>
</div>




<div class="offcanvas offcanvas-end" tabindex="-1" id="registerModal" aria-labelledby="registerModalLabel">
  <div class="offcanvas-header">
    
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">

    
    <form action="controller/insertarUserE.php" method="POST">
      <h2>REGISTRO</h2>
      <p>Por favor complete los campos con su información para realizar el registro</p>
      <div class="inputContainer">
        <label for="#"  class="label">Identificación</label>
        <input type="number" name="identificacion" required class="input" placeholder="a">
        
      </div>

      <div class="inputContainer">
        <label for="#" class="select">Tipo de Documento</label>
        <select name="tipoDoc" class="input" required id="tipoDoc">
          <option value="">...</option>
          <option value="cedula">Cedula de ciudadania</option>
          <option value="Pasaporte">Pasaporte</option>
          <option value="Cedula extranjera">Cedula extranjera</option>
        </select>
      </div>

      <div class="inputContainer">
        <label for="#"  class="label">Nombres</label>
        <input type="text"  name="nombres" required class="input" placeholder="a">
        
      </div>

      <div class="inputContainer">
        <label for="#"  class="label">Apellidos</label>
        <input type="text" name="apellidos" required class="input" placeholder="a">
        
      </div>

      <div class="inputContainer">
        <label for="#"  class="label">telefono</label>
        <input type="text" name="telefono" required class="input" placeholder="a">
        
      </div>

      <div class="inputContainer">
      <label for="#" name="fechaNacimiento" class="label">Fecha de nacimiento</label>
        <input type="date" name="fechaNacimiento" required class="input" placeholder="a">
        
      </div>

      <div class="inputContainer">
      <label for="#"  class="label">Correo</label>
        <input type="text" name="correo" required class="input" placeholder="a">
        
      </div>

      <div class="inputContainer">
      <label for="#"  class="label">Clave</label>
        <input type="text" name="clave" required class="input" placeholder="a">
        
      </div>

      <div class="inputContainer">
        <label for="#" class="label">Confirmar Contraseña</label>
        <input type="text" name="confirmarClave" required class="input" placeholder="a">
      </div>
      <input type="submit" class="submitBtn" value="Registrarse">
    </form>
  </div>
</div>












  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <button class="navbar-toggler collapsed1" type="button" data-bs-toggle1="collapse1" data-bs-target1="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><img src="view/client-side/img/logo.png" alt=""></a>
    

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="index.html">Inicio</a>
          </li>

          

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nuestros Servicos</a>
            <div class="dropdown-menu">
              
              <a class="dropdown-item " href="view/client-side/blog-single.html">Automatización de  Procesos</a>
              <a class="dropdown-item " href="view/client-side/agents-grid.html">Gestion de Usuarios y Empleados</a>
              <a class="dropdown-item " href="view/client-side/agent-single.html">Inventario y Reportes</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="view/client-side/contact.php">Contactos</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="offcanvas" data-bs-target="#registerModal" aria-controls="registerModal">
        <i class="bi bi-person-circle"> Registrarse</i>
      </button>
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="offcanvas" data-bs-target="#loginModal" aria-controls="loginModal">
        <i class="bi bi-person-circle"> Iniciar Sesión</i>
      </button>

     


    </div>
  </nav><!-- End Header/Navbar -->


  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(view/client-side/img/foto3.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bogotá, Colombia</p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">Gestión </span> De Los
                      <br> Usuarios
                    </h1>
                    <p class="intro-subtitle intro-price">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(view/client-side/img/foto2.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bogotá, Colombia</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Gestión </span> De Las
                      <br> Existencias
                    </h1>
                    <p class="intro-subtitle intro-price">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(view/client-side/img/foto1.png)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bogotá, Colombia</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Gestión </span> De Las
                      <br> Ventas
                    </h1>
                    <p class="intro-subtitle intro-price">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Nuestros Servicios</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-file-earmark-check"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Reportes</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Podrás generar tus reportes, de cualquier
                  modulo o filtro de tu empresa,
                  con un solo click.
                </p>
              </div>
              <div class="card-footer-c">
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-laptop"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Inventario</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Lleva el control de tu inventario de Productos
                  Control de tus ventas y mucho más.
                </p>
              </div>
              <div class="card-footer-c">
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-people"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Usuarios</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Podrás tener modulos adecuados para
                  lograr un manejo optimo de la 
                  informacion de 
                </p>
              </div>
              <div class="card-footer-c">
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Diferentes Gestiones</h2>
              </div>
              <div class="title-link">
                
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="view/client-side/img/existencias.png" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html">CONTROL
                          <br /> DE EXISTENCIAS</a>
                      </h2>
                    </div>
                    
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span>
                            <sup></sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="view/client-side/img/ventas.png" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html">GESTION
                          <br /> DE VENTAS</a>
                      </h2>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span>
                            <sup></sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="view/client-side/img/servicio2.jpg" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html">PROVEEDORES
                          <br /> </a>
                      </h2>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span>
                            <sup></sup>
                          </span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                        <li>
                          <h4 class="card-info-title"></h4>
                          <span></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">INGENIEROS</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="view/client-side/img/pedro.png" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Pedro Arias
                        <br> Ortiz</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  
                  <div class="info-agents color-a">
                    <p>
                      <strong>Celular: </strong> +57 3217871956
                    </p>
                    <p>
                      <strong>Correo: </strong> pedro.arias20@misena.edu.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="view/client-side/img/junior.png" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Junior Martinez
                        <br>Castelblanco</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  
                  <div class="info-agents color-a">
                    <p>
                      <strong>Celular: </strong> +57 3132302921
                    </p>
                    <p>
                      <strong>Correo: </strong> junior.martinez0@misena.edu.co
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="view/client-side/img/darwin.png" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Darwin Trujillo
                        <br> Ledezma</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  
                  <div class="info-agents color-a">
                    <p>
                      <strong>Celular: </strong> +57 3046155214
                    </p>
                    <p>
                      <strong>Correo: </strong> dtrujillo086@misena.edu.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="view/client-side/img/david.png" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Maria Catalina
                        <br> Mendoza</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  
                  <div class="info-agents color-a">
                    <p>
                      <strong>Celular: </strong> +57 3164268698
                    </p>
                    <p>
                      <strong>Correo: </strong> mcmendoza452@misena.edu.co
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section><!-- End Agents Section -->
        </div>
      </div>
    </section><!-- End Agents Section -->

    

    <!-- ======= Latest News Section ======= -->
    
    <!-- ======= Testimonials Section ======= -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <footer>
    
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Shot's
              <span class="color-a">Aquí</span> Encuentras lo que necesitas
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="view/client-side/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="view/client-side/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="view/client-side/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="view/client-side/assets/js/main.js"></script>

</body>

</html>