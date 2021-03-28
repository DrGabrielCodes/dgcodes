
<?php 
$title = "Select services";
require_once './partials/header.php'; 
?>


<main class="main-contents">
    <section class="section-container services-container">
    </section>
    <section class="section-container message-container">
        <p>
            <b> Choose a serivice below </b>
        </p>
        <form method="GET">
        <div id="alert-msg"></div>
            <label for="select" class="services-label">
            
                *Select:
                <select class="select-services form-item dropdown-menu">
                    <option class="services-item"></option>
                    <option class="services-item">Responsive Website design</option>
                    <option class="services-item">Personal porfolio website</option>
                    <option class="services-item">Business Landing page</option>
                    <option class="services-item">Prescription lenses</option>
                    <option class="services-item">Eye Consultation</option>

                </select>
            </label>

            <button type="button" class="button continue-btn" id="continue-btn" onclick="return getAppointmentForm()"> Continue</button>
        </form>
    </section>


</main>

<?php require_once './partials/footer.php' ?>
</body>

</html>