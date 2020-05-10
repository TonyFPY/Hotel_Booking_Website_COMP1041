<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Staff</title>
    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="./css/Staff.css" />

</head>
<body>
    <div id="all">

    
    <!-- top -->    
    <header class="top">
        <div id="top_left"><img id="logo" src="./image/logo.png"></div>
        <div id="top_middle"><h1 id="sentence">Enjoy The Sunshine!</h1></div>
        <div id="top_right">
            <ul class="top">
                <li class="top"><a class="top" href="index.php">Home</a></li> 
                <li class="top">                    
                    <form method="POST" action="?logout=true">
                            <input type="submit" style="width:100px;height:50px; color:red;margin-top:40px; font-size:20px;" value="Log out" onclick=logout()>
                    </form>
                </li> 
                <?php
                    function logout(){
                        session_start();
                        session_destroy();
                        header("Location: index.php");
                    }
                    if (isset($_GET['logout'])) {
                        logout();
                    }
                ?>
            </ul>
        </div>
    </header>
    
    <section>
        <!-- background -->
        <div class="home_bg">
            <br/>Booking Info (Only staff can view)<br/><br/>
            <table  class="format" border="1">
                <tr style="height:50px;">
                    <th>Booking ID</th>
                    <th>Room Number</th>
                    <th>Room Type</th>
                    <th>Username</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Cancel Button</th>
                </tr>
                <?php
                    include 'Staff_view.php';
                    echo addInfo();
                ?>
            </table>
            <br/>
        </div>
        
    </section>
    
    <!-- FOOTER -->
    <footer>
        <div class="footer_left">
            <img id="footer_logo" src="./image/logo.png">
        </div>
        <div class="footer_right">
            <ul>        
                <li id="footer_text">Address: XX, XXX, Lukewarm Kingdom</li><br />
                <li id="footer_text">Telephone: 1-2345-67890</li><br />
                <li id="footer_text">E-mail: hello@SunnyIsle.com</li><br />
            </ul>
        </div>
    </footer>
    <!-- END / FOOTER --> 
    </div>

    <script>
        function cancel(i) {
            var ajax = new XMLHttpRequest();
            ajax.open('get','Staff_view.php?callCancel='+i);
            ajax.send();
            ajax.onreadystatechange = function () {
            if (ajax.readyState==4 &&ajax.status==200) {
                    console.log(ajax.responseText);
                    window.location.reload(); 
            　　}
            }

        }
    </script>
</body>
</html>