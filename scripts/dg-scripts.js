// JavaScript source code

const appointmentBooking = document.querySelector("#booking-btn");
const continueBtn = document.querySelector("#continue-btn");
const appointmentBtn = document.getElementsByClassName("appointment-btn")[0];
let alertMessage = document.querySelector('#alert-msg');


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
        alertMessage.classList.add('error')
        alertMessage.innerHTML = 'Please select a service before you continue.';
        setTimeout(() => alertMsg.remove(), 9000)
        return;
    }
}




const appointmentForm = document.querySelector('#appointment-form');
console.log(appointmentForm);

const appointmentDate = document.querySelector('#date');
const time = document.querySelector('#appointment-time');
const Name = document.querySelector('#name');
const email = document.querySelector('#email');
// const submitButton = document.querySelector('#appointment-btn');
const phoneNumber = document.querySelector('#phone-number');

function submitForm (e) {
    if (Name.value === '' || email.value === '' || time.value === '' || appointmentDate.value === ''|| phoneNumber.value === ''){
      e.preventDefault();
      alertMessage = document.querySelector('#alert-msg');

      alertMessage.classList.add('error')
      alertMessage.innerHTML='Please complete the form enteries properly before submitting.'
      setTimeout(() => alertMessage.remove(), 5000)

      console.log('fill the form properly');
      return false;
      
   } 
   else {
      console.log('message sent successfully')     
return true;
   }

}
appointmentForm.addEventListener('submit', submitForm);



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

