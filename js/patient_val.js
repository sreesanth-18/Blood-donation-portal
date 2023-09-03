function validateForm()
{
    var pname = document.getElementById("pname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var dob = document.getElementById("dob").value;
    var bgroup = document.getElementById("bgroup").value;
    var district = document.getElementById("district").value;
    var usrname = document.getElementById("usrname").value;
    var pwd = document.getElementById("pwd").value;

    if (pname === "" || email === "" || phone === "" || dob === "" || bgroup === "Blood Group" || district === "District" || usrname === "" || pwd === "") 
    {
        alert("Please fill in all the required fields.");
        return false;
    }
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) 
    {
        alert("Please enter a valid email address.");
        return false;
    }
    var phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }
    return true; 
}
