<?php
    require_once "dbConnect.php";

    if (isset($_POST['submit'])){
        $Fname = $_POST['FirstName'];
        $Lname = $_POST['LastName'];
        $email = $_POST['Email'];
        $Country = $_POST['Country'];
        $Company = $_POST['Company'];
        $UserName = $_POST['Username'];
        $pwd = $_POST['pwd'];
        $role = $_POST['role'];

        $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);

        $sql = "INSERT INTO distributor (first_name, last_name, email, country, company_name, username, password, role) VALUES ('$Fname','$Lname','$email','$Country', '$Company', '$UserName', '$pwdHashed', '$role')";
        
        if (mysqli_query($conn, $sql)){
            header("location: loginForDistributor.php?signup=success");
        } else {
            echo "Error creating new record: " . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>