<?php
    require_once('connection.php');

    if(isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordconf = $_POST['passwordconf'];

            if(!empty($email) && $password == $passwordconf) {
                $SELECT = "SELECT email From users Where email = ? Limit 1";
                $INSERT = "INSERT Into users (name, email, password, passwordconf) values(?, ?, ?, ?)";
                //Prepare statement
                $stmt = $conn->prepare($SELECT);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->bind_result($email);
                $stmt->store_result();
                $rnum = $stmt->num_rows;
                if ($rnum==0) {
                    $stmt->close();
                    $stmt = $conn->prepare($INSERT);
                    $stmt->bind_param("ssss", $name, $email, $password, $passwordconf);
                    $stmt->execute();
                    header("location:login.html");
                }
                else {
                    echo "Someone already registered using this email or wrong password.";
                }
                $stmt->close();
                $conn->close();
        }
    }
    else {
        echo "False";
    }

?>