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

let Name = document.getElementById("name").value;
let time = document.getElementById('appointment-time').value;
 let date = document.getElementById('date').value;
 let phoneNumber = document.getElementById('phone-number').value;



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


    function submitForm(e) {
        e.preventDefault();
        let inputValues = [Name, time, date, phoneNumber]

        for (var i =0; i < inputValues.length; i++){
            let inputValue = inputValues
            if (inputValue.includes("")) {
                
                alert('Please, complete necessary details to continue.')
            } else {
                clearForm();
                alert("Thank you " + Name +
                    ", you have successfully made an appointment with Pegasus Eyecare Consultants. Have a great day!");
                        
            } return
        }
        
    }
        // switch (phoneNumber && Name && date && time) {
        //     case "": alert('Please, complete necessary details to continue.');
        //         break;
        //     default: alert(`Thank you ${Name}, you have successfully booked an appointment with Dr. Gabriel Cdes. Have a great day!`)
        // }

        // if (phoneNumber === '' || Name === '' || date ==='' || time == '') {
        //     alert('Please, complete necessary details to continue.')
        // } else {
           
        //     alert("Thank you " + Name +
        //         ", you have successfully made an appointment with Pegasus Eyecare Consultants. Have a great day!");
        
        // }

        

        
    

const clearForm = () => {
 // To clear inputs
        Name = '';
        phoneNumber = '';
        email = '';
}

    function appointmentDetails() {
        var servicesItem = document.getElementsByClassName("select-services")[0].value
        if (servicesItem == "") { alert("Select a service to continue.") }
        else { location.href = 'book-appointment.html' };

    }
