

function loginfun() {
    var name = document.forms['lforms']['lname'].value;
    var pass = document.forms['lforms']['lpass'].value;
    if (name == "" || name == null) {
        document.getElementById('logerror').innerHTML = " * Enter UserName";
        return false;
    }
    if (pass == "" || pass == null) {
        document.getElementById('logerror').innerHTML = " * Enter password";
        return false;
    }
}




function sfuncode() {
    var fname = document.forms['formre']['fname'].value;
    var email = document.forms['formre']['email'].value;
    var password = document.getElementById('rpass').value;
    var lname = document.getElementById('rlname').value;
    var zip = document.getElementById('rzip').value;
    var uname = document.getElementById('uuname').value;
    var repassword = document.getElementById('repass').value;
    var chacker = document.getElementById("rchack").checked;
    var county = document.getElementById("cosel").value;
    var address = document.getElementById("radd").value;
    var phone = document.getElementById("upno").value;


    // alert(county);

    if (fname == "" || fname == null) {
        document.getElementById('errorBox').innerHTML = " * Enter Valid First Name";
        document.formre.fname.focus();
        return false;
    }
    if (lname == "" || lname == null) {
        document.getElementById('errorBox').innerHTML = "* Enter Last Name";
        document.formre.lname.focus();
        return false;
    }
    if (county == "country") {
        document.getElementById('errorBox').innerHTML = "* Enter country Name";
        document.formre.county.focus();
        return false;
    }
    if (uname == "" || name == null) {
        document.getElementById('errorBox').innerHTML = "* Enter UserName";
        document.formre.uname.focus();
        return false;
    }
    if (email == "" || email == null) {
        document.getElementById('errorBox').innerHTML = "* Enter Valid Email";
        document.formre.email.focus();
        return false;
    }

    if (zip == "" || zip == null) {
        document.getElementById('errorBox').innerHTML = "* Enter City Zip Code";
        document.formre.zip.focus();
        return false;
    }
    if (address == "" || address == null) {
        document.getElementById('errorBox').innerHTML = "* Enter Address";
        document.formre.address.focus();
        return false;
    }
    if (password == "" || password == null) {
        document.getElementById('errorBox').innerHTML = "* Enter password";
        document.formre.rpass.focus();
        return false;
    }
    if (phone == "" || phone == null) {
        document.getElementById('errorBox').innerHTML = "* Enter PhoneNo";
        document.formre.upno.focus();
        return false;
    }
    if (phone.length > 10) {
        document.getElementById('errorBox').innerHTML = "* Enter valied PhoneNo";
        document.formre.upno.focus();
        return false;
    }
    if (repassword == "" || repassword == null) {
        document.getElementById('errorBox').innerHTML = "* Enter Re-Type Password";
        document.formre.repass.focus();
        return false;
    }
    if (!(password === repassword)) {
        document.getElementById('errorBox').innerHTML = "* Password Not mutch";
        document.formre.repass.focus();
        return false;
    }
    if (chacker === false) {
        document.getElementById('errorBox').innerHTML = "* You can allow us Therme";
        document.formre.chacker.focus();
        return false;
    }
    // if(ValidateEmail(email)){
    //     alert("Good It good Email");
    // }
    // else{
    //     alert("Not vaild email");
    // }

}


function ValidateEmail(input){
    if (input.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/)){
       alert("welcome");     
        return true;
    }
    else {
 alert("welcome false");
        return false;
    }
}

// function EmailValidation(enteredEmail)
// {
// var mail_format = "/^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/";
// if(enteredEmail.value.match(enteredEmail))
// {
// alert("Yeah! a valid email!");
// document.form1.text1.focus();
// return true;
// }
// else
// {
// alert("Sorry! an invalid email!");
// document.form1.text1.focus();
// return false;
// }
// }