<?php  
    if(isset($_POST["register"]) && $_POST["register"] == "register"){  
        $status = $_POST["status"];
        $name = $_POST["name"];
        $p_id = $_POST["p_id"];
        $tele = $_POST["tele"];
        $email = $_POST["email"];
        $user = $_POST["username"];  
        $psw = $_POST["password"];  
        $re_psw = $_POST["re_password"];  
        if($name==''||$p_id==''||$tele==''||$email==''||$user==''||$psw==''||$re_psw==''){  
            echo "<script>alert('Please complete the form!'); history.go(-1)</script>";  
        }else{  
                if($psw != $re_psw){ 
                    echo "<script>alert('Different inputs!'); history.go(-1)</script>";   
                   
                }else{  
                    try{
                        $conn = new PDO("mysql:host=localhost;dbname=scypf1",
                        "scypf1", "123456");
                        $conn->setAttribute(PDO::ATTR_ERRMODE,
                                            PDO::ERRMODE_EXCEPTION);
        
                        $sql = 'SELECT username FROM users WHERE username = "$user"'; //SQL语句  
                        $result = $conn->query($sql);
        
                        if($result->rowCount() != 0){  
                            echo '<script>alert("This username already exists!"); history.go(-1)</script>';  
                        }else{  
                            $sql_insert = "INSERT INTO users VALUES('$status','$name','$p_id','$tele','$email','$user','$psw')";  
                            $res_insert = $conn->query($sql_insert);  
                            //$num_insert = mysql_num_rows($res_insert);  
                            if($res_insert){  
                                echo '<script>    
                                var ok = confirm("New account is successfully built!");
                                if(ok == true){window.location.href="Login.html"}</script>';
                            }else{  
                                echo '<script>alert("Please try it again!"); history.go(-1)</script>';  
                            }  
                        }  
                    } catch (PDOException $e){
                        echo 'Error!' . $e->getMessage() . '<br />';
                    }
                } 
             
        }  
    }else{  
        echo "<script>alert('Unable to submit!'); history.go(-1)</script>";  
    }  

?>