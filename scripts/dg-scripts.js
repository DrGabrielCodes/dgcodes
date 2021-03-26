// JavaScript source code

const appointmentBooking = document.querySelector("#booking-btn");
const continueBtn = document.querySelector("#continue-btn");
const appointmentBtn = document.getElementsByClassName("appointment-btn")[0];
const alertMsg = document.querySelector('#alert-msg');

function selectService() {
    location.href = '/public/select-service.php';
}


const getAppointmentForm = () => {
    
    
    console.log('Button clicked')

    var servicesItem = document.querySelectorAll(".select-services")[0].value;
    console.log(servicesItem)
    if (servicesItem) {

        location.href = '/public/book-appointment.php'
    } else {
        alertMsg.classList.add('error')
        alertMsg.innerHTML = 'Please select a service before you continue.';
        setTimeout(() => alertMsg.remove(), 9000)
        return;
    }
}



    // let Name = document.getElementById("name").value;
    // let time = document.getElementById('time');
    // let date = document.getElementById('date').value;
    // let phoneNumber = document.getElementById('phone-number').value;





    // function submitForm(e) {
    //     e.preventDefault();
    //     let inputValues = [Name, time, date, phoneNumber]

    //     for (var i = 0; i < inputValues.length; i++) {
    //         let inputValue = inputValues
    //         if (inputValue.includes("")) {

    //             alert('Please, complete necessary details to continue.')
    //         } else {
    //             clearForm();
    //             alert("Thank you " + Name +
    //                 ", you have successfully made an appointment with Pegasus Eyecare Consultants. Have a great day!");

    //         } return
    //     }

    // }
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






    // const clearForm = () => {
    //     // To clear inputs
    //     Name = '';
    //     phoneNumber = '';
    //     email = '';
    // }

