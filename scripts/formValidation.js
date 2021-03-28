// Variables from the message form in index.htm are here
const msgForm = document.querySelector('#message-form');
let alertMsg = document.querySelector('#alert-msg');
const userName = document.querySelector('#name');
const emailFrom = document.querySelector('#email');
const subject = document.querySelector('#subject');
const messageTxt = document.querySelector('#message');
let submitBtn = document.querySelector('#submit-btn');

//element variable for book appointment now
const appointmentBooking = document.querySelector("#booking-btn");


//console.log(submitBtn, msgForm)


const clearMsg = () => {
   userName.value = '';
   emailFrom.value = '';
   subject.value = '';
   messageTxt.value = '';
}

function validateForm(e) {
   if (userName.value === '' || emailFrom.value === '' || subject.value === '' || messageTxt === '') {
      e.preventDefault();

      alertMsg.classList.add('error')
      alertMsg.innerHTML = 'Please complete the form enteries properly before submitting.'
      setTimeout(() => alertMsg.remove(), 5000)

      console.log('fill the form properly');
      return false;

   }
   else {
      console.log('message sent successfully')
      return true;
      //document.msgForm.submit();     
   }
}
msgForm.addEventListener('submit', validateForm);

console.log(msgForm['action']);
console.log(document.title)


function getAppointmentForm(e) {
   e.preventDefault();
   location.href = '/public/book-appointment.php';
   console.log("booking button clicked")
}
appointmentBooking.addEventListener('click', getAppointmentForm);


/** Eventlistener for the message form, 
 * appointment form and book appointment button
 * 
 */

