/**
* Appointment form variables 
*/
const appointmentForm = document.querySelector('#appointment-form');
let alertMessage2 = document.querySelector('#alert-message');
const appointmentDate = document.querySelector('#date');
const time = document.querySelector('#appointment-time');
const Name = document.querySelector('#name');
const email = document.querySelector('#email');
const phoneNumber = document.querySelector('#phone-number');


function submitForm(e) {
   console.log(appointmentForm)
   if (Name.value === '' || email.value === '' || time.value === '' || appointmentDate.value === '' || phoneNumber.value === '') {
      e.preventDefault();
      alertMessage2.classList.add('error')
      alertMessage2.innerHTML = 'Please complete the form enteries properly before submitting.'
      setTimeout(() => alertMessage2.remove(), 9000)

      console.log('fill the form properly');
      return false;

   }
   else {
      console.log('message sent successfully')

      return true;
   }
}
appointmentForm.addEventListener('submit', submitForm);

