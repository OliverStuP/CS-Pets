<?php
define('ISITSAFETORUN', TRUE);
define("TITLE", "Contact | CS Pets");
include('includes/header.php');
$valid   = TRUE; 
?>
    <main>
       <section>
        <h1>To contact us, please fill out the form below!</h1>
        <article class="box">
        <form action="process.php">
                <p>
                <label>Name:</label>
                <input type="text" name="name" placeholder="Enter your name">
                </p>
                
                <p>
                <label>Email:</label>
                <input type="text" name="email" placeholder="Enter your email address">
                </p>
                
                <p>
                <label>Subject:</label>
                <input type="text" name="subject" placeholder="Enter your subject"> 
                </p>
                
                <p>
                <label>Message:</label>
                <textarea name="message" id="conmessage" cols="30" rows="10"></textarea>
                </p>
                
                <p><input id="submit" type="submit" name="submit" value="Submit"></p>
        </form>
        </article>
              </section>
              
              <section>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam volutpat tellus euismod convallis feugiat. Curabitur at diam euismod, convallis est id, aliquet enim. Duis porta malesuada nisi sed sollicitudin. Maecenas ut neque et elit fermentum dapibus. Ut ligula orci, euismod volutpat fermentum vel, lacinia ut metus. Donec ultrices sapien mollis, efficitur diam at, fermentum lacus. Duis vehicula dolor consequat scelerisque vestibulum. Proin sit amet odio sit amet mauris pharetra cursus at at sem. Duis eget pharetra sapien. Nunc quis efficitur felis, vel dictum magna. Curabitur sagittis libero vitae vehicula sagittis. In porta tellus nec mi elementum gravida. In gravida nibh eu porttitor mollis. Etiam accumsan tincidunt urna at commodo. Quisque vestibulum odio fermentum velit vulputate ullamcorper. Proin tincidunt pharetra accumsan. 
</p>
               </section>
    </main>
<?php
include('includes/footer.php');
?>
