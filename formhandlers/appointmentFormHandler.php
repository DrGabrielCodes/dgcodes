<?php require_once '../public/partials/header.php' ?>

<main>
   <section class="section-container">
      <?php
      $submit = $_POST['submit'];
    

      if (!isset($submit)) {
         echo "Something went wrong. Your message was not sent. Please try again.";
      } if (isset($submit)) {
         $name = $_POST['name'];
         $visitor_email = $_POST['email'];
         $appointmentDate = $_POST["appointment-date"];
         $appointmentTime = $_POST["appointment-time"];
         $phoneNumber = $_POST['phonenumber'];
   
      if ($name === '' || $visitor_email === ''|| $appointmentDate === ''|| $appointmentTime === '' ){
         header('Location: /public/book-appointment.php?notsuccessful');
      }
         
         $emailFrom = 'guest@drgabrielcodes.com';
         $subject = 'Appointment booking';
         
         $emailTo = "gabriel4n44@yahoo.com";
         $emailBody = 'A client at DGCodes has booked an appointment with you, with the following details:\n\n
         name:'.$name.'\n'.
         'email:'.$visitor_email.'\n'.
         'Appointment Date:'.$appointmentDate.'\n'.
         'Appointment Time:'.$appointmentTime.'\n'.
         'Purpose of appointment:'.$visitor_email.'\n'.
         
          
         $headers = 'From: $emailFrom\r\n ';
         $headers .= 'Reply-To: $visitor_email\r\n';

         mail($emailTo, $subject, $emailBody, $headers);
         
         
         //header('Location: /index.php?mailsent');
?>
       <p class="green-bg success-msg"> <?php echo " Thank you " . $name . " for contacting us. "."You have successfully sent a message to DGCodes. Expect a reply soonest. <br>";
      } 

      ?> </p>
      <div class="black-bg section">
      <p class="">Click
         <a href="/public/book-appointment.php">here</a> to go back to the appointment page
      </p>
      <p> Or click
         <a href="/index.php">here</a> to go back to the homepage.
      </p>
      </div>
   </section>
</main>
<?php require_once '../public/partials/footer.php' ?>