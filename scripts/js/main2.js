
  AOS.init();
  

let frist_name = document.getElementById("frist_name");
let last_name = document.getElementById("last_name");
let emailInput = document.getElementById("emailInput");
let phoneNumInput = document.getElementById("phoneNumInput");
let basic_salary = document.getElementById("basic_salary");
let inputFNameAlert = document.getElementById("inputFNameAlert");
let inputLNameAlert = document.getElementById("inputLNameAlert");
let inputEmailAlert =document.getElementById("inputEmailAlert");
let inputNumAlert =document.getElementById("inputNumAlert");
let basic_salaryAlert =document.getElementById("basic_salaryAlert");

//validation  first name///
function validateUserFName() {
    let regex = /^[A-Z][a-z]{2,10}$/;
    if (regex.test(frist_name.value) == true) {
        inputFNameAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        inputFNameAlert.classList.replace("d-none" , "d-block");
    }
}
frist_name.addEventListener("keyup", function(){
    validateUserFName(frist_name.value);
})
//validation  last name//
function validateUserlName() {
    let regex = /^[A-Z][a-z]{2,10}$/;
    if (regex.test(last_name.value) == true) {
        inputLNameAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        inputLNameAlert.classList.replace("d-none" , "d-block");
    }
}
last_name.addEventListener("keyup", function(){
    validateUserlName(last_name.value);
})

//validation phone num //
function validateUserNum() {
    let regex =  /^(002)?01(1|0|5|2)[0-9]{8}$/;
    if (regex.test( phoneNumInput.value) == true) {
        inputNumAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        inputNumAlert.classList.replace("d-none" , "d-block");
    }
}
phoneNumInput.addEventListener("keyup", function(){
    validateUserNum( phoneNumInput.value);
})

//validation email//
function validateUserEmail() {
    let regex = /^[a-zA-Z0-9]{2,20}@[a-z]{2,12}.([a-z]{2,12})$/;;
    if (regex.test(emailInput.value) == true) {
        inputEmailAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        inputEmailAlert.classList.replace("d-none" , "d-block");
    }
}
emailInput.addEventListener("keyup", function(){
    validateUserEmail(emailInput.value);
})

//validation basic salary //
function validateUserSalary() {
    let regex =  /^\d{1,6}(?:\.\d{0,2})?$/;
    if (regex.test( basic_salary.value) == true) {
        basic_salaryAlert.classList.replace("d-block" , "d-none");
    } 
    else
     {
        basic_salaryAlert.classList.replace("d-none" , "d-block");
    }
}
basic_salary.addEventListener("keyup", function(){
    validateUserSalary( basic_salary.value);
})



