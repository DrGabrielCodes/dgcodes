<?php
$title = "Dr. Gabriel Codes";
require_once './public/partials/header.php';
?>

<main class="main-contents">
    <section class="section-container section-container-1 section">
        <h2 class="section-heading intro-greeting">Hi there!</h2>

        <h3 class="intro">I create beautiful websites that are fully responsive with all your devices.</h3>
        <h3 class="intro">I help startup businesses, individuals and professionals have an outstanding website and online branding. </h3>

        <h3 class="intro"> <span class="myname"> I'm Gabriel ,</span><span class="job1"> a front-end web developer</span> <span class="job2"> and an optometrist.</span> </h3>
        <h3 class="intro">Welcome to my world!</h3>
        <img src="images/my-pix-3.png" class="my-image my-image-1" />

        <article class="article section-article">
            <div class="article-div article-div-1"> I started my web
                development journey in 2020. It's been an exciting experience ever since. I love
                coding. I have good knowlegde and skill in HTML, CSS, and javaScript. I'm currently learning more about CSS and javaScript (React) framework. I also do health related data analysis for research projects. For me it's all about the results. I enjoy helping
                people get results and achieve their goals with my skill sets.
                <p>Want to know more <a href="webpages/about-me.html"> about me?...</a></p>

            </div>
            <div class="article-div article-div-2">
                Got a job for me?
                <button class="button hire-btn">Hire me</button>
            </div>

        </article>
    </section>


    <section class="section-container services-container">
        <h2 class="section-heading services-heading"> Services I offer</h2>
        <article class="service-container">
            <p class="services-list-heading">Web development and data analysis</p>
            <ul class="services-list">
                <li class="services-list-item">Personal portfolio websites</li>
                <li class="services-list-item">Startup Business websites</li>
                <li class="services-list-item">Fully Responsive Web design</li>
                <li class="services-list-item">Website design for eye and health care businesses and systems
                </li>
                <li class="services-list-item">Research and Data analysis using SPSS</li>
            </ul>
        </article>
        <article class="service-container">
            <p class="services-list-heading">Professional optometric services</p>
            <ul class="services-list">
                <li class="services-list-item">Eye care consultation,
                    diagnosis and management of
                    eye disorders</li>
                <li class="services-list-item">Spectacle and contact lens prescriptions</li>
                <li class="services-list-item">Anti-blue light and transition (photochromic) lenses</li>
            </ul>
        </article>


    </section>
    <section class="section-container message-container">
    <?php require_once './public/partials/messageForm.php' ?>

    </section>
    <section class="section-container  book-apointment-container">
        <span>Need a consultation?</span>
        <button class="button booking-btn" id="booking-btn">Book Your Appointment Now</button>
    </section>
</main>


<?php require_once './public/partials/footer.php' ?>
<script src="/scripts/formValidation.js"></script>
</body>

</html>