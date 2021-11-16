AOS.init();

let nameInput = document.getElementById("name-input");
let emailInput = document.getElementById("email-input");
let numberInput = document.getElementById("number-input");
let nameAlert = document.getElementById("nameAlert");
let emailAlert = document.getElementById("emailAlert");
 let phoneAlert = document.getElementById("phoneAlert");
 let nameInput1 = document.getElementById("name1-input");
 let nameAlert1 = document.getElementById("nameAlert1");
function validateName() {
    let regex = /^([A-Z]|[a-z])[a-z]{2,8}$/;
    if (regex.test(nameInput.value)== true) {
        nameAlert.classList.replace("d-block" , "d-none");
    } else {
        nameAlert.classList.replace("d-none" , "d-block");
    }
}
nameInput.addEventListener("keyup" , function(){
    validateName(nameInput.value);
})
function validateName1() {
    let regex = /^([A-Z]|[a-z])[a-z]{2,8}$/;
    if (regex.test(nameInput1.value)== true) {
        nameAlert1.classList.replace("d-block" , "d-none");
    } else {
        nameAlert1.classList.replace("d-none" , "d-block");
    }
}
nameInput1.addEventListener("keyup" , function(){
    validateName1(nameInput1.value);
})
function validateEmail() {
    let  regex = /^[a-zA-Z0-9]{5,60}@[a-z]{3,10}.com$/;
    if (regex.test(emailInput.value)== true) {
        emailAlert.classList.replace("d-block" , "d-none");
    } else {
       emailAlert.classList.replace("d-none" , "d-block");
    }
}
emailInput.addEventListener("keyup" , function(){
    validateEmail(emailInput.value);
})
function validatePhone() {
    var regex = /^(002)?01(1|0|5|2)[0-9]{8}$/;
    if (regex.test(numberInput.value)== true) {
        phoneAlert.classList.replace("d-block" , "d-none");
    } else {
        phoneAlert.classList.replace("d-none" , "d-block");
    }
}
numberInput.addEventListener("keyup" , function(){
    validatePhone(numberInput.value);
})
// $('textarea').keypress(function () {
    
//     let x = (textInput.value).length;
//     console.log(x);
//     if (x < 70) {
//         $(".counter").text(70 - (x += 1) + "lettre needing");
//     } else {
//         $(".counter").text("finished");
//         this.value = this.value.substring(0, max);
//     }
// });