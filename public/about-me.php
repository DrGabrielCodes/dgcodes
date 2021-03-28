<?php
$title = "About me"

?>

<?php 
require_once './partials/header.php'; ?>


        <main class="main-contents">
            <section class="section-container section-container-1 section">
                <h2 class="section-heading intro-heading">About me </h2>

                <img src="../images/my-pix-3.png" class="my-image my-image-1" />

                <article class="article section-article">

                    <div class="article-div article-div-1"> I'm Gabriel Nnamdi Adirinwune, a doctor of optometry
                        with over 2 years experience in eye care sector, a data analyst and web developer. When I'm not working or coding, I enjoy listening to good music.
                        I graduated from optometry school in 2018, and I started my web development journey
                        in 2020. It has been an exciting journey so far, I must say. My goal is to contribute my own
                        quota in solving little problems encountered in everyday living especially pertaining to the
                        health sector.
                    </div>
                    <div class="article-div article-div-2">
                        <ul class="skills">
                            <span class="skills-heading">IT skills</span>
                                <li> HTML/HTML5 </li>
                                <li> CSS/CSS3 </li>
                                <li>Git/GitHub </li>
                                <li>JavaScript & React</li>
                                <li>Excel and SPSS </li>

                                <li>Data analysis </li>
                            </ul>
                        
                        <ul class="skills">
                        <span class="skills-heading"> Clinical skills</span>
                        <li> Patient handling</li>
                        <li> Refraction </li>
                       <li> Counseling and ocular diagnostics</li>
                         <li>Contact & Spectacle lens prescription</li>
                      
                    </ul>

                    </div>
                </article>
            </section>
            <section class="section-container services-container">
                <h1 class="section-heading services-heading"> Services</h1>
                <article class="service-container">
                    <ul>Professional optometric services including:
                        <li>Eye care consultation, diagnosis and management of
                            eye disorders</li>
                        <li>Spectacle and contact lens prescriptions</li>
                        <li>Anti-blue light and transition (photochromic) lenses</li>
                    </ul>
                </article>
                <article class="service-container">
                    <ul>Web development and data analysis
                        <li>Responsive Web design</li>
                        <li>Web design for eye and health care businesses and systems</li>
                        <li>SEO websites</li>
                        <li>Tutoring and contents on HTML, CSS and JavaScript</li>
                        <li>Research and Data analysis using SPSS</li>
                    </ul>
                </article>

            </section>
            <section class="section-container message-container">
            <?php require_once './partials/messageForm.php' ?>
            </section>

        </main>

     <?php require_once './partials/footer.php' ?>
     <script src="/scripts/formValidation.js"></script>
</body>

</html>