<?php 
$title = "About me";

require_once './partials/header.php'; ?>


        <main class="main-contents">
            <section class="section-container section-container-1 section">
                <h2 class="section-heading intro-heading">About me </h2>

                <img src="../images/my-pix-3.png" class="my-image my-image-1" />

                <article class="article section-article">
                    <div class="article-div article-div-1"> I'm Gabriel Nnamdi Adirinwune, a doctor of optometry graduate from Madonna University Nigeria and a front-end web developer. I graduated from optometry school in 2018. I started my self exploration in web development  around september, 2020 after my internship. It has been an interesting journey so far. Using various online resources, I have been able obtain a good knowlegde of HTML, CSS, and vanilla javaScript. I also have basic knowlegde of bootstrap, PHP, react and python; I'm currently learning more about these programming languages/frameworks. I would also share my thoughts and findings on them along the way on this platform and on my twitter handle. Stay connected to know more.
                    I'm keen on delivering results to problems and in a timely fashion also. For me it's all about the results. I enjoy helping
                people get solutions to their problems and achieve their goals with my skill sets. 
                When I'm not working or coding, I enjoy listening to good music, play football with friends or play video games.
                Sometimes I also do health related data analysis for research projects using SPSS.
                My goal is to contribute my own quota in solving little problems encountered in everyday living especially as it pertains to eye health sector and startup businesses.
    
                    </div>
                    <div class="article-div article-div-2">
                        <ul class="skills">
                            <span class="skills-heading">Skills</span>
                                <li> HTML/HTML5 </li>
                                <li> CSS/CSS3 </li>
                                <li>Git/GitHub </li>
                                <li>JavaScript & React</li>
                                <li>PHP</li>
                            </ul>
                    </div>
                </article>
            </section>
            <?php require_once './partials/services.php' ?>

            <section class="section-container message-container">
            <?php require_once './partials/messageForm.php' ?>
            </section>
        </main>
     <?php require_once './partials/footer.php' ?>
     <script src="/scripts/formValidation.js"></script>
</body>

</html>