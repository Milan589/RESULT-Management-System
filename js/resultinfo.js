const form = document.getElementById("form");
const symbol = document.getElementById("symbol");
const semester = document.getElementById("semester");
const year = document.getElementById("year");
const dob = document.getElementById("dob");

form.addEventListener('submit', (event) =>{
    // event.preventDefault();
    validateForm();
    validateDOB(dob);

    if(isFormValid() == true){
        form.submit();
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

if(symbol.value.trim() =='' ){
    showError(symbol,'Symbol Number should not be empty');
}
else if(symbol.value.trim().length < 5 ){
    showError(symbol,'Must be in 5 digit');
} 
else
{
    showSuccess(symbol);
}
//last name
if(semester.value.trim() =='' ){
    showError(semester,'Semester must be selected');
}
else
{
    showSuccess(semester);
}
  if (year.value == '') {
            showError(year, 'Must be selected');
        }
        else {
            showSuccess(year);
        } 


}
//valid email uisng Regular Expression




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
    var pattern = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;

    if (pattern.test(input.value)) {
        showSuccess(input);
    }
    else {
        showError(input, 'Invalid DOB');
    }
}
