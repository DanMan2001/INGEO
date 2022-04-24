<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5JMHFDX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<script type="text/javascript">
function googleTranslateElementInit(){
  new google.translate.TranslateElement({pageLanguage:'es'},'google_translate_element');
}
</script>
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 14.454854977364175, lng: -90.44708589223225 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 18,
    center: uluru,
  });
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPeRoXIq6jl1NRNGyWc60UbVaia3XjPtc&callback=initMap&libraries=&v=weekly"async></script>
<script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.min.js"></script>
<script src="https://documentcloud.adobe.com/view-sdk/main.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/pdf.js"></script>

<script type="text/javascript" src="<?php echo $url;?>vistas/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/moderniz.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/smoothscroll.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/revslider.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/parallax.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/easign1.3.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/owlcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/tweetie.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/gmap3.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/counterup.min.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/portfolio.js"></script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/map.js"> </script>
<script type="text/javascript" src="<?php echo $url;?>vistas/js/main.js"></script>