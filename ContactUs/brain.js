let username = document.querySelector('#username');
let email = document.querySelector('#email');
let phone = document.querySelector('#phone');
let message = document.querySelector('#message');
let btn = document.querySelector('form button')

function validation(){
let input_username = username.value;
let input_email = email.value;
let input_phone = phone.value;
let input_message = message.value;

if (input_username === '' || input_email === '' || input_phone === '' || input_message === ''){
    alert("All Input Fields are Mandatory")
}
else{
    alert("Form Submitted Successfully")
}

}

btn.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    validation();
    window.location.href='contact.html'
});


