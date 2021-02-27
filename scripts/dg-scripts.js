// JavaScript source code

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else { ready() }

function ready() {
    switch (document.title) {
        case "Dr. Gabriel Codes": var appointmentBooking = document.getElementsByClassName("booking-btn")[0]
            console.log(appointmentBooking)
            appointmentBooking.addEventListener('click', getAppointmentForm);
            break;
        case "Appointment reason": var continueBtn = document.getElementsByClassName("continue-btn")[0]
            console.log(continueBtn)
            continueBtn.addEventListener('click', appointmentDetails);
            break;
        case "Appointment details": var appointmentBtn = document.getElementsByClassName("appointment-btn")[0]
            console.log(appointmentBtn)
            appointmentBtn.addEventListener('click', submitForm);
            break;
        case "Contact me": var appointmentBtn = document.getElementsByClassName("appointment-btn")[0]
            console.log(appointmentBtn)
            appointmentBtn.addEventListener('click', submitForm);
            break;
        case "Privacy - policy": var appointmentBooking = document.getElementsByClassName("booking-btn")[0]
            console.log(appointmentBooking)
            appointmentBooking.addEventListener('click', getAppointmentForm);
            break;
        case "Terms and conditions": var appointmentBooking = document.getElementsByClassName("booking-btn")[0]
            console.log(appointmentBooking)
            appointmentBooking.addEventListener('click', getAppointmentForm);
            break;
    }
}




function getAppointmentForm() {
    switch (document.title) {
        case "Dr. Gabriel Codes":
            location.href = 'webpages/select-service.html';
            break;
        case "Privacy - policy":
            location.href = 'select-service.html';
            break;
        case "Dr. Gabriel Codes":
            location.href = 'select-service.html';
            break;    
    }
}


    function submitForm() {
        var name = document.getElementById("name").value
        var time = document.getElementById('appointment-time').value
        var date = document.getElementById('date').value
        var phoneNumber = document.getElementById('phone-number').value
        /*let inputValues = [name, time, date, phoneNumber]
        for (var i =0; i < inputValues.length; i++){
            let inputValue = inputValues[i]
            if (inputValue.includes("")) {
                
                alert('Please, complete necessary details to continue.')
            } else {
                alert("Thank you " + name +
                    ", you have successfully made an appointment with Pegasus Eyecare Consultants. Have a great day!");
            } return;
        }
        
    }*/
        switch (phoneNumber && name && date && time) {
            case "": alert('Please, complete necessary details to continue.');
                break;
            default: alert(`Thank you ${name}, you have successfully booked an appointment with Dr. Gabriel Cdes. Have a great day!`)
        }

        /*if (phoneNumber || name || date || time == "") {
            alert('Please, complete necessary details to continue.')
        } else {
            alert("Thank you " + name +
                ", you have successfully made an appointment with Pegasus Eyecare Consultants. Have a great day!");
        }*/

        //[name, time, date, phoneNumber].includes(""){alert('Please, complete necessary details to continue.')
    }



    function appointmentDetails() {
        var servicesItem = document.getElementsByClassName("select-services")[0].value
        if (servicesItem == "") { alert("Select a service to continue.") }
        else { location.href = 'book-appointment.html' };

    }
