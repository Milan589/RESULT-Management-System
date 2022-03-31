const faculty = document.getElementById("subject");
const semester = document.getElementById("semester");
const year = document.getElementById("year");

form.addEventListener('submit', (event) => {
    // event.preventDefault();
    validateForm();
    validateDOB(dob);

    if (isFormValid() == true) {
        form.submit();
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
    if (subject.value == '') {
        showError(subject, 'Must be selected');
    }
    else {
        showSuccess(subject);
    }
    if (semester.value == '') {
        showError(semester, 'Must be selected');
    }
    else {
        showSuccess(semester);
    }
    if (year.value == '') {
        showError(year, 'Must be selected');
    }
    else {
        showSuccess(year);
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
function validateDOB(input) {
    // var pattern = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/; //(DD/MM/YYYY)
    var pattern = /([12]\d{3}\/(0[1-9]|1[0-2])\/(0[1-9]|[12]\d|3[01]))$/; //(YYYY/MM/DD)
    if (pattern.test(input.value)) {
        showSuccess(input);
    }
    else {
        showError(input, 'Invalid DOB');
    }
}
