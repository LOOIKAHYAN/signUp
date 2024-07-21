
function gif() {
document.getElementById("happy").src="image/happy.gif";
}

function validateInfo() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;

    if (username === "" || password === "") {
    alert("Please fill in username and password.");
    return false;
    }
    
    if (password != confirmpassword) {
        alert("Password entered not same.");
        return false;
    }

    return true;
}