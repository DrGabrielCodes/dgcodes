<?php require_once './partials/header.php' ?>

        <main class="main-contents">
            <section class="section-container section-container-1 forms-section">
                <p>
                    <b> Fill this appointment form appropriately: </b>
                </p>
                <form method="post">
                <label for="purpose"></label>
                <p class="white-bg">Purpose of appointment: <?php echo 'purpose' ?></p>
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
                        <button type="submit" name="submitBtn" class="button appointment-btn" id="appointment-btn" onclick="return submitForm()"> Book
                            Appointment </button>
                    </label>
                </form>
                
            </section>



        </main>

        <?php require_once './partials/footer.php' ?>