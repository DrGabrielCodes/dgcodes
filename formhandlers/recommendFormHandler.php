<?php
$title = "Recommendation Handler";
require_once './database.php';

$submit = $_POST['submit'];
$successMessage = '';
$errorMessage = '';

$name = $_POST['name'];
$socialLink = $_POST['social-link'];
$recommendationMsg = $_POST['recommendation-msg'];
$emailFrom = 'guest@drgabrielcodes.com';
$date = date('Y-m-d H:i:s');
$consent = $_POST['consent'] ?? null;


// var_dump($_POST);
// exit;

if (!isset($submit)) {
   $errorMessage = "Something went wrong. Your message was not sent. Please try again.";
   header('Location: /index.php?tryagain');
}



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($submit)) {
   

   if ($name || $socialLink || $recommendationMsg) {
      
      $statement3 = $pdo->prepare("INSERT INTO recommendation (name, social_link, recommendation_msg, consent)  VALUES (:fullname, :socialLlink, :recommendation) ");
      $statement3->bindValue(':fullname', $name);
      $statement3->bindValue(':socialLink', $socialLink);
      $statement3->bindValue(':recommendation', $recommendationMsg);
     // $statement->bindValue(':consentStatus', $consent);
      $statement3->execute();



      $successMessage = "Thank you " . $name . " for your recommendation.  You have successfully sent a recommendation for DGCodes.  <br>";
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
            <a href="/index.php">here</a> to go back to the homepage.
         </p>
      </div>
   </section>
</main>
<?php require_once '../public/partials/footer.php' ?>