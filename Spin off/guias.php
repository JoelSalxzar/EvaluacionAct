<!doctype html>
<?php session_start();

    if(isset($_SESSION['NoCtrl'])){
     
    }else{
        
       echo "<script>
                alert('Debes de iniciar sesion para ver este contenido');
                window.location= 'index.php'
    </script>";
    }
        
?>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Cargando...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.php" class="h2 mb-0"> <img src="./images/Spin-Off.png" alt="Image" class="img-fluid rounded"><span class="text-primary"></span> </a></h1>
          </div>
                      
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="./index.php" class="nav-link">Inicio</a></li>
                <li class="has-children">
                  <a href="nosotros.php" class="nav-link">Sobre nosotros</a>
                  <ul class="dropdown">
                    
                    <li><a href="https://www.youtube.com/channel/UCkN8dA1D-AoTjDwOPXWEXKw" class="nav-link">Videos</a></li>
                    <li><a href="./ArtYPub.php" class="nav-link">Articulos y Publicaciones</a></li>
                    </li>
                  </ul>
                </li>
                
                    <li>
                      <a href="normas.php">Normas</a>
                      
                    </li>

                
                <li><a href="./guias.php" class="nav-link">Guías</a></li>
                
                <li><a href="./certificaciones.php" class="nav-link">Certificaciones</a></li>
                <li><a href="#contact-section" class="nav-link">Contactanos</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  
     
    

    
     <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
          <h2 class="section-title mb-3">......</h2> 
          <p></p>
          <h2 class="section-title mb-3">GUIAS</h2>
          </div>
        </div>
        
        <div>
      <div class="container">
        <div class="row mb-5">
          
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/Diagrama 1.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                
                <li>Gestion de proyecto</li>
                <p>Una disciplina clave para las empresas de software, sin importar su tamaño o el tipo de aplicaciones que desarrolle.</p>
                <li> Implementación de software</li>
                <p>De un enfoque orientado a procesos mediante la comprensión del cumplimiento conjunto de tareas y productos de trabajo que deben ser realizados por los procesos de la organización.</p>
                
              </ul>
            </div>



          </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/Diagrama 2.3.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                
                <li>Gestion de proyecto</li>
                <p> tiene como propósito establecer y llevar a cabo de manera sistemática las tareas del proyecto de implementación de software, las cuales permiten cumplir con los objetivos del proyecto en calidad, tiempo y costo esperados.</p>
                <li> Plan del proyecto</li>
                <p>Para un perfil de entrada en VSE, un plan de proyecto simple es suficiente; mientras que para un proyecto más general, se requieren múltiples planes.</p>
                
                <li>Ejecucion del Plan del proyecto</li>
                <p>Reporte de avances, calendario de trabajo y requermientos técnicos, cambios al plan,
                Revisiones y los acuerdos con el Equipo y Cliente, espaldo del proyecto.</p>
               <p>Aqui encontraras un archivo donde se muestran algunos diagramas con los pasos a seguir para desarollar un proyecto en el laboratorio de desarrolo de software.</p>
                <p><a href="descargas-pdf/Diagramas_ISO_29110.zip" download="Normas-ISO-IEC">Descargar Archivo</a></p>
              </ul>
            </div>


            </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/Diagrama 3.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    
            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
              <img src="images/Diagrama 4.1.jpg" alt="Image" class="img-fluid">
              <br></br>
              <p></p>
              <img src="images/Diagrama 5.jpg" alt="Image" class="img-fluid">
              <br></br>
              <p></p> 
              <img src="images/Diagrama 6.jpg" alt="Image" class="img-fluid"> 
              </ul>
            </div>




            </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/Diagrama 7.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    
            <div class="mb-4">
            <section class="site-section" id="portfolio-section">
      

      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center" data-aos="fade">
          
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div id="filters" class="filters text button-group">
            <button class="btn btn-primary active" data-filter=".d8">Inicio de la Implementacion</button>
            <button class="btn btn-primary active" data-filter=".d9">Analisis de Requisitos</button>
            <button class="btn btn-primary active" data-filter=".d10">Diseño Arquitectura y Diseño Detallado</button>
            <button class="btn btn-primary active" data-filter=".d11">Construccion de Software</button>
            <button class="btn btn-primary active" data-filter=".d12">Integracion y Pruebas</button>
            <button class="btn btn-primary active" data-filter=".d13">Entrega de Producto</button>
            <button class="btn btn-primary active" data-filter="*">Todos</button>
            
          </div>
        </div>  
        
        <div id="posts" class="row no-gutter">
          <div class="item d8 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/Diagrama 8.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/Diagrama 8.jpg">
            </a>
          </div>

          <div id="posts" class="row no-gutter">
          <div class="item d9 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/Diagrama 9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/Diagrama 9.jpg">
            </a>
          </div>



          <div class="item d10 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/Diagrama 10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/Diagrama 10.jpg">
            </a>
          </div>

          <div class="item d11 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/Diagrama 11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/Diagrama 11.jpg">
            </a>
          </div>


          <div class="item d12 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/Diagrama 12.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/Diagrama 12.jpg">
            </a>
          </div>

          <div class="item d13 col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/Diagrama 13.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/Diagrama 13.jpg">
            </a>
          </div>


        </div>
      </div>



    </section>

    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          

            

            
          </div>
          
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">Sobre nosotros</h2>
                <p>Laboratorio de Desarrolo de software propiedad del Instituto Tecnologico de Zacatecas</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Enlaces</h2>
                <ul class="list-unstyled">
                  <li><a href="nosotros.php" class="smoothscroll">Sobre nosotros</a></li>
                  <li><a href="normas.php" class="smoothscroll">Normas</a></li>
                  <li><a href="certificaciones.php" class="smoothscroll">Certificaciones</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contactanos</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Siguenos</h2>
                <a href="https://www.facebook.com/SistemasyComputacionITZ/" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="https://www.youtube.com/channel/UCkN8dA1D-AoTjDwOPXWEXKw" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
            
            </p>
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>