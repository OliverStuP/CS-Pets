<?php
define('ISITSAFETORUN', TRUE);
define("TITLE", "Greens | Haute Vue");
include('includes/header.php');
$valid   = TRUE; 
?>
    <main> 
     <section>
      <h1>Scenery:</h1>
      <picture class="home-image">
          <img src="images/greens1-1024.jpg" alt="home image">
          <figcaption>Sit with a glass of wine and enjoy the view of our walnut plantation with the Pyrenees in the background.</figcaption>
           </picture>
      <br>
      <picture class="home-image"> 
          <img src="images/greens2-1024.jpg" alt="home image">
       <figcaption>Feel free to stroll round our vineyard.</figcaption>
       </picture>
      <br>
      <picture class="home-image"> 
          <img src="images/greens3-1024.jpg" alt="home image">
       <figcaption>Our home is all on ground floor!</figcaption>
       </picture>
       <br>
      <hr>
      </section>
      
      <section>
      <h1>Pool:</h1>
      <picture class="home-image"> 
          <img src="images/greens4-1024.jpg" alt="home image">
            <figcaption>Kick back and relax with a glass of wine. Before or after your swim.</figcaption>
            </picture>
            </section>
    </main>
<?php
include('includes/footer.php');
?>