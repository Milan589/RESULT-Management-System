const form = document.getElementById("form");
const fname = document.getElementById("fname");
const lname = document.getElementById("last");
const email = document.getElementById("email");
const pass = document.getElementById("password");
const cpass = document.getElementById("password2");
const phone = document.getElementById("phone");
const address = document.getElementById("address");
const identity = document.getElementById("id");
const year = document.getElementById("year");

     form.addEventListener('submit', (event) =>{
        // event.preventDefault();
        validateForm();
        validateEmail(email);
        validatePhone(phone);
        validateDOB(dob);

        if(isFormValid() == true){
            form.submit();
                //  alert('Registration Successful');
                //        swal("Welcome " + fname.value.trim(), "Registratio Successful");
                //        location.href = `demo.html?fname=${fname.value.trim()}`;
                    
        }
        else{
            event.preventDefault();
        }
    });

    function isFormValid(){
                    const inputContainers = form.querySelectorAll('.form-handler');
                    let result=true;
                    inputContainers.forEach((container) =>{
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
    //last name
    if(lname.value.trim() =='' ){
        showError(lname,'Last Name  should not be empty');
    }
    else if(lname.value.trim().length < 3 || lname.value.trim().length > 20){
        showError(fname,'Must be in 3 and 20 character');
    }
    else
    {
        showSuccess(lname);
    }

    //password

    if(pass.value.trim() == ''){
        showError(pass, 'Should not be empty');
    }
    else if (pass.value.trim().length <= 5 || pass.value.trim().length >20) {
        showError(pass, 'Password should be between 5 and 20');
    }
    else{
        showSuccess(pass);
    }
    if (cpass.value.trim() == '') {
                showError(cpass, 'Password does not match')
            }
            else if (cpass.value.trim() !== pass.value.trim()) {
                showError(cpass, 'Password does not match')
            }
            else {
                showSuccess(cpass);
            }
            //address
            if (address.value.trim() == '') {
                showError(address, 'Address should not be empty');
            }
            else if (address.value.trim().length <= 2 || address.value.trim().length > 20) {
                showError(address, 'Address mut between 3 and 20');
            }
            else {
                showSuccess(address);
            }  
            //identity
            if (identity.value == '') {
                showError(identity, 'Must be selected');
            }
            else {
                showSuccess(identity);
            }
            if (year.value == '') {
                showError(year, 'Must be selected');
            }
            else {
                showSuccess(year);
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
    
    
    function validatePhone(input) {
        const re = /^[0]?[9][87]\d{8}$/;
        if (re.test(input.value)) {
            showSuccess(input);
        } else {
            showError(input, 'Invalid Phone');
        }
    }
    function validateDOB(input) {
        var pattern = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
    
        if (pattern.test(input.value)) {
            showSuccess(input);
        }
        else {
            showError(input, 'Invalid DOB');
        }
    }
