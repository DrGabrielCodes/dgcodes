﻿<?php require_once './partials/header.php' ?>
<main class="main-contents">
    <section class="section-container message-container">
        <form>
            <caption class="caption form-item">Have a business or project to discuss?
                Please leave a message below here. </caption> <br />
            <label for="name"> Name
                <input type="text" class="name form-item" name="name" placeholder="Enter your name" />
            </label>
            <label for="email"> Email
                <input type="email" class="email form-item" name="email" placeholder="Enter your email" />
            </label>
            <label for="subject"> Subject
                <input type="text" class="subject form-item" name="subject" placeholder="Enter your message subject" />
            </label>
            <label for="message"> Message
                <textarea rows="6" cols="30" class="message form-item" name="message" placeholder="Type your message"></textarea>
            </label>
            <label class="form-label">
                <input type="submit" class="button " value="Send message" />
            </label>
        </form>
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
        <form method="post">
            <label for="select" class="services-label">
                *Select:
                <select class="select-services form-item">
                    <option class="services-item"></option>
                    <option class="services-item">Eye Consultation</option>
                    <option class="services-item">Prescription lenses</option>
                    <option class="services-item">Web design</option>
                    <option class="services-item">Data analysis</option>
                    <option class="services-item">Tutoring/Mentorship</option>

                </select>
            </label>
            <label for="date" class="form-label">
                Date of Appointment:
                <input type="date" class="form-item" name="appointment-date" placeholder="Choose date" id="date" required />
            </label>
            <label for="time" class="form-label">
                Appointment Time:
                <input type="time" class="form-item" name="appointment-time" id="appointment-time" required />
            </label>
            <label for="Name" class="form-label">
                Name:
                <input type="text" class="form-item" name="client-name" id="name" placeholder="Enter your name..." required />
            </label>
            <label for="email" class="form-label">
                Email:
                <input type="email" class="form-item" name="email" placeholder="email@example.com" />
            </label>
            <label for="phonenumber" class="form-label">
                Phone Number:
                <input type="tel" class="form-item" name="phonenumber" id="phone-number" required />
            </label>
            <label for="submitBtn" class="form-label">
                <button type="submit" name="submitBtn" class="button appointment-btn" id="appointment-btn"> Book
                    Appointment </button>
            </label>
        </form>

    </section>



</main>

<?php require_once './partials/footer.php' ?>