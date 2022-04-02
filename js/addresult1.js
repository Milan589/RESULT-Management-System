const form = document.getElementById("form1");
const sad = document.getElementById("sad");
const daa = document.getElementById("daa");
const sm = document.getElementById("sm");
const web = document.getElementById("web");
const mm = document.getElementById("mm");
const crypt = document.getElementById("crypt");


form.addEventListener('submit', (event) => {
    // event.preventDefault();
    validateForm();
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


    function validateForm() {
     
        //SAD marks
        if(sad.value==''){
            showError(sad,'Marks cannot be empty');
        }
        else if(sad.value >100 ){
            showError(sad,'Marks cannot be greater than 100 ');

        }
        else{
            showSuccess(sad);
        }
        
          //DAA marks
          if(daa.value==''){
            showError(daa,'Marks cannot be empty');
        }
        else if(daa.value >100 ){
            showError(daa,'Marks cannot be greater than 100 ');

        }
        else{
            showSuccess(daa);
        }
          //sm marks
          if(sm.value==''){
            showError(sm,'Marks cannot be empty');
        }
        else if(sm.value >100 ){
            showError(sm,'Marks cannot be greater than 100 ');

        }
        else{
            showSuccess(sm);
        }
  
          //web marks
          if(web.value==''){
            showError(web,'Marks cannot be empty');
        }
        else if(web.value >100 ){
            showError(web,'Marks cannot be greater than 100 ');

        }
        else{
            showSuccess(web);
        }
      
         //mm marks
          if(mm.value==''){
            showError(mm,'Marks cannot be empty');
        }
        else if(mm.value >100 ){
            showError(mm,'Marks cannot be greater than 100 ');

        }
        else{
            showSuccess(mm);
        }
          //Crypt marks
          if(crypt.value==''){
            showError(crypt,'Marks cannot be empty');
        }
        else if(crypt.value >100 ){
            showError(crypt,'Marks cannot be greater than 100 ');

        }
        else{
            showSuccess(crypt);
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
    
 