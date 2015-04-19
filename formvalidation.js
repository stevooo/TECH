
var val_name = /^[A-Za-z\']{2,25}$/;
var val_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var password = /^[A-Za-z0-9]{6,20}$/;
var country = /^[A-Za-z\']{0,25}$/;
var comment = /^[A-Za-z0-9\ \'\.\,\?\(\)\£\"\!\$\%\&\*\-\_\+]{10,1000}$/;


function validate(form) {

    form.onsubmit = function() {
        
        
        if (form.elements['firstname'].value.length == 0) {
            alert("You have not entered a first name");
            return false;
        } else {
            if (!val_name.test(form.elements['firstname'].value)) {
                alert("You have not entered a valid first name");
                return false;
            }
        }

        if (form.elements['lastname'].value.length == 0) {
            alert("You have not entered a last name");
            return false;
        } else {
            if (!val_name.test(form.elements['lastname'].value)) {
                alert("You have not entered a valid last name");
                return false;
            }
        }

        if (form.elements['email'].value.length == 0) {
            alert("You have not entered an email address");
            return false;
        } else {
            if (!val_email.test(form.elements['email'].value)) {
                alert("You have not entered a valid email address");
                return false;
            }
        }
        if (form.elements['password'].value.length < 6) {
            alert("You have not entered a long enough password");
            return false;
        } else {
            if (!password.test(form.elements['password'].value)) {
                alert("You have not entered a valid password");
                return false;
            }
        }
        if (form.elements['confirmpassword'].value.length < 6) {
            alert("You have not confirmed your password");
            return false;
        } 
        pass = form.elements['password'].value;
        if (!pass.match(form.elements['confirmpassword'].value)) {
                alert("Your passwords do not match please try again");
                return false;
        }
        if (!country.test(form.elements['country'].value)) {
            alert("Your country is not valid, please try again (field can be left empty)");
            return false;
        }
        return true;
    };
}

function commentvalidate(form){
    form.onsubmit = function() {
        
        
        if (form.elements['comment'].value.length == 0) {
            alert("You have not entered a comment.");
            return false;
        } else {
            if (!comment.test(form.elements['comment'].value)) {
                alert("you have not entered a valid comment.");
                return false;
            }
        }

        
        return true;
    };
    
}

function checkemail(form){
    form.onsubmit = function() {
        
        
        if (form.elements['email'].value.length == 0) {
            alert("You have not entered an email address");
            return false;
        } else {
            if (!val_email.test(form.elements['email'].value)) {
                alert("You have not entered a valid email address");
                return false;
            }
        }

        
        return true;
    };
    
}

