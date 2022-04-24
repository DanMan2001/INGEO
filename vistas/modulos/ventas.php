<section id="quote2" class="parallax-section-6">
    <div class="container">
       <div class="row wow fadeInUp">
          <div class="col-lg-12 wow fadeInUp" style="z-index:3">
             <div id="quote-slider" class="owl-carousel">
                <div>
                   <blockquote>
                      <span>Productos</span>
                   </blockquote>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
<section class="section-products">
		<div class="container">

				<div class="row">

				<?php
				
				 $item = null;
				 $valor = null;
				 $productos = controladorIngeo::mostrarProductos($item,$valor);
				 foreach ($productos as $key => $value) {
				 	echo '<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1"></div>
										<div class="part-2">
												<h3 class="product-title">'.$value["titulo"].'</h3>
												<h4 class="product-price">'.$value["precio"].'</h4>
										</div>
								</div>
						</div>';
				 }
				 ?>
				 </div>
			
		</div>
</section>
