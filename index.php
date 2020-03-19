<?php
define('ISITSAFETORUN', TRUE);
define("TITLE", "Home | Haute Vue");
include('includes/header.php');
$valid   = TRUE; 
?>
    <main> 
     <section>
      <h1>For a relaxing break!</h1>
      <picture class="home-image"> 
          <img src='images/index1-1440.jpg' alt="home image">
          <!-- Photoshop images so different sizes are available for different screen sizes -->
      </picture>
      <p>You can either book through <a class="p_link" href="https://www.airbnb.com/rooms/32866902?adults=1&toddlers=0&guests=1&s=PW37Gf0d">Airbnb</a> or our <a class="p_link" href="./contact.php">contact page.</a></p>
      <hr>
      </section>
      
      <section>
      <h1>What we offer:</h1>
            <ul>
            <li>4 guests</li> 
            <li>2 double bedrooms on the ground floor</li> 
            <li>2 double beds</li> 
            <li>2 en suite bathrooms</li>
            </ul>
      <hr>    
      </section>
      
      <section>
      <h1>What we're about:</h1>
        <p>Welcome to Montgaillard!</p>
        <p>We are located in a rural part of France; but there's easy access to Toulouse airport, as well as A62 and A20 auto routes.</p>
        <p>We're set in over 15 acres of land, with guaranteed peace and quiet.</p>
        <p>Be sure to check out the views of the Pyrenees mountains.</p>
      <hr> 
      </section>
      
      <section>
      <h1>Amenities:</h1>
      <article class="box">    
       <h3>Basics</h3>
       <h4>Air conditioning:</h4>
        <p>Available in both bedrooms.</p>
       <h4>Essentials:</h4>
        <p>Complimentary towels and soap.</p>
       <h4>Heating:</h4>
        <p>Central heating.</p>
       <h4>Furniture:</h4>
        <p>A desk with space for a laptop and a comfortable chair to sit in.</p>
       <h4>Wi-Fi:</h4>
        <p>Continuous access.</p>
        </article>
      <br>
      <article class="box">
       <h3>Facilities</h3>
       <h4>Free parking</h4>
       <h4>Hot tub</h4>
       <h4>Pool:</h4>
        <p>Private or shared.</p>
      </article>
      <br>
      <article class="box">
       <h3>Dining</h3>
       <h4>Breakfast:</h4>
        <p>Private or shared.</p>
        <p>A continental breakfast is included as part of the package. If you have allergies or dietary concerns, please use the <a class="p_link" href="./contact.php">contact page</a>.</p>
        <h4>Dinner:</h4>
        <p>Private or shared.</p>
        <p>A four-course evening meal can be included at an additional cost. More information is provided on our <a class="p_link" href = "about.php">About us</a> section.</p>
      </article>
      <br>
      <article class="box">        
       <h3>Guest access</h3>
       <h4>Private entrance:</h4>
        <p>Separate street or building entrance.</p>
      </article>
      <br>
      <article class="box">
       <h3>Bed and bath</h3>  
       <ul>
        <li>Hair dryer</li>
        <li>Hangers</li>
		<li>Complimentary dressing gowns and slippers.</li>
        <li>Room can be locked for privacy.</li>
        <li>Complimentary shampoo and soap.</li>
        <li>Fridge</li>
		<li>Complimentary tea and coffee if you're feeling thirsty.</li>
       </ul> 
      </article>
      <br>
      <article class="box">           
       <h3>Safety features</h3>   
       <ul>
        <li>Carbon monoxide detector</li> 
        <li>Smoke detector</li>
       </ul>
      </article>
      <br>
      <article class="box">              
       <h3>Sleeping arrangements</h3>
       <h4>Bedroom 1:</h4>
        <p>1 luxurious double bed.</p>  
       <h4>Bedroom 2:</h4>
        <p>1 luxurious double bed.</p>
      </article> 
      <br>      
      <hr>  
      </section>
      
      <section>
      <h1>When we're available:</h1>
        <p>We're open from May to October.</p>  
        <a href="https://www.airbnb.com/rooms/32866902?adults=1&toddlers=0&guests=1&s=PW37Gf0d">
            <p>Check our booking page for any exceptions.</p>
        </a>
      <hr>
      </section>
      
      <section>
      <h1>Cancellations:</h1>
        <p>Cancellation is free for 48 hours after your reservation has been confirmed.</p>
        <p>After that, cancel up to 24 hours before check-in and get a full refund, minus the service fee.</p>
        <hr>
        </section>
        
        <section>
      <picture id="sunset"> 
      <img src="./images/sunset-1440.jpg" alt="home image">
      <figcaption>Who wouldn't want a sunset like this?</figcaption>
      </picture>
      </section>
    </main>
<?php
include('includes/footer.php');
?>