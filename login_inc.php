<?php
    require_once "dbConnect.php";

    if(isset($_POST['submit'])){
        $uid = $_POST['userName'];
        $pwd = $_POST['password'];

        $sql = "SELECT * FROM distributor WHERE username =  '$uid';";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $firstName = $row['first_name'];
            $pwdHashed = $row['password'];

            $checkedPWD = password_verify($pwd, $pwdHashed);

            if ($checkedPWD === false){
                header("location:login.php?password=wrong");
            } else {
                session_start();
                $_SESSION["id"] = $row["id"];
                $_SESSION["role"] = $row["role"];
                $_SESSION["first_name"] = $row["first_name"];
                header("location:index.php");
            }
        } else {
            header("location:login.php?login=fail");
        }
    }

?>

