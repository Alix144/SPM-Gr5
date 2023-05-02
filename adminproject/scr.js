// JavaScript source code

var email = document.forms['form']['email'];
var password = document.forms['form']['password'];


var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

function validated() {

    if (email.value.length < 9) {
        email.style.border = "3px solid red";
        email_error.style.display = "block";
        return false;

    }
    if (!email.value.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/)) {
        email.style.border = "3px solid red";
        email_error.style.display = "block";
        return false;
    }

    if (password.value.length < 8) {
        password.style.border = "3px solid red";
        pass_error.style.display = "block";
        password.focus();
        return false;
    }

}


function email_Verify() {
    if (email.value.length >= 9) {
        email.style.border = "3px solid silver";
        email_error.style.display = "none";
        return true;
    }
}
function pass_Verify() {
    if (password.value.length >= 8) {
        password.style.border = "3px solid silver";
        pass_error.style.display = "none";
        return true;
    }

}


