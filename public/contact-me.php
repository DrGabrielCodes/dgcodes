<?php
$title = "Contact me"

?>
<?php require_once './partials/header.php' ?>
<main class="main-contents">
    <section class="section-container message-container">
        <div>
            <caption class="caption form-item">Have a business or project to discuss?
                Please leave a message below here. </caption> <br />
        </div>
        <?php require_once './partials/messageForm.php' ?>
        
    </section>

    <section class="section-container-social contact">
        <p>
            Give me a call today on my Office line: <a href="tel:{+2347062141378}"> +2347062141378 </a> <br />
            Contact via whatsapp <a href="https://wa.me/{234}{7062141378}"> +2347062141378 </a> <br />
            Send me an email on: <a class="company-email email" href="mailto:{drgabrielcodes@gmail.com}?subject={subject}&body={content}"> drgabrielcodes@gmail.com</a>
        <address href="https://maps.app.goo.gl/rVqjs8xKCQVECNr4A">
            Port Harcourt, Rivers State,
            Nigeria.
        </address>
        <div class="section-container-social-items"> Get in touch with me on the following socials
            <div class="socials-area contact-area">

                <span><a class="socials" href="https://www.twitter.com/drgabrielnnamdi" target="_blank">
                        twitter</a></span>
                <span>
                    <a class="socials" href="https://www.facebook.com/gabriel.nnamdi1"> facebook</a>
                </span>
                <span> <a class="socials" href="https://www.instagram.com/gabriel4n44" target="_blank">
                        Instagram</a></span>

            </div>
        </div>
    </section>
    <section class="section-container section-container-1 forms-section">

        <p>
            <b> Or whish to book an appointment? Complete and submit the form below. </b>
        </p>
        <?php require_once './partials/appointmentForm.php' ?>
    </section>


</main>

<?php require_once './partials/footer.php' ?>
<script src="/scripts/formValidation.js"></script>
<script src="/scripts/appointmentForm.js"></script>
</body>

</html>