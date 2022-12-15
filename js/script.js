// Load
document.onreadystatechange = function () {
    var state = document.readyState
    if (state == 'interactive') {
        document.getElementById('contents').style.visibility = "hidden";
    } else if (state == 'complete') {
        setTimeout(function () {
            document.getElementById('interactive');
            document.getElementById('load').style.visibility = "hidden";
            document.getElementById('contents').style.visibility = "visible";
        }, 1000);
    }
}
//  data send 
function formdata(val1) {
    document.getElementById("type").value = val1;
}

// form validation 
function validateForm() {
    var returnval = true;
    clearErrors();

    // Name
    var fullname = document.forms["myForm"]["fullname"].value;
    if (fullname.length == 0) {
        seterror("fullname", "*name is required");
        returnval = false;
    } else if (!isNaN(fullname)) {
        seterror("fullname", "*Enter valid name");
        returnval = false;
    }

    // Email
    var email = document.forms["myForm"]["email"].value;
    if (email.length == 0) {
        seterror("email", "*Email is required");
        returnval = false;
    }

    // phone
    var phone = document.forms["myForm"]["phone"].value;
    if (phone.length == 0) {
        seterror("phone", "*phone no is required");
        returnval = false;
    } else if (phone.length != 10) {
        seterror("phone", "*Phone number should be of 10 digits!");
        returnval = false;
    } else if (isNaN(phone)) {
        seterror("phone", "*Enter only number");
        returnval = false;
    }
    return returnval;
}

// contact form validation 
function contactsub() {
    var returnval = true;
    clearErrors();

    // Name
    var fname = document.forms["contactform"]["fname"].value;
    if (fullname.length == 0) {
        seterror("fname", "*First name is required");
        returnval = false;
    } else if (!isNaN(fname)) {
        seterror("fname", "*Enter valid name");
        returnval = false;
    }
    var lname = document.forms["contactform"]["lname"].value;
    if (fullname.length == 0) {
        seterror("lname", "*Last name is required");
        returnval = false;
    } else if (!isNaN(lname)) {
        seterror("lname", "*Enter valid name");
        returnval = false;
    }

    // Email
    var cemail = document.forms["contactform"]["cemail"].value;
    if (cemail.length == 0) {
        seterror("cemail", "*Email is required");
        returnval = false;
    }

    // phone
    var cphone = document.forms["contactform"]["cphone"].value;
    if (cphone.length == 0) {
        seterror("cphone", "*phone no is required");
        returnval = false;
    } else if (cphone.length != 10) {
        seterror("cphone", "*Phone number should be of 10 digits!");
        returnval = false;
    } else if (isNaN(cphone)) {
        seterror("cphone", "*Enter only number");
        returnval = false;
    }
    return returnval;
}

// validation form error clears
function clearErrors() {
    errors = document.getElementsByClassName('formerror');
    for (let item of errors) {
        item.innerHTML = "";
    }
}

function seterror(id, error) {
    //sets error inside tag of id 
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}
