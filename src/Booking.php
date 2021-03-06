<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Booking Page</title>
    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="./css/Booking_Page.css" />
</head>
<body>
    <div id="all">
    <!-- top -->    
    <header class="top">
        <div id="top_left"><img id="logo" src="./image/logo.png"></div>
        <div id="top_middle"><h1 id="sentence">Enjoy The Sunshine!</h1></div>
        <div id="top_right">
                <ul class="top">
                    <li class="top"><a class="top" href="index.php">Home Page</a></li>  
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
        <!-- rooms -->
        <div class="room_type">
            <div id="room_title"><br/><h1>ROOM TYPES</h1></div>
        </div><br/>
        <div class="picture">
            <div id="quarter1"><img id="img1" src="./image/large_d.jpg">Large room with double beds</div>
            <div id="quarter2"><img id="img2" src="./image/large_s.jpg">Large room with a large single bed</div>
            <div id="quarter3"><img id="img3" src="./image/small_s.jpg">Small room with a single bed</div>
            <div id="quarter4"><img id="img4" src="./image/vip.jpg">VIP Room</div>
        </div>
    </section>
    <section class="halve">
        <div id="half_left">
            <table border="1" >
                <tr >
                    <td class="content">Large double bed<br/><br/>Room X01</td>
                    <td class="content">Large double bed<br/><br/>Room X02</td>
                    <td class="content">Large single bed<br/><br/>Room X03</td>
                    <td class="content">Large single bed<br/><br/>Room X04</td>
                    <td class="content">Small single bed<br/><br/>Room X05</td>
                </tr>
                <tr >
                    <td colspan="5"> &nbsp;</td>
                </tr>
                <tr >
                    <td rowspan="2">VIP Room<br/><br/>Room X13</td>
                    <td rowspan="2" colspan="3">Stairs & Lobby</td>
                    <td class="content">Small single bed<br/><br/>Room X06</td>
                
                </tr>
                <tr>
                    <td class="content">Small single bed<br/><br/>Room X07</td>
                </tr>
                <tr >
                    <td colspan="5">&nbsp;</td>
                    
                </tr>
                <tr>
                    <td class="content">Large double bed<br/><br/>Room X12</td>
                    <td class="content">Large double bed<br/><br/>Room X11</td>
                    <td class="content">Large single bed<br/><br/>Room X10</td>
                    <td class="content">Large single bed<br/><br/>Room X09</td>
                    <td class="content">Small single bed<br/><br/>Room X08</td>
                </tr>
            </table>
        </div>
        <div id="half_right">
            <?php 
            $username = $_POST['username'];
            $startDate = $_POST['startDate'];
            $endDate = $_POST['endDate'];
            $roomType = $_POST['roomType'];
            echo("
                <form action='Booking_now.php' method='POST'>
                Username:<input type='text' name='username' value=$username><br/><br/>
                Check-in date:<input type='date' name='startDate' value=$startDate><br/><br/>
                Check-out date:<input type='date' name='endDate' value=$endDate><br/><br/>
                The room type:<input type='text' name='roomType' value=$roomType><br/><br/>
                The room number: <select name='roomNo'>");   

            include 'Booking_check.php';
            print_r(showRoom($username,$startDate,$endDate,$roomType));

            echo('
                    </select><br/><br/>
                    <input type="submit" value="Booking_Now!"; style="font-size:20px;height:45px;width:160px;display:inline-block;">
                </form>
            ');
            ?>
           
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
            <div class="footer_left">
                <img id="footer_logo" src=".image/logo.png">
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
</body>
</html>