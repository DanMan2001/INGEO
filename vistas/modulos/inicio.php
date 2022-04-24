
    <section id="home-revolution-slider">
   <div class="hero">
      <div class="tp-banner-container">
         <div class="tp-banner">
            <ul>
            <?php
           $item = null;
           $valor = null;
           $slide = controladorIngeo::mostrarSlider($item,$valor);
           
       foreach ($slide as $key => $value) {
          echo' <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="'.$url.''.$value["img"].'" data-delay="10000"  data-saveperformance="on" data-title="'.$value["titulo"].'">
          <img src="'.$url.''.$value["img"].'" alt="'.$value["titulo"].'" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
          
          <!-- Home Heading -->
          <div class="tp-caption sft"
                                data-x="center"  
                                data-y="260"
                                data-speed="1200"
                                data-start="1100"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="300"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
             <h2 class="home-heading op-3">'.$value["titulo"].'</h2>
          </div>

               <div class="tp-caption home-button sft fadeout"
                                data-x="center" 
                                data-y="400" 
                                data-speed="1200"
                                data-start="1550"
                                data-easing="Power3.easeInOut"
                                data-splitin="none"
                                data-splitout="none"
                                data-elementdelay="0.1"
                                data-endelementdelay="0.1"
                                data-endspeed="300"
                                style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;margin:125px 0px 0px;">
             <div class="op-1">
                <a href="'.$value["boton"].'" class="btn btn-primary btn-scroll">
                   Saber Más
                </a>
             </div>
          </div>
       </li>
      ';
       }
       ?>
       
               
       <div class="tp-bannertimer"></div>
         </div>
         <div class="home-bottom">
            <div class="container text-center">
               <div class="move bounce">
                  <a href="#features" class="ion-ios-arrow-down btn-scroll">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Home Revolution Slider Parallax Section -->

<div class="site-wrapper content">


   <!-- Start About Section -->
   <section id="about">
      <div class="container">
         <div class="row">
            <div class="col-md-6 text-left about-text">
               <h3 class="wow fadeInUp">¿Quiénes Somos?</h3>
               <p class="wow fadeInUp texto-presentacion">Ingeo r&h es una empresa que se dedica a desarrollar cada una de las aplicaciones de la Geomática, somos expertos en: Topografía, Cartografía Digital, Teledetección Agrícola, Fotogrametría Digital, Geodesia, Sistemas de Información Geográfica (SIG), Sistemas de Posicionamiento Global (GNSS y GPS) y Agricultura de Precisión.
</p>
            </div>
            <div class="col-md-6 wow fadeInUp about-text">
               <div class="video-container">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/xsHjvWinXGQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> 
               
            </div>
         </div>
      </div>
   </section>
   <!-- End About Section -->
   
   
   <!-- Start Quote Section -->
   <section id="quote" class="parallax-section-6">
      <div class="container">
         <div class="row wow fadeInUp">
            <div class="col-lg-12 wow fadeInUp" style="z-index:3">
               <div id="quote-slider" class="owl-carousel">
                  <div>
                     <blockquote>
                     <i class="fa fa-quote-left"></i>
                     <span>Se puede describir de mil formas a un lugar, pero jamás de una manera tan precisa y hermosamente romántica con el idioma de la ingeniería como la topografía lo haría</span>
                     <i class="fa fa-quote-right"></i>

                  </blockquote>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Quote Section -->
   
   <!-- Start Portfolio Section -->
   <section id="portfolio" style="position: relative;">
      <div class="separator"></div>
      <div class="container-fluid">
         <div class="col-md-12 text-center">
            <h3 class="section-title wow fadeInUp texto-presentacion">Trabajos destacados</h3>
            <p class="subheading wow fadeInUp texto-presentacion">A continuación podrás visualizar algunos de nuestros trrabajos realizados.</p>
         </div>
         <div id="filters-container-fullwidth" class="cbp-l-filters-alignCenter wow fadeInUp">
         <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Todo
               <div class="cbp-filter-counter"></div>
            </div>
         <?php
                $item = null;
                $valor = null;
                $secciones = controladorIngeo::mostrarTrabajosSecciones($item,$valor);
                foreach ($secciones as $key => $value) {
                   echo'<div data-filter="'.$value["filtro"].'" class="cbp-filter-item">'.$value["titulo"].'
                   <div class="cbp-filter-counter"></div>
                </div>';
                }
                ?>
         </div>
         <div id="grid-container-fullwidth" class="cbp-l-grid-fullScreen">
            <ul>
            <?php
                $item = null;
                $valor = null;
                $trabajos = controladorIngeo::mostrarTrabajos($item,$valor);
                foreach ($trabajos as $key => $value) {
                   echo'<li class="cbp-item effect effects '.$value["tipo"].'">
                   <div class="img">
                      <img src="'.$url.''.$value["img"].'" class="img-responsive" alt="" />
                      <div class="overlay">
                         <ul class="expand">
                            <li class="cbp-l-icon">
                               <a class="cbp-lightbox" href="'.$value["enlace"].'" data-title="Dashboard<br>by Visual">
                                  <i class="icon-magnifier"></i>
                               </a>
                            </li>
                            <li class="cbp-l-icon">
                               <a href="projects/project4.html" class="cbp-singlePage">
                                  <i class="icon-link"></i>
                               </a>
                            </li>
                            <li class="cbp-l-caption-title">'.$value["titulo"].'</li>
                            <li class="cbp-l-caption-desc">'.$value["subTitulo"].'</li>
                         </ul>
                      </div>
                   </div>
                </li>';
                }
                ?>
            
            
            </ul>
         </div>
         <div class="cbp-l-loadMore-button">
            <a href="#" class="cbp-l-loadMore-button-link wow fadeInUp">
               Mostrar más
            </a>
            <!-- Portfolio AJAX load more button will be functional only on your server. Upload to your server when testing. -->
         </div>
      </div>
   </section>
   <!-- End Portfolio Section -->
   
   
  
   <!-- Start Contact Form Section -->
   <section id="contact" class="contact-back">
      <div class="container extra">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3 class="section-title wow fadeInUp">Contactanos</h3>
               <p class="subheading wow fadeInUp">¿Te interesa contratar nuestros servicios?, Porfavor no dudes en contactarnos.</p>
            </div>
            <div class="col-md-7 wow fadeInUp">  
               <div id="message"></div>
               <!--
                Formulario para enviar correos
                  ====================================================================-->
               <form method="post" action="<?php echo $url;?>process.php" name="contact-form" id="contact-form">
                  <fieldset>
                     <input name="UName" type="text" id="name" placeholder="Nombre"/>
                     <input name="Email" type="email" id="email" placeholder="Correo"/>
                     <input name="Subject" type="text" id="subject" placeholder="Asunto"/>
                  </fieldset>
                  <fieldset>
                     <textarea name="msg" cols="40" rows="3" id="comments" placeholder="Mensaje"></textarea>
                  </fieldset>
                  <button type="submit" class="btn btn-success" name="btn-send" value="Submit" id="submit_form">Submit</button>
               </form>
               <!--
                Formulario para enviar correos
                  ====================================================================-->
              
       </div>
 <div class="col-md-5">
 <div id="map"></div>

 </div>
         </div>
      </div>
   </section>

   
</div>
