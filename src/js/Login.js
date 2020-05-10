function submitLogin(){
    var staff = document.getElementById("staff");
    var u_name = document.getElementById("username");
    var password = document.getElementById("password");
    
    var flag = 1;

    function chy(obj){
        var rr = $("input[type='radio']:checked").val();
        if(rr =="1"){
            document.getElementById("username").style.display="Jianjun Chen";
            document.getElementById("password").style.display="123456";
        }
    }

    if(u_name.value == ""){
        alert("Please enter your username!");
        flag = 0;
        return false;
    }

    if(password.value == ""){
        alert("Please enter the right password!");
        flag = 0;
        return false;
    }

    if(flag == 1){
        var ok = true
        if(ok == true){
            console.log("12111");
            window.location.href="Booking_Page.html";
        }
    }
    window.location.href="Booking_Page.html";

    return true;

}