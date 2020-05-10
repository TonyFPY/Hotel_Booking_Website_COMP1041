<?php
$username = $_POST['username'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$roomType = $_POST['roomType'];
$roomNo = $_POST["roomNo"];
try {
    $conn = new PDO("mysql:host=localhost;dbname=scypf1","scypf1", "123456");
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);
    do{
        $bookingID = rand(1000,9999);
        $sql="SELECT bookingID FROM booking where bookingID = '$bookingID'";
        $rows = $conn->query($sql);
    }while($rows->rowCount() != 0);
    
    $sql="INSERT INTO booking (bookingID,roomNo,roomType,username,startDate,endDate) 
    VALUES('$bookingID','$roomNo','$roomType','$username','$startDate','$endDate')";
    if($rows = $conn->query($sql)){
        echo '<script>    
        var ok = confirm("Booking successfully!");
        if(ok == true){window.location.href="Customer.php"}</script>';
    }

} catch (PDOException $e) {
    echo 'Error!: ' . $e->getMessage() . '<br />';
}


?>