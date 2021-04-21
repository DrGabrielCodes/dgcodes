<?php
$title = "Recommend";
require_once '../public/partials/header.php';

require_once './database.php';
// $pdo->prepare('SELECT * FROM users_message ORDER BY date ASC');

// $statement = $pdo->prepare('SELECT * FROM recommendation ORDER BY date ASC');
// $statement->execute();
// $users = $statement->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($users);
// echo '<pre>';


?>
<main class="main-contents">
<section class="section-container container recommendation-input">
<form action="./recommendFormHandler.php" id="recommendation-form" method="POST" id="recommendation-form">
<p>Thanks for considering me for this recommendation. Kindly enter the details below.</p>
<label for="name">Name</label>
<input type="text" name="name" class="name form-item" id="name" Placeholder="Please enter your fullname" />
<label for="social-link">Social Link (linkedIn or twitter) </label>
<input type="text" name="social-link" class="social-link form-item" id="social-link" Placeholder="Enter your social media link here, prefferedly linkedIn or twitter" />
<label for="recommendation-msg"></label>Your kind words
<textarea type="text" name="recommendation-msg" class="recommendation-msg form-item" id="recommendation-msg" Placeholder="Write your thoughts here." ></textarea>
<label for="submit">
<input type="submit" name="submit" id="recommend-btn" class="recommend-btn button" value="Recommend" />
</label>
</form>
<input name="consent" id="consent" type="checkbox"  /><div class="consent-msg form-item">I understand that all recommendation details provided above, including my full name and social link will be displayed on this site's recommendation section and I wish to continue.</div>

</section>

</main>


<?php require_once '../public/partials/footer.php' ?>
<script src="/scripts/formValidation.js"></script>
</body>

</html>