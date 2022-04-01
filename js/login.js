
const email = document.getElementById("username");
const pass = document.getElementById("password");
const id = document.getElementById("sel");


form.addEventListener('submit', (event) => {
    // event.preventDefault();
    validateForm();
    validateEmail(email);
    if (isFormValid() == true) {
        form.submit();
        //  alert('Registration Successful');
        //        swal("Welcome " + fname.value.trim(), "Registratio Successful");
        //        location.href = `demo.html?fname=${fname.value.trim()}`;

    }
    else {
        event.preventDefault();
    }
});

function isFormValid() {
    const inputContainers = form.querySelectorAll('.form-handler');
    let result = true;
    inputContainers.forEach((container) => {
        if (container.classList.contains('error')) {
            result = false;
        }
    });
    return result;

}


function validateForm() {
  //password
    if (pass.value.trim() == '') {
        showError(pass, 'Should not be empty');
    }
    else if (pass.value.trim().length <= 5 || pass.value.trim().length > 20) {
        showError(pass, 'Password should be between 5 and 20');
    }
    else {
        showSuccess(pass);
    }
    
    // //identity
    if (id.value == '') {
        showError(id, 'Must be selected');
    }
    else
     {
        showSuccess(id);
    }
   
}
//valid email uisng Regular Expression
function validateEmail(input) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(String(input.value.trim()).toLowerCase())) {
        showSuccess(input);
    } else {
        showError(input, 'Invalid email');
    }
}

function showError(input, message) {
    const parent = input.parentElement;
    parent.className = 'form-handler error';
    const small = parent.querySelector('small');
    small.innerHTML = message;
}
function showSuccess(input) {
    const parent = input.parentElement;
    parent.className = 'form-handler success';
}
