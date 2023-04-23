
const form = document.querySelector('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const object = document.getElementById('object');
const message = document.getElementById('message');

if(form != null){
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        if (validateForm()) {
            form.submit();
        }
    });
}


function validateForm() {
    let isValid = true;

    if (fname.value.trim() === '') {
        isValid = false;
        setErrorFor(fname, 'First name is required');
    } else {
        setSuccessFor(fname);
    }

    if (lname.value.trim() === '') {
        isValid = false;
        setErrorFor(lname, 'Last name is required');
    } else {
        setSuccessFor(lname);
    }

    if (email.value.trim() === '') {
        isValid = false;
        setErrorFor(email, 'Email is required');
    } else if (!isValidEmail(email.value.trim())) {
        isValid = false;
        setErrorFor(email, 'Email is not valid');
    } else {
        setSuccessFor(email);
    }

    if (object.value.trim() === '') {
        isValid = false;
        setErrorFor(object, 'Object is required');
    } else {
        setSuccessFor(object);
    }

    if (message.value.trim() === '') {
        isValid = false;
        setErrorFor(message, 'Message is required');
    } else {
        setSuccessFor(message);
    }

    return isValid;
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const error = formControl.querySelector('.error-message');
    formControl.className = 'form-control error';
    error.innerText = message;
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isValidEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
