// JavaScript source code


var name1 = document.forms['form']['name1'];
var surname = document.forms['form']['surname'];
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];
var pnum = document.forms['form']['pnum'];

var name1_error = document.getElementById('name1_error');
var surname_error = document.getElementById('surname_error');
var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');
var pnum_error = document.getElementById('pnum_error');

function validated() {
    if (name1.value.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/)) {
        name1.style.border = "3px solid red";
        name1_error.style.display = "block";
        return false;
    }

    if (name1.value.length <=2) {
        name1.style.border = "3px solid red";
        name1_error.style.display = "block";
        name1.focus();
        return false;
    }

    if (surname.value.match(/^[^ ]+@[^ ]+\.[a-z]{2,3}$/)) {
       surname.style.border = "3px solid red";
       surname_error.style.display = "block";
        return false;
    }

    if (surname.value.length <=2) {
        surname.style.border = "3px solid red";
        surname_error.style.display = "block";
        surname.focus();
        return false;


    }
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
    if (pnum.value.length < 10) {
        pnum.style.border = "3px solid red";
        pnum_error.style.display = "block";
        pnum.focus();
        return false;
    }
}
function name1_Verify() {
    if (name1.value.length > 2) {
        name1.style.border = "3px solid silver";
        name1_error.style.display = "none";
        
        return true;
    }
}
function surname_Verify() {
    if (surname.value.length > 2) {
        surname.style.border = "3px solid silver";
        surname_error.style.display = "none";

        return true;
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
    function pnum_Verify() {
        if (pnum.value.length >= 8) {
            pnum.style.border = "3px solid silver";
            pnum_error.style.display = "none";
            return true;
        }
    }
}


