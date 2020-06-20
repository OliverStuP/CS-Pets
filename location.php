<?php
define('ISITSAFETORUN', TRUE);
define("TITLE", "Location | CS Pets");
include('includes/header.php');
$valid   = TRUE; 
?>
    <main>
     <section>
      <h1>Where are we?</h1>
       <p> We're located in Montgaillard, Occitanie, France.
      <hr>
      </section>
      
      <section>
      <h1>Neighbourhood:</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo nisi eu massa lacinia, eget eleifend turpis viverra. Aenean nec sagittis sem, vitae bibendum risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam tincidunt urna augue, vitae egestas metus semper sed. Aenean varius tincidunt pellentesque. Nam molestie dignissim nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ultricies finibus dolor ut ultricies. Donec venenatis libero non lacus consequat vestibulum. 
</p>
      <picture>
         <img id="map_image" alt="Location of Montgaillard" src="https://static-maps.yandex.ru/1.x/?l=map&lang=en_US&ll=0.874672,43.929810&z=10&size=600,300&pt=0.874672,43.929810,pm2rdl1">
          <img id="map_image_small" alt="Location of Montgaillard" src="https://static-maps.yandex.ru/1.x/?l=map&lang=en_US&ll=0.874672,43.929810&z=10&size=275,275&pt=0.874672,43.929810,pm2rdl1">
       <figcaption>Our location via GPS</figcaption>
      </picture>
      </section>
    </main>
<?php
include('includes/footer.php');
?>
