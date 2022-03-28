const form = document.getElementById("form");
// const sid = document.getElementById("student-Id");
// const fname = document.getElementById("fname");
// const lname = document.getElementById("lname");
const faculty = document.getElementById("faculty");
const semester = document.getElementById("semester");
const sad = document.getElementById("sad");
const sadpr = document.getElementById("sadpr");
const daa = document.getElementById("daa");
const daapr = document.getElementById("daapr");
const sm = document.getElementById("sm");
const smpr = document.getElementById("smpr");
const web = document.getElementById("web");
const webpr = document.getElementById("webpr");
const mm = document.getElementById("mm");
const mmpr = document.getElementById("mmpr");
const crypt = document.getElementById("crypt");
const cryptpr = document.getElementById("cryptpr");

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
        // //student_ID
        // if (sid.value.trim() == '') {
        //     showError(sid, 'SID should not be empty');
        // }
        // else if (sid.value.trim().length < 5 || sid.value.trim().length  >=6) {
        //     showError(sid, 'Must be 5 digit');
        // }
        // else {
        //     showSuccess(sid);
        // }
        // //username

        // if (fname.value.trim() == '') {
        //     showError(fname, 'First name  should not be empty');
        // }
        // else if (fname.value.trim().length < 3 || fname.value.trim().length > 20) {
        //     showError(fname, 'Must be in 3 and 20 character');
        // }
        // else {
        //     showSuccess(fname);
        // }
        // //last name
        // if (lname.value.trim() == '') {
        //     showError(lname, 'Last Name  should not be empty');
        // }
        // else if (lname.value.trim().length < 3 || lname.value.trim().length > 20) {
        //     showError(fname, 'Must be in 3 and 20 character');
        // }
        // else {
        //     showSuccess(lname);
        // }
        //faculty
        if(faculty.value.trim()==''){
            showError(faculty,'Must be selected');
        }
        else{
            showSuccess(faculty);
        }
        if(semester.value.trim()==''){
            showError(semester,'Must be selected');
        }
        else{
            showSuccess(semester);
        }
        //SAD marks
        if(sad.value==''){
            showError(sad,'Marks cannot be empty');
        }
        else if(sad.value >60 ){
            showError(sad,'Marks cannot be greater than 60 ');

        }
        else{
            showSuccess(sad);
        }
         //SAD PR marks
         if(sadpr.value==''){
            showError(sadpr,'Marks cannot be empty');
        }
        else if(sadpr.value >40 ){
            showError(sadpr,'Marks cannot be greater than 40 ');

        }
        else{
            showSuccess(sadpr);
        }
          //DAA marks
          if(daa.value==''){
            showError(daa,'Marks cannot be empty');
        }
        else if(daa.value >60 ){
            showError(daa,'Marks cannot be greater than 60 ');

        }
        else{
            showSuccess(daa);
        }
        //DAA PR marks
        if(daapr.value==''){
            showError(daapr,'Marks cannot be empty');
        }
        else if(daapr.value >40 ){
            showError(daapr,'Marks cannot be greater than 40 ');

        }
        else{
            showSuccess(daapr);
        }
          //sm marks
          if(sm.value==''){
            showError(sm,'Marks cannot be empty');
        }
        else if(sm.value >60 ){
            showError(sm,'Marks cannot be greater than 60 ');

        }
        else{
            showSuccess(sm);
        }
        //SM PR marks
        if(smpr.value==''){
            showError(smpr,'Marks cannot be empty');
        }
        else if(smpr.value >40 ){
            showError(smpr,'Marks cannot be greater than 40 ');

        }
        else{
            showSuccess(smpr);
        }
          //web marks
          if(web.value==''){
            showError(web,'Marks cannot be empty');
        }
        else if(web.value >60 ){
            showError(web,'Marks cannot be greater than 60 ');

        }
        else{
            showSuccess(web);
        }
        //WEB PR marks
        if(webpr.value==''){
            showError(webpr,'Marks cannot be empty');
        }
        else if(webpr.value >40 ){
            showError(webpr,'Marks cannot be greater than 40 ');

        }
        else{
            showSuccess(webpr);
        }
         //mm marks
          if(mm.value==''){
            showError(mm,'Marks cannot be empty');
        }
        else if(mm.value >60 ){
            showError(mm,'Marks cannot be greater than 60 ');

        }
        else{
            showSuccess(mm);
        }
        //MM PR marks
        if(mmpr.value==''){
            showError(mmpr,'Marks cannot be empty');
        }
        else if(mmpr.value >40 ){
            showError(mmpr,'Marks cannot be greater than 40 ');

        }
        else{
            showSuccess(mmpr);
        }
          //Crypt marks
          if(crypt.value==''){
            showError(crypt,'Marks cannot be empty');
        }
        else if(crypt.value >60 ){
            showError(crypt,'Marks cannot be greater than 60 ');

        }
        else{
            showSuccess(crypt);
        }
        //CRYPTO PR marks
        if(cryptpr.value==''){
            showError(cryptpr,'Marks cannot be empty');
        }
        else if(cryptpr.value >40 ){
            showError(cryptpr,'Marks cannot be greater than 40 ');

        }
        else{
            showSuccess(cryptpr);
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
    
 