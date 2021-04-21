<?php
$title = "Appointment Handler";
require_once '../public/partials/header.php';
require_once './database.php';
?>

<main class="main-contents">
<?php
$submit = $_POST['submit'];
if (!isset($submit)) {
   echo "Something went wrong. Your message was not successfully booked. Please try again.";
   }
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$appointmentDate = $_POST["appointment-date"];
$appointmentTime = $_POST["appointment-time"];
$phoneNumber = $_POST['phonenumber'];
$emailFrom = 'guest@drgabrielcodes.com';
$subject = $_POST['purpose'];

   if (isset($submit)) {
   if ($name === '' || $visitor_email === '' || $appointmentDate === '' || $appointmentTime === '') {
      header('Location: /public/book-appointment.php?notsuccessful');
   }
   $emailTo = "gabrieladirinwune@gmail.com";
   $emailBody = 'A client at DGCodes has booked an appointment with you, with the following details:\n\n
         name:' . $name . '\n' .
      'email:' . $visitor_email . '\n' .
      'Appointment Date:' . $appointmentDate . '\n' .
      'Appointment Time:' . $appointmentTime . '\n' .
      'Purpose of appointment:' . $visitor_email . '\n' .

   $headers = 'From: $emailFrom\r\n ';
   $headers .= 'Reply-To: $visitor_email\r\n';

   if (mail($emailTo, $subject, $emailBody, $headers)) {
      //header('Location: /index.php?mailsent');
?>


      <p class="green-bg success-msg"> <?php echo " Mail sent successfully! <br>" . '<br>';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($submit)) {
   if ($name === '' || $visitor_email === '') {
    echo "Something went wrong. Your message was not sent successfully. Please try again.";
       } else {
       $statement = $pdo->prepare("INSERT INTO users_appointment (name, visitors_email, purpose, phone_number, date, time, email_from)  VALUES (:name, :visitors_email, :purpose, :phone_number, :date, :time, :email_from) ");
       $statement->bindValue(':name', $name);
       $statement->bindValue(':visitors_email', $visitor_email);
       $statement->bindValue(':purpose', $subject);
       $statement->bindValue(':phone_number', $phoneNumber);
       $statement->bindValue(':date', $appointmentDate);
       $statement->bindValue(':time', $appointmentTime);
           $statement->bindValue(':email_from', $emailFrom);
            $statement->execute();
            echo "Thank you " . $name . " for contacting us.  You have successfully sent a message to DGCodes. Expect a response soonest.  <br>";
         }
}
   } else { ?>
      <p class="error-msg"> <?php echo "Mail was not sent successfully. Check mailing setup and try again.";
   } 
}
 ?>
      
         <section class="">
            </p>
            <div class="black-bg section section-container">
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