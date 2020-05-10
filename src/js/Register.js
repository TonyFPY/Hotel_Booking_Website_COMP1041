function submitForm(){
    var r_name = document.getElementById("realname");
    var p_id = document.getElementById("passport");
    var tel = document.getElementById("tel");
    var email = document.getElementById("email");
    var u_name = document.getElementById("username");
    var password1 = document.getElementById("password1");
    var password2 = document.getElementById("password2");

    if(r_name.value == ""){
        alert("Please enter your real name!");
        return false;
    }

    if(p_id.value == ""){
        alert("Please enter your passport ID!");
        return false;
    }

    if(tel.value == ""){
        alert("Please enter your telephone number!");
        return false;
    }

    if(email.value == ""){
        alert("Please enter your e-mail address!");
        return false;
    } else if(email.value.search("@") == -1) {
        alert("Please enter a valid e-mail address");
        return false;
    }

    if(u_name.value == ""){
        alert("Please enter your username!");
        return false;
    }

    if(password1.value == ""){
        alert("Please enter your password!");
        return false;
    } else if (password1.length < 6){
        alert("The length of your password should be at least 8!");
        return false;
    }

    if(password2.value == "" || password1.value != password2.value){
        alert("Please confirm your password again!");
        return false;
    }

    var ok = confirm("New account is successfully built!");
    if(ok == true){
        window.location.href="Login.html";
    }

}