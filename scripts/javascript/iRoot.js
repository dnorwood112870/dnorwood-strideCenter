function validateForm_guest() {
    var x = document.forms["guestForm"]["email"].value;
    var y = document.forms["guestForm"]["comment"].value;
    if (x == "" || y == "") {
        
        alert("EMAIL AND COMMENTS MUST BE FILLED OUT!");
        return false;
    }
}

function validateForm_search() {
    var z = document.forms["iSearch"]["email"].value;
    if ((z == "") || (z == " ")) {
        
        alert("EMAIL MUST BE FILLED OUT!");
        return false;
    }
} 