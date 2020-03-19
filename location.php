<?php
define('ISITSAFETORUN', TRUE);
define("TITLE", "Location | Haute Vue");
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
       <p>We live down a quiet country road where tractors are almost the only form of traffic! Our own fields are all that surrounds us; one is a walnut plantation which you are free to wander around. The rest is grass and fruit trees so we have no neighbours for you to worry about!</p>
      <picture>
         <img id="map_image" alt="Location of Montgaillard" src="https://static-maps.yandex.ru/1.x/?l=map&lang=en_US&ll=0.874672,43.929810&z=10&size=600,300&pt=0.874672,43.929810,pm2rdl1">
          <img id="map_image_small" alt="Location of Montgaillard" src="https://static-maps.yandex.ru/1.x/?l=map&lang=en_US&ll=0.874672,43.929810&z=10&size=275,275&pt=0.874672,43.929810,pm2rdl1">
       <figcaption>Exact location information is provided after a booking is confirmed.</figcaption>
      </picture>
      </section>
    </main>
<?php
include('includes/footer.php');
?>