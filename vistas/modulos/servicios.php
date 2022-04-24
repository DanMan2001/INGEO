<!-- Start Quote Section -->
   <section id="quote2" class="parallax-section-6">
    <div class="container">
       <div class="row wow fadeInUp">
          <div class="col-lg-12 wow fadeInUp" style="z-index:3">
             <div id="quote-slider" class="owl-carousel">
                <div>
                   <blockquote>
                      <span> Nuestros servicios</span>
                   </blockquote>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>


 <section class="services">

      <div class="row-card">
 <?php
                $item = null;
                $valor = null;
                $servicios = controladorIngeo::mostrarServicios($item,$valor);
                foreach($servicios as $key => $value){
               
                   echo '<div class="column-card">
                   <div class="card">
                     <div class="icon-wrapper">
                       <i class="'.$value["icono"].'"></i>
                     </div>
                     <h3>'.$value["titulo"].'</h3>
                     <ul class="lista-servicios">
                     '.$value["descripcion"].'
                      </ul>                   
                    </div>
                 </div>
                 ';
              
                }
      
                ?>
                </div>
   </div>
               </div>
  </section>
