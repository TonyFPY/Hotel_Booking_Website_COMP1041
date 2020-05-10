<?php

function addInfo(){
    try {
        $conn = new PDO("mysql:host=localhost;dbname=scypf1",
        "scypf1", "123456");
        $conn->setAttribute(PDO::ATTR_ERRMODE,
                            PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM booking;";
        $rows = $conn->query($sql);
        $conn = NULL;
        if ($rows->rowCount() != 0) {
            $text="";
            foreach($rows as $info => $value){
                $text=$text."<tr style='height:50px;'>
                    <td>" .$value[0]. "</td>
                    <td>" .$value[1]. "</td>
                    <td>" .$value[2]. "</td>
                    <td>" .$value[3]. "</td>
                    <td>" .$value[4]. "</td>
                    <td>" .$value[5]. "</td>
                    <td>
                        <form method='POST' action='Staff_view.php'>
                        <button type='button' onclick=cancel(".$value[0
                        ].") style='color:red; font-size:20px';>
                            Cancel the booking
                        </button>
                        </form>
                    </td>
                </tr>";
                
            }
            return $text;
        } else {
            return
            "<tr style='height:50px;'>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>";
        }
    } catch (PDOException $e) {
        echo 'Error!: ' . $e->getMessage() . '<br />';
    }
}

function cancel($text_value){
    $conn = new PDO("mysql:host=localhost;dbname=scypf1",
    "scypf1", "123456");
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
    $stmt=$conn->prepare("DELETE FROM booking WHERE bookingID=?");
    $stmt->execute([$text_value]);
    $deleted = $stmt->rowCount();
    return $deleted;
}

if (isset($_GET['callCancel'])) {
    if ($_GET['callCancel'] != null) {
        echo cancel($_GET['callCancel']);
    }
}

?>