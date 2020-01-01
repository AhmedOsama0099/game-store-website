function myFunction() {
    var pw=document.getElementById("password").value;
    var confirmPW=document.getElementById("confirmpassword").value;
    var age=document.getElementById("age").value;
    if(pw!=confirmPW){
        alert("Password not match");
        return false;
    }
    if(isNaN(age)){
        alert("not a number");
        return false;
    }
}