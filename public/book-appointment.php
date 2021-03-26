<?php require_once './partials/header.php' ?>

<main class="main-contents">
    <section class="section-container section-container-1 forms-section">

        <p>
            <b> Fill this appointment form appropriately: </b>
        </p>
        <form id="appointment-form" action="/formhandlers/appointmentFormHandler.php" method="POST">
            <label for="purpose"></label>
            <p class="white-bg">Purpose of appointment: <?php echo "purpose" ?></p>
            <label for="date" class="form-label">
                Date of Appointment:
                <input type="date" class="form-item" name="appointment-date" placeholder="Choose date" id="date" />
            </label>
            <label for="appointment-time" class="form-label">
                Appointment Time:
                <input type="time" class="form-item time" name="appointment-time" id="appointment-time" />
            </label>
            <label for="name" class="form-label">
                Name:
                <input type="text" class="form-item" name="name" id="name" placeholder="Enter your name..." />
            </label>
            <label for="email" class="form-label">
                Email:
                <input type="email" id="email" class="form-item" name="email" placeholder="email@example.com" />
            </label>
            <label for="phonenumber" class="form-label">
                Phone Number:
                <input type="tel" class="form-item" name="phonenumber" id="phone-number" />
            </label>
            <label for="submit" class="form-label">
                <button type="submit" name="submit" class="button submit-btn" id="appointment-btn" > Book
                    Appointment </button>
            </label>
            <div id="alert-msg"></div>

        </form>

    </section>



</main>

<?php require_once './partials/footer.php' ?>