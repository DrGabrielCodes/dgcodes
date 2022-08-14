<?php
$title = "Message Handler";
require_once './database.php';

$submit = $_POST['submit'];
$successMessage = '';
$errorMessage = '';

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];
$emailFrom = 'guest@drgabrielcodes.com';
$subject = $_POST['subject'];
$date = date('Y-m-d H:i:s');

if (!isset($submit)) {
   $errorMessage = "Something went wrong. Your message was not sent. Please try again.";
   header('Location: /index.php?tryagain');
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($submit)) {
   
   if ($name || $message || $visitor_email) {
      
      $statement2 = $pdo->prepare("INSERT INTO users_message (name, visitors_email, subject, message, email_from, date)  VALUES (:name, :visitors_email, :subject, :message, :email_from, :date  ) ");
      $statement2->bindValue(':name', $name);
      $statement2->bindValue(':visitors_email', $visitor_email);
      $statement2->bindValue(':subject', $subject);
      $statement2->bindValue(':message', $message);
      $statement2->bindValue(':email_from', $emailFrom);
      $statement2->bindValue(':date', $date);
      $statement2->execute();



      $successMessage = "Thank you " . $name . " for contacting us.  You have successfully sent a message to DGCodes. Expect a response soonest.  <br>";
   } else {
      $errorMessage = "Something went wrong. Your message was not sent successfully. Please try again.";
   }
}
require_once '../public/partials/header.php';

?>


<main class="main-contents">
   <section class="section-container">
   <?php if ($errorMessage){ ?> <div class="container not-success-msg">
          <?php  echo $errorMessage;
          } elseif($successMessage){?> <div class="container success-msg">
                <?php  echo $successMessage;
               } ?>
      </div>

      <div class="black-bg padded">
         <p>Click
            <a href="/public/book-appointment.php">here</a> to go back to the appointment page
         </p>
         <p> Or click
            <a href="/public/index.php">here</a> to go back to the homepage.
         </p>
      </div>
   </section>
</main>
<?php require_once '../public/partials/footer.php' ?>