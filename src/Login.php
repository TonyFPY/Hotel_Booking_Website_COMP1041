
<?php
    session_start();
   
    if (userInDB($_POST["username"], $_POST["password"], $_POST["status"]) == true && isset($_POST["login"])) {
        $_SESSION['username'] = $_POST["username"];
        $_SESSION['password'] = $_POST["password"]; 
        $_SESSION['status'] =  $_POST["status"];
        if($_POST["status"] == "customer"){
            header('Location: Booking_Page.php');
        } else {
            header('Location: Staff.php');
        }
            
    } else {
        echo '<script>    
        var ok = confirm("Sorry, incorrect username or password!");
        if(ok == true){window.location.href="Login.html"}</script>';
    }

    function userInDB($username, $password, $status){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=scypf1",
            "scypf1", "123456");
            $conn->setAttribute(PDO::ATTR_ERRMODE,
                                PDO::ERRMODE_EXCEPTION);

            if ($username == ''){
                echo '<script>alert("Please enter the username!");history.go(-1)</script>';
                exit(0);
            }
            if ($password == ''){
                echo '<script>alert("Please enter the password!");history.go(-1)</script>';
                exit(0);
            }
            $sql = "SELECT * FROM users WHERE userstatus = '$status' AND username = '$username' AND userPW = '$password';";
            $rows = $conn->query($sql);
            $conn = NULL;
            if ($rows->rowCount() != 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo 'Error!: ' . $e->getMessage() . '<br />';
        }
    }
?>