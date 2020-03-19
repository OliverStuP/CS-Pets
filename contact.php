<?php
define('ISITSAFETORUN', TRUE);
define("TITLE", "Contact | Haute Vue");
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
               <p>Your emails will be sent to hautevuecostes@gmail.com. Feel free to ask about bookings, package deals or any other relevant topics. Please specify what it is you want to write about in the subject field.</p>
               
               <p>We promise to respond to queries as soon as possible. Please allow for up to two working days for us to answer your questions.</p>
               </section>
    </main>
<?php
include('includes/footer.php');
?>