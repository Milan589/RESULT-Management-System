const form = document.getElementById("form");
const fname = document.getElementById('name');
const email = document.getElementById("email");
const subject = document.getElementById("subject");
const msg = document.getElementById("msg");

form.addEventListener('submit', (event) =>{
    // event.preventDefault();
    validateForm();
    validateEmail(email);
    if(isFormValid() == true){
        form.submit();
                
    }
    else{
        event.preventDefault();
    }

});
 function isFormValid(){
                    const inputContact = form.querySelectorAll('.form-handler');
                    let result=true;
                    inputContact.forEach((container) =>{
                        if(container.classList.contains('error')){
                            result=false;
                        }
                    });
                        return result;
                   
                }


function validateForm(){
    //username

    if(fname.value.trim() =='' ){
        showError(fname,'First name  should not be empty');
    }
    else if(fname.value.trim().length < 3 || fname.value.trim().length > 20){
        showError(fname,'Must be in 3 and 20 character');
    } 
    else
    {
        showSuccess(fname);
    }
    // if(email.value.trim() == ''){
    //     showError(email,'Email should not be empty');
    // }
    //subject
    if(subject.value.trim() =='' ){
        showError(subject,'Subject  should not be empty');
    }
    else if(subject.value.trim().length < 3 || subject.value.trim().length > 20){
        showError(subject,'Must be in 3 and 20 character');
    } 
    else
    {
        showSuccess(subject);
    }
    //message
    if(msg.value.trim() =='' ){
        showError(msg,'Message  should not be empty');
    }
    else if(msg.value.trim().length < 9 || msg.value.trim().length > 500){
        showError(msg,'Must be in 10 and 500 character');
    } 
    else
    {
        showSuccess(msg);
    }


}
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

