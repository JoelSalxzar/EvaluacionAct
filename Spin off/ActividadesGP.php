<!doctype html>
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
                <li><a href="./EvaluacionActividades.php" class="nav-link">Evaluación de Actividades</a></li>
                <li><a href="./certificaciones.php" class="nav-link">Certificaciones</a></li>
                <li><a href="#contact-section" class="nav-link">Contactanos</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
 

    <section class="site-section">
      <div class="container">
        <div class="row mb-15 justify-content-center">
          
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay=""> ISO / IEC 29110 Pérfil Básico</h2>

            <table class="table table-primary table-striped">
            <thead>
            <tr>
              <th scope="col">Actividades de la Gestión de Proyecto</th>
              <th scope="col">ID</th>
              <th scope="col">Lista de Tareas</th>
              <th scope="col">Productos de Entrada</th>
              <th scope="col">Productos de Salida</th>
              <th scope="col">Roles</th>
              <th scope="col">Implementación</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <th scope="row"  rowspan="15"> GP.1 Plan de Proyecto</th>
              <th scope="row"> GP. 1.1 </th>
              <td>Revisión del Enunciado del Trabajo</td>
              <td>Enunciado del Trabajo</td>
              <td>Enunciado del Trabajo (revisión) </td>
              <td>GP - LT</td>
              <td>
              <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <option value="No">No</option>
              <option value="Parcialmente">Parcialmente</option>
              <option value="Gran-parte">Gran Parte</option>
              <option value="Totalmente">Totalmente</option>
              </select>
              </td>
            </tr>
            <tr>              
                <td> GP. 1.2 </td>
                <td>Definir con el cliente las Instrucciones de Entrega de cada uno de los entregables especificados en el Enunciado del Trabajo.</td>
                <td>Enunciado del Trabajo (revisión) </td>
                <td>Plan de Proyecto - Instrucciones de Entrega</td>
                <td>GP - CL</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.3 </td>
                <td>Identificar las tareas específicas por ser realizadas para producir los entregables y sus componentes de software identificados en la Orden de Trabajo. Incluir las tareas en el proceso de IS junto con las tareas de verificación, validación y revisión con el Cliente y Equipo de Trabajo para asegurar la calidad de los productos de trabajo. Identificar las tareas para realizar en las Instrucciones de Entrega. Documentar las tareas.</td>
                <td>Enunciado del Trabajo [revisión]</td>
                <td>Plan de Proyecto - Tareas</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.4 </td>
                <td>Establecer la Duracion estimada de cada tarea por realizar.</td>
                <td>Plan de Proyecto -  Tareas</td>
                <td>Plan de Proyecto -  Tiempo estimado de duración </td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.5 </td>
                <td>Identificar y documentar los recursos: humanos, materiales, equipamiento y herramientas, estandares, incluyendo la capacitación requerida del Equipo de Trabajo para realizar el proyecto. Incluyendo en el calendario las fechas de cuándo los recursos y capacitacions serán necesitadas.</td>
                <td>Enunciado del Trabajo</td>
                <td>Plan de Proyecto - Recursos</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.6 </td>
                <td>Establecer la composición del Equipo de Trabajo asignando roles y responsabilidades de acuerdo a los recursos.</td>
                <td>Plan de Proyecto -  Recursos  </td>
                <td>Plan de Proyecto -  Composición del Equipo de Trabajo</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.7 </td>
                <td>Asignar a cada una de las tareas el inicio estimado y las fechas de finalización para crear el calendario de las Tareas del Proyecto tomando en cuenta los recursos asignados, secuencia y dependencia de las tareas.</td>
                <td>Plan de Proyecto - Tareas - Duración Estimada - Composición del Equipo de Trabajo</td>
                <td>Plan de Proyecto -  Calendario de las tareas del proyecto</td>
                <td>GP - LT </td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.8 </td>
                <td>Calcular y documentar el Esfuerzo y Costo estimado del Proyecto.</td>
                <td>Plan de Proyecto - Calendario de las tareas del proyecto - Recursos</td>
                <td>Plan de Proyecto - Estimación de Esfuerzo y Costo</td>
                <td>GP</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.9 </td>
                <td>Identificar y documentar los riesgos que podrían afectar al proyecto. </td>
                <td>Todos los elementos previamente definidos.</td>
                <td>Tareas del proyecto</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.10 </td>
                <td>Documentar la Estrategia de Control de Versiones en el Plan de Proyecto.</td>
                <td>...</td>
                <td>Plan de Proyecto - Version Control Strategy</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.11 </td>
                <td>Generar el Plan de Proyecto integrando los elementos previamente identificados y documentados.</td>
                <td>Todos los elementos previamente definidos</td>
                <td>Plan de Proyecto - Tareas - Duración Estimada - Recursos - Composición del Equipo de Trabajo - Calendario de las Tareas del Proyecto - Estimación de Esfuerzo y Costo - Identificación de los Riesgos del Proyecto - Estrategia de Control de Versiones - Instrucciones de Entrega</td>
                <td>GP</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.12 </td>
                <td>Incluir la descripción del producto, alcance, objetivos y entregables en el Plan de Proyecto.</td>
                <td>Orden de Trabajo - Descripción del Producto - Alcance - Objetivos - Entregables</td>
                <td>Plan de Proyecto - Descripción del Producto - Alcance - Objetivos - Entregables</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.13 </td>
                <td>Verificar y obtener la aprovación del Plan de Proyecto. Verificar que todos los elementos del Plan de Proyecto son viables y cosistentes. Los resultados encontrados son documentados en un Reporte de Verificación y las correcciones son hechas unicamente si el docuento es aprovado por el Gestor de Proyecto.</td>
                <td>Plan de proyecto </td>
                <td>Resultados de Verificación - Plan de Proyecto [verificado]</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.14 </td>
                <td>Revisión y aceptación del Plan de Proyecto. El Cliente revisa y acepta el Plan de Proyecto, asegurandose que los elementos del Plan de Proyecto conciden con la Orden de Trabajo.</td>
                <td>Plan de Proyecto [verificado]</td>
                <td>Registro de Reunión Plan de Proyecto [aceptado]</td>
                <td>GP - CL</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 1.15 </td>
                <td>Establecer el Repositorio del Proyecto. Usando la Estrategia de Control de Versiones.</td>
                <td>Estrategia de Control de Versiones. </td>
                <td>Repositorio del Proyecto [recuperado]</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <th scope="row"  rowspan="6"> GP.2 Ejecución del Proyecto</th>
              <th scope="row"> GP. 2.1 </th>
              <td>Monitorizar y registrar el estado de la ejecución del Plan del Proyecto. </td>
              <td>Plan de Proyecto</td>
              <td>Registro del Estado del Proyecto</td>
              <td>GP - LT</td>
              <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>              
                <td> GP. 2.2 </td>
                <td>Análizar y evaluar la Solicitud de Cambio para costo, calendarización e impacto técnico.
                 Las Solicitudes de Cambio pueden ser iniciadas externamente por el Cliente o internamente por el Equipo de Trabjo. Actualizar el Plan de Proyecto, si el cambio aceptado no afecta los acuerdos con el Cliente.
                 Una Solicitud de Cambio, la cual afecte esos acuerdos, necesitará ser negociada por ambas partes (Ver GP.2.4).</td>
                <td>Solicitud de Cambio [iniciada] - Plan de Proyecto </td>
                <td>Solicitud de Cambio [evaluada] Plan de Proyecto [actualizado]</td>
                <td>GP - LT</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 2.3 </td>
                <td>Conduct revision meetings with the Work Team, identify problems, review risk status, record agreements and track them to closure.</td>
                <td>Plan de Proyecto - Registro del estado del Proyecto - Registro de Corrección - Registro de Reunión</td>
                <td>Registro de Reunión [actualizado]</td>
                <td>GP - LT - ET</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 2.4 </td>
                <td>Llevar a cabo reuniones con el Cliente, registrar acuerdos y rastrearlos hasta su cierre. La Solicitud de Cambio iniciada por el Equipo de Trabajo,la cual afecte al Cliente, necesita ser negociada para alcanzar la aceptación por ambas partes. Si es necesario, actualizar el Plan de Proyecto, de acuerdo con el nuevo acuerdocon el Cliente.</td>
                <td>Plan del Proyecto - Registro de Estado del Proyecto [evaluada] - Solicitud de Cambio - Registro de Reunión</td>
                <td>Registro de Reunión [actualizada] - Solicitud de Cambio [aceptada]- Plan de Proyecto [actualizado]</td>
                <td>GP - CL - LT - ET</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 2.5 </td>
                <td>Definir con el cliente las Instrucciones de Entrega de cada uno de los entregables especificados en el Enunciado del Trabajo.</td>
                <td>Estrategia de Control de Versiones.</td>
                <td>Respaldo del Repositorio del Proyecto</td>
                <td>GP</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 2.6 </td>
                <td>Ralizar la recuperacion del Repositorio del Proyecto usando el Respaldo del Repositorio del Proyecto, si es necesario.</td>
                <td>Respaldo del Repositorio del Proyecto.</td>
                <td>Repositorio del Proyecto [recuperado]</td>
                <td>GP</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <th scope="row"  rowspan="3"> GP.3 Control y evaluación del Proyecto</th>
              <th scope="row"> GP. 3.1 </th>
              <td>Evaluar el progreso del proyecto con  respecto al Plan del Proyecto comparando:
                  <ul>
                   <li>Tareas reales contra tareas planificadas </li>
                   <li>Asignación de recurso real contra recursos planificados </li>
                   <li>Costo real contra presupuesto estimado </li>
                   <li>Tiempo real contra calendario planificado </li>
                   <li>Riesgo real contra riesgos previamente identificado </li>
                  </ul>
                  </td>
              <td>Plan de Proyecto - Registro del Estatus del Progreso</td>
              <td>Registro del estatus del Progreso [evaluado]</td>
              <td>GP - LT - ET </td>
              <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>              
                <td> GP. 3.2 </td>
                <td>Establecer acciones para corregir las desviaciones o problemas y riesgos identificados en relación con el logro del Plan, según sea necesario, documentarlas en el Regsitro de Corrección y darles seguimiento hasta el cierre.</td>
                <td>Registro del Estado del Proyeecto [evaluado]</td>
                <td>Regsitro de Corrección</td>
                <td>GP - LT - ET</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>
                <td> GP. 3.3 </td>
                <td>Identificar los cambios en los requerimientos y/o Plan de Proyecto para abordar desviaciones mayores, riegos potenciales en relación con el logro del Plan, documentarlos en una Solicitud de Cambio y darle seguimiento hasta el cierre.</td>
                <td>Registro del Estado del Proyeecto [evaluado]</td>
                <td>Solicitud de Cambio [iniciada]</td>
                <td>GP - LT - ET</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <th scope="row"  rowspan="4"> GP.4 Cierre del Proyecto</th>
              <th scope="row"> GP. 4.1 </th>
              <td>Formalizar la terminación del proyecto de acuerdo a las Instrucciones de Entrega establecidas en el Plan de Proyecto, proporcionando soporte para la aceptación y obtener la firma de Registro de Aceptación.</td>
              <td>Plan de Proyecto *Instrucciones de Entrega / Configuración del Software [entregado] </td>
              <td>Acta de Aceptación - Configuración del Software [aceptada]</td>
              <td>GP - CL </td>
              <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            <tr>              
                <td> GP. 4.2 </td>
                <td>Actualizar del Repositorio del Proyecto. </td>
                <td>Configuración del Software [aceptada] - Repositorio del Proyecto</td>
                <td>Repositorio del Proyecto [actualizado]</td>
                <td>GP</td>
                <td>
                  <select name="select" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                  <option value="No">No</option>
                  <option value="Parcialmente">Parcialmente</option>
                  <option value="Gran-parte">Gran Parte</option>
                  <option value="Totalmente">Totalmente</option>
                  </select>
               </td>
            </tr>
            </tbody>
            </table>  
              </div>  
              </div>           
            </table>
      
          
        </div>
      </div>
    </section>


    
  


    
    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contactanos</h2>
          </div>
        </div>
        <div class="row mb-5">
          


          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span>Carretera Panamericana entronque a Guadalajara s/n, Zacatecas Centro, 98000 Zacatecas, Zac.</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#">+54 492 924 5366 ext. 323</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="#">itzspinoff@gmail.com</a>
            </p>
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