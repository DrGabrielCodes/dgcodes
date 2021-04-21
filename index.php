<?php
// This makes a connection to the database
// $pdo = new PDO('mysql:host=localhost;port=3306;dbname=dgcodes_database', 'root', '');
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
require_once './formhandlers/database.php';

$title = "Dr. Gabriel Codes";
require_once './public/partials/header.php';
?>
<main class="main-contents">
    <section class="section-container section-container-1 section">
        <h2 class="section-heading intro-greeting">Hi there!</h2>

        <h3 class="intro"> <span class="myname"> I'm Gabriel ,</span><span class="job1"> a front-end web developer</span> <span class="job2"> and an optometrist.</span> </h3>
        <h3 class="intro">Welcome to my world!</h3>

        <h3 class="intro">I create beautiful websites that are fully responsive with all your devices.</h3>
        <h3 class="intro">I help startup businesses, individuals and professionals have an outstanding website and online branding. </h3>

        
        <img src="images/my-pix-3.png" class="my-image my-image-1" />

        <article class="article section-article">
            <div class="article-div article-div-1">  I help individuals and businesses create beautiful websites that have awesome user experience and interface. I have good knowlegde and skill in HTML, CSS, and javaScript. I'm currently learning more about CSS and javaScript (React) framework. I focus on the results and give the best to every work I do.  I enjoy helping  individuals and businesses achieve their goals.
                <p>Want to know more about me? <a class="about-me" href="/public/about-me.php">Check here.</a></p>

            </div>
            <div class="article-div article-div-2">
                Got a job for me?
                <a class=" hire-btn" href="mailto:{drgabrielcodes@gmail.com}?subject={subject}&body={content}" target="_blank">Hire me</a>
            </div>

        </article>
    </section>

    <section class="section-container projects-container">
        <div class="projects">
            hello my projects should appear here
        </div>
    </section>
    <?php require_once './public/partials/services.php' ?>

    <section class="section-container message-container">
    <?php require_once './public/partials/messageForm.php' ?>

    </section>
</main>


<?php require_once './public/partials/footer.php' ?>
<script src="/scripts/formValidation.js"></script>
</body>

</html>