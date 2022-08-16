<?php

    //creamos la sesion
    session_start();
    //validamos si se ha hecho o no el inicio de sesion correctamente
    //si no se ha hecho la sesion nos regresará a login.php
    if(!isset($_SESSION['usuario'])) 
    {
        
        header('Location: index.php'); 
        
        exit();
     }

?>


<link rel="shortcut icon" href="img/de.ico">             
   



<div class="container-fluid ">
 <body>
       <div class="row justify-content-center">
          <div class="col-5">
        <div class="p-3 mb-2 bg-primary text-white">
      <center><h3>Bienvenido al Sistema de Almacen </h3></center>
      <p class="p-5 text-justify">
        Los almacenes son centros que están estructurados y planificados para llevar a cabo funciones de almacenamiento tales como: conservación, control y expedición de mercancías y productos, recepción, custodia, etc. El almacén es el encargado de regular el flujo de existencias.Cumplido el primer paso, el segundo es planificar la ubicación, distribución y diseño de los espacios, los equipamientos de las instalaciones, así como los medios mecánicos y los recursos humanos para manipulación y almacenaje de las mercancías.
      
      </div>
    </div>   





    <div class="col-5">
      

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
           </div>
            </div>
            </div>
            </div>
         <div class="col-1">
            </div>
                </div>
            </div>
<div class="row justify-content-around ">
            <div class="col-4">
              <div class="p-3 mb-2 bg-success text-white">
                                   
                   <center><h3>VTV Somos Todos </h3></center>
                          <p class="p-4 text-justify ">
                          Venezolana de Televisión salió al aire bajo el nombre e Cadena Venezolana de Televisión (CVTV) el 1 de agosto de 1964, siendo el primer canal que instaló una red de transmisión a nivel nacional televisiva en el país, sistematizando el empleo de enlaces de microondas para el transporte de señal televisiva. Estuvo formada por la unión de dos empresas internacionales, Colteve, dueña de las transmisiones y Proventel, productora de los programas que entonces se transmitían.
                          
                          

    </div>
                </div>
                                <div class="col-4">
                                  <div class="p-3 mb-2 bg-info text-white">
                                    <center><h3>Historia </h3></center>
                                                <p class="p-4 text-justify">
                                                Los almacenes son centros que están estructurados y planificados para llevar a cabo funciones de almacenamiento tales como: conservación, control y expedición de mercancías y productos, recepción, custodia, etc. El almacén es el encargado de regular el flujo de existencias.Cumplido el primer paso, el segundo es planificar la ubicación, distribución y diseño de los espacios, los equipamientos de las instalaciones, así como los medios mecánicos y los recursos humanos para manipulación y almacenaje de las mercancías.
                                              </div>
                                            </div>
                                            <div class="col-4">
                                            <div class="p-3 mb-2 bg-danger text-white">
                                                  <center><h3>Sistema</h3></center>
                                                      <p class="p-4 text-justify">
                                                     Un sistema de gestión documental se encarga del almacenaje, gestión y seguimiento de documentos. Cada software tiene funcionalidades básicas diferentes. Estas se pueden personalizar de acuerdo con los requisitos de la empresa, con ayuda del partner de implementación. Hay una gran variedad de funcionalidades, no obstante, algunas son más comunes que otras.
                                                    </div>
                                                  </div>
                </div>
                </div>








            
<div class="container-fluid">
 
       <div class="row justify-content-center">
          <div class="col-5">
        <div class="p-3 mb-2 bg-dark text-white">
      <center><h3>Servicio General</h3></center>
      <p class="p-5 text-justify">
        El Departamento de Servicios Generales se encarga de proporcionar oportuna y eficientemente, los servicios que requiera el Centro en materia de comunicaciones, transporte, correspondencia, archivo, reproducción de documentos, revelado de material fotográfico, intendencia, vigilancia, mensajería y el suministro de mantenimiento preventivo y correctivo al mobiliario, equipo de oficina y equipo de transporte.
      </div>
    </div>   





    <div class="col-5">
      

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/4.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/6.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
           </div>
            </div>
            </div>
            </div>
         <div class="col-1">
            </div>
                </div>
                
            </div>





  


  
    







  
                      
    
   

