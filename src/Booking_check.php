<?php

function showRoom($username,$startDate,$endDate,$roomType){
    try {
        if ($username==''||$startDate==''||$endDate==''||$roomType==''){
            echo '<script>alert("Please fill all the blanks!");history.go(-1);</script>';
            exit(0);
        } elseif ($startDate > $endDate) {
            echo '<script>alert("Invalid Dates!");history.go(-1);</script>';
            exit(0);
        } else {
            $conn = new PDO("mysql:host=localhost;dbname=scypf1","scypf1", "123456");
            $conn->setAttribute(PDO::ATTR_ERRMODE,
                                PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT roomNo FROM rooms WHERE roomType='$roomType'
            AND roomNo NOT IN (SELECT roomNo FROM booking WHERE'$endDate' > startDate AND '$startDate' < endDate )";
            $rows = $conn->query($sql);
            if ($rows->rowCount() == 0) {
                echo '<script>alert("Sorry, no room available!");history.go(-1);</script>';
                exit(0);
            } else {
                $text='';
                foreach($rows as $room){
                    $text = $text . '<option value="' . $room['roomNo'] . '">' . $room['roomNo'] . '</option>';
                }
                return $text;
            }

        }

    } catch (PDOException $e) {
        echo 'Error!: ' . $e->getMessage() . '<br />';
    }
}

?>
