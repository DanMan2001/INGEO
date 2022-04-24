
<header>

   <nav class="navbar navbar-default navbar-alt" role="navigation">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand to-top" rel="home">
               <img src="<?php echo $url;?>vistas/img/logoLetras.png" alt="LogoIngeor&h" class="logo-big">

            </a>

         </div>

         <div class="collapse navbar-collapse" id="main-nav">

            <ul class="nav navbar-nav  navbar-right">
<div class="navbar-header">
   <div class="elements-google">
            <div id="google_translate_element"></div>
            </div>
            </div>

              <?php
                $item = null;
                $valor = null;
                
                $categorias = controladorIngeo::mostrarCategorias($item,$valor);
                foreach($categorias as $key => $value){
                   echo '<li><a href="'.$value["ruta"].'">'.$value["categoria"].'</a></li>'; 
                }
                ?>
            </ul>

         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>

</header>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5JMHFDX');</script>
<!-- End Google Tag Manager -->