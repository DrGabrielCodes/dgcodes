<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Message</title>

   <link rel="stylesheet" href="../styles/dg-styles.css">
</head>

<body>
   <div class="body-container">
      <header class="main-header header">
         <h1 class="main-heading portfolio-header logo">Dr Gabriel Codes</h1>
         <span class="motto">...Imagination meets creativity.</span>
         <nav class="navigation-area nav-area">
            <ul class="nav-list">
               <li><a class="nav-link nav-list-item" href="../index.html">Home</a></li>
               <li><a class="nav-link nav-list-item" href="../webpages/about-me.html">About</a></li>
               <li><a class="nav-link nav-list-item" href="../webpages/contact-me.html">Contact me</a></li>

            </ul>

         </nav>


      </header>
      <main>

      <section class="section-container">
         <?php



         

         if (isset($submit)) {
            $submit = $_POST['submit'];
         $name = $_POST['name'];
         $visitor_emailFrom = $_POST['email'];
         $emailFrom = 'guest@drgabrielcodes.com';
         $subject = $_POST['subject'];
         $message = $_POST['message'];
         $emailTo = "gabriel4n44@yahoo.com";
         $emailBody = 'You have a new message from '.$name.'at DrGabrielCodes\n'.'Guesst\'s email: '.$visitor_email.'\n\n'.$message.'\n';
      $headers = 'From: $emailFrom\r\n ';
      $headers .= 'Reply-To: $visitor_email\r\n';
         
      mail($emailTo,$subject,$emailBody,$headers);
      header('Location: indexx.html?mailsent');

            echo "You have successfully sent a message to DGCodes. Thank you " . $name . " for contacting us. <br>";
         } elseif (!isset($submit)) {
            echo "Something went wrong. Your message was not sent. Please try again.";
         };
         

         ?>
         <p>Click 
         <a href="../index.html">here</a> to go back to the home</p>
</section>
      </main>
      <footer class="main-footer footer">
         <iframe class="recommendations-iframe" src="../webpages/recommendations.html" frameborder="0"></iframe>

         <section class="section-container-social">
            <div>
               Give me a call today or email:</div> <span class="flaticon-020-telephone-3 "></span><a href="tel:{+2347062141378}">
               +2347062141378 </a> <br />
            <span class="flaticon-006-smartphone-2"></span> <a href="https://wa.me/{234}{7062141378}">
               +2347062141378 </a> <br />
            <span class="flaticon-013-mail"></span> <a class="company-email email" href="mailto:{drgabrielcodes@gmail.com}?subject={subject}&body={content}">
               drgabrielcodes@gmail.com</a>
            <address href="https://maps.app.goo.gl/rVqjs8xKCQVECNr4A">
               <span class="flaticon-032-placeholder"></span> Port Harcourt, Rivers State, Nigeria.
            </address>
            <div class="section-container-social-items"> Connect with me on socials
               <div class="socials-area contact-area">

                  <span><a class="socials" href="https://www.twitter.com/drgabrielnnamdi" target="_blank">
                        twitter</a></span>
                  <span>
                     <a class="socials" href="https://www.facebook.com/gabriel.nnamdi1" target="_blank"> facebook</a>
                  </span>
                  <span> <a class="socials" href="https://www.instagram.com/gabriel4n44" target="_blank">
                        Instagram</a></span>

               </div>
            </div>
         </section>

         <hr id="footer-line" />
         <div class="footer-body">
            <Nav class="footer-nav">
               <ul class="footer-nav-list">
                  <li class="footer-nav-list-items"><a class="footer-nav-list-item" href="../webpages/about-me.html">About me</a>
                  </li>
                  <li class="footer-nav-list-items"><a class="footer-nav-list-item" href="../webpages/terms-and-conditions.html">Terms </a></li>
                  <li class="footer-nav-list-items"> <a class="footer-nav-list-item" href="../webpages/privacy-policy.html">Privacy Policy</a></li>
               </ul>
            </Nav>
         </div>

      </footer>

   </div>
   <div>
      <div class="footer-copyright">
         <i> © Copyright 2021 Dr. Gabriel Codes. All rights
            reseverved.</i>
         <div>web design by <a href="../index.html" class="dr-gabriel-codes">
               DrGabrielCodes</a>
         </div>
      </div>
   </div>
   
</body>

</html>