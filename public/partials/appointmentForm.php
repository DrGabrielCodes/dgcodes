


<form id="appointment-form" action="/formhandlers/appointmentFormHandler.php" method="POST">
            <label for="select" class="services-label">
                *Select a service or reason for appointment:
                <select name="purpose" class="select-services form-item dropdown-menu">
                    <option class="services-item"></option>
                    <option class="services-item">Responsive Website design</option>
                    <option class="services-item">Personal porfolio website</option>
                    <option class="services-item">Business Landing page</option>
                    <option class="services-item">Prescription lenses</option>
                    <option class="services-item">Eye Consultation</option>

                </select>
            </label>
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
                <button type="submit" name="submit" class="button submit-btn" id="appointment-btn"> Book
                    Appointment </button>
            </label>
            <div id="alert-message"></div>

        </form>