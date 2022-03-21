function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function validate(){
    var errorMessage = "";

    errorMessage += validatePassword(RegisterForm.pw.value);

    if(errorMessage == "") return true
    else {
        alert(errorMessage);
        return false;
    }
}

function validatePassword(field) {
    if(field.length<8)
        return " Password minimum 8 letter. \n"
    else if (!/[A-Z]/.test(field)) {
        return " Password must contain capital letter. \n"
    } else {
        return ""
    }
}

